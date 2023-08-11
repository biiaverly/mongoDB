<?php
namespace       Src;


use Exception;
use MongoDB\Client;

require_once __DIR__ . '/../vendor/autoload.php';

class MangoConnection
{
    public function connect():Client
    {

        $client = new Client('mongodb://localhost:27017');
        try {
            // Send a ping to confirm a successful connection
            $client->selectDatabase('admin')->command(['ping' => 1]);
            echo "Pinged your deployment. You successfully connected to MongoDB!\n";
            return $client;
        
        } catch (Exception $e) {
            printf($e->getMessage());
        }
    }
}