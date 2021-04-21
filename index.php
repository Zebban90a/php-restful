<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");
header("Content-Type: application/json; charset=UTF-8");

//– Skapa PHP-arrayer (testdata)
$firstNames =
["Åsa","Sebastian","Rickard","Kalle","Abraham","Trollemastro","Muhammed","Robert","Johan","Sven"];
$lastNames =
["Öberg","Örbom","Rickardsson","Johannesson","Westerlund","Vestin","Trolleson","Olofsson","Daggeson","Turner"];
$gender = 
['male','female'];


$names = array();

//Skapa 10 namn och spara dessa i en ny array
for($i=0;$i<10;$i++){
    $name=array("firstname"=>$firstNames[rand(0,9)],
    "lastname"=>$lastNames[rand(0,9)],
    "gender"=> $gender[rand(0,1)],
    "age" => rand(1,100),
    );
    
    array_push($names, $name);
        
    }
    
    
    for($i=0;$i<10;$i++){
        $names[$i]['email'] = strtolower(substr($names[$i]['firstname'], 0,2).
        substr($names[$i]['lastname'], 0,3)).
        "@example.com";
        
    } 

    
   
//Konvertera PHP-arrayen till JSON
    $json = json_encode($names,
    JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
//Skicka JSON till klienten
    echo $json;