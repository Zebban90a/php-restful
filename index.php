<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");
header("Content-Type: application/json; charset=UTF-8");

//– Skapa PHP-arrayer (testdata)
$firstNames =
["Åsa","F2","F3","F4","F5","F6","F7","F8","F9","F10"];
$lastNames =
["Öberg","L2","L3","L4","L5","L6","L7","L8","L9","L10"];

$names = array();

//Skapa 10 namn och spara dessa i en ny array
for($i=0;$i<10;$i++){
    $name=array("firstname"=>$firstNames[rand(0,9)],
    "lastname"=>$lastNames[rand(0,9)]);
    array_push($names, $name);
    }
//Konvertera PHP-arrayen till JSON
    $json = json_encode($names,
    JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
//Skicka JSON till klienten
    echo $json;