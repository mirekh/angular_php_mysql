<?php
/**
 * JSON return
 */
/*
$z1 = $_POST["im"];
$z2 = $_POST["na"];
$z3 = $_POST["za"];

$tab = Array(
    "imie"=>$z1,
    "nazwisko"=>$z2,
    "zawod"=>$z3,
    "wynik"=>base64_encode((sprintf("Imie:%s, nazwisko:%s, zawód:%s.",$z1,$z2,$z3)))
);
*/


$tab = array(
    array(
        "id"=>'1',
        "name"=> "test",
        "class"=> "A",
        "rate"=>'65',
        "open"=> false
    ),array(
        "id"=>'2',
        "name"=> "janek",
        "class"=> "B",
        "rate"=>'65',
        "open"=> false
    ),array(
        "id"=>'3',
        "name"=> "czesio",
        "class"=> "B",
        "rate"=>'53'
    ),array(
        "id"=>'4',
        "name"=> "waldi",
        "class"=> "C",
        "rate"=>'34'
    ),array(
        "id"=>'5',
        "name"=> "errorek",
        "class"=> "A",
        "rate"=>'75'
    ),array(
        "id"=>'6',
        "name"=> "majorek",
        "class"=> "AA",
        "rate"=>'34'
    ),array(
        "id"=>'7',
        "name"=> "egg",
        "class"=> "B",
        "rate"=>'37'
    )
);

//return
header('Content-type: application/json');
//header('Content-type: text/json');
echo json_encode($tab);
//echo $txt;

?>