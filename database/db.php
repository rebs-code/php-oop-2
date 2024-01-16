<?php
//read data from db.jsonq
$database = file_get_contents(__DIR__ . '/db.json');
//convert json to php array
$products_db = json_decode($database, true);
