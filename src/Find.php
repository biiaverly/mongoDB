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


if ($serie !== null) {
    echo "_id\n";
    echo $serie['_id'] . "\n\n";
    
    echo "Serie\n";
    echo $serie['Serie'] . "\n\n";
    
    echo "Seasons\n";
    echo $serie['Seasons'] . "\n\n";
    
    echo "Language\n";
    echo $serie['Language'] . "\n\n";
    
    echo "Type\n";
    echo $serie['Type'] . "\n\n";
    
    echo "Stars\n";
    echo $serie['Stars'] . "\n\n";
    
    echo "AgeMin\n";
    echo $serie['AgeMin'] . "\n";
} else {
    echo "Serie not found.\n";
}


$cursor = $collection->find(['AgeMin' => ['$gt' => '13']]);

foreach ($cursor as $document) 
{
    echo $document['Serie'], "\n";
}
