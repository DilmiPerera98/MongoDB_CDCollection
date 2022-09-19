<?php
     
     include 'config.php';

        $TITLE=$_POST['TITLE'];
        $ARTIST=$_POST['ARTIST'];
        $COUNTRY=$_POST['COUNTRY'];
        $COMPANY=$_POST['COMPANY'];
        $PRICE=$_POST['PRICE'];
        $YEAR=$_POST['YEAR'];

        $data  = [
            'TITLE'=>  "".$TITLE,
            'ARTIST'=>  "".$ARTIST,
            'COUNTRY'=>  "".$COUNTRY,
            'COMPANY'=>  "".$COMPANY,
            'PRICE'=>  "".$PRICE,
            'YEAR'=>  "".$YEAR
        ];

        try{
            $collection  -> insertOne($data);
            echo  "Success";
        }catch(Exception $ex){
            echo "Failed";
        }     
?>