<?php
/**
 * JSON return
 */

require_once("class.dbc.php");
$pp = new DBmysql();
$q = "SELECT * FROM actor";
$tab = $pp->GetAssocc($q);

//return
header('Content-type: application/json');
echo json_encode($tab);
?>