<?php
/*require_once("phpcode/class.dbc.php");
$pp = new DBmysql();*/
//$pp->ShowLogs();
//$succ = $pp->IsSuccess();

//$polaczenie->conn->ShowLogs();

//echo base64_encode ("aqqaqq");//YXFxYXFx


?>
<!doctype html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="utf-8">
    <title>getDB</title>
    <style type="text/css">
        table{
            border: 1px dotted #808080;
            border-spacing: 1px;
        }
        thead{background: #cacaca;}
        .msg{background:pink;color:red;}
        .warning{background:pink;color:red;}
        .pasek1{background: #ffb0a4;}
        .pasek2{background: #ff69b4;}
    </style>
</head>
<body>
<?php
/*DEV
if(!$succ){
    printf("<div class='warning'>%s</div>", $polaczenie->ShowLogs());
};*/

/*
$q = "SELECT * FROM actor";
$tab = $pp->GetAssocc($q);
*/

//DEV
//var_export($tab);
?>
<!--
Put Your code here
-->
<div ng-controller="MainCtrl">
nazwa={{nazwa}}
    <button ng-click="klikaj2()">klikaj2</button>
    <input type="text" ng-model="search.$">
    <table><thead>
        <tr>
            <td>last_name, first_name</td>
            <td>actor_id</td>
            <td>last_update</td>
        </tr>
    </thead>
    <tbody>
        <tr ng-repeat="x in items | filter:search | orderBy:x.last_name" ng-class-even="'pasek1'" ng-class-odd="'pasek2'">
            <td>{{x.last_name}}, {{x.first_name}}</td>
            <td>{{x.actor_id}}</td>
            <td>{{x.last_update}}</td>
        </tr>
    </tbody>
</table>






</div>

<!--<fieldset><legend>data</legend><div ng-model="records">{{records}}</div></fieldset>-->
<!--<fieldset><legend>arr</legend><div ng-repeat="single in records.$">{{single}}</div></fieldset>-->

<!--
<div>
    rows:<textarea ng-model="rows"></textarea><br>
    columns:<textarea ng-model="columns"></textarea>
</div>-->

<script src="lib/angular/angular.js"></script>
<script src="lib/angular/angular-route.js"></script>
<script src="js/app.js"></script>
<script src="js/services.js"></script>
<script src="js/controllers.js"></script>
<script src="js/filters.js"></script>
<script src="js/directives.js"></script>
</body>
</html>
