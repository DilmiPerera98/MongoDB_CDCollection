<?php

require 'config.php';

$cd = $collection-> find();
 $xml = "<CATALOG>";

foreach($cd  as $record){
    $xml = $xml.'<CD>
    <TITLE>'.$record->TITLE.'</TITLE>
    <ARTIST>'.$record->ARTIST.'</ARTIST>
    <COUNTRY>'.$record->COUNTRY.'</COUNTRY>
    <COMPANY>'.$record->COMPANY.'</COMPANY>
    <PRICE>'.$record->PRICE.'</PRICE>
    <YEAR>'.$record->YEAR.'</YEAR></CD>';
}
$xml = $xml."</CATALOG>";
print_r($xml);

 ?>

