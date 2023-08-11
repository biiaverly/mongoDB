<?php


namespace Src;

use Src\MangoConnection;


require_once __DIR__ . '/../vendor/autoload.php';

echo "Enter the Serie datas : name,season,language,type,stars,minimum age: ";
$handle = fopen("php://stdin", "r");
$line = trim(fgets($handle));

list($name, $season, $language,$type,$star,$age) = explode(",", $line);

$document = array( 
    "Serie" => $name, 
    "Seasons" => $season, 
    "Language" => $language,
    "Type" => $type,
    "Stars" => $star,
    "AgeMin" => $age
);


$client = new MangoConnection();
$client = $client->connect();


// Database name you want to check
$databaseName = 'Serie';

// List all available database names
$databaseNames = iterator_to_array($client->listDatabaseNames());;

// Check if the desired database name is in the list
if (in_array($databaseName, $databaseNames)) {
    echo "Connected to '$databaseName' database.\n";
} else {
    // Creating a db
    $db = $client->Serie;
    printf("Database ".$db." criado");
    // Creating a Colletion
    $colletion = $db->createCollection('Series');       
}

$collection = $client->selectCollection("Serie","Series");

$collection->insertOne($document);
printf ("Document inserted successfully \n");