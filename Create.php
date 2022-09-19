<?php

require 'config.php';

    $xmlDoc = simplexml_load_file('https://www.w3schools.com/xml/cd_catalog.xml');
    $xmlDoc = $xmlDoc->children();

/* $insertOneResult = $collection->insertOne([
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
]);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
 */

 foreach($xmlDoc as $record){

    if($record-> TITLE ){
        echo $record->TITLE."</br>";
        $cd  = [
            'TITLE' => "".$record->TITLE,
            'ARTIST' => "".$record->ARTIST,
            'COUNTRY' => "".$record->COUNTRY,
            'COMPANY' => "".$record->COMPANY,
            'PRICE' => "".$record->PRICE,
            'YEAR' => "".$record->YEAR
        ];
        
        $collection->insertOne($cd);
    }

 }


?>
 