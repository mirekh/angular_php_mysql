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


//CFG


//read DB
//$sql = "SELECT 'city_id','city','country_id','last_update' FROM 'city' ORDER bY city";



require_once("class.dbc.php");
$pp = new DBmysql();
$q = "SELECT * FROM actor";
$tab = $pp->GetAssocc($q);



//return
header('Content-type: application/json');
//header('Content-type: text/json');
echo json_encode($tab);
//echo $txt;

?>