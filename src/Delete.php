<?php

namespace Src;

use Src\MangoConnection;


require_once __DIR__ . '/../vendor/autoload.php';

echo "Enter the Serie name ";
$handle = fopen("php://stdin", "r");
$name = trim(fgets($handle)); // Use trim() to remove newline characters

$client = new MangoConnection();
$client = $client->connect();

$collection = $client->selectCollection("Serie", "Series");
$serie = $collection->findOne(['Serie' => $name]);

$collection->deleteOne(['Serie' => $name]);

echo "Document deleted successfully.";