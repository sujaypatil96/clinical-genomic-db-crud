<?php
require 'vendor/autoload.php'; 
$client = new MongoDB\Client("mongodb://localhost:27017");
 
// connect tp a database named `Mongo_clingen_2`
$db = $client->Mongo_clingen_2;
?>