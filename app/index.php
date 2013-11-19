<?php
// Unmark comments bellow, if You can't connect to DB 
// or You don't "what is going wrong?"

/*
// Test connection do DB
require_once("phpcode/class.dbc.php");
$pp = new DBmysql();
$pp->ShowLogs();
$succ = $pp->IsSuccess();
$polaczenie->conn->ShowLogs();
*/
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
//if something going bad...show logs.
if(!$succ){
    printf("<div class='warning'>%s</div>", $polaczenie->ShowLogs());
};
?>
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

<script src="lib/angular/angular.js"></script>
<script src="lib/angular/angular-route.js"></script>
<script src="js/app.js"></script>
<script src="js/services.js"></script>
<script src="js/controllers.js"></script>
<script src="js/filters.js"></script>
<script src="js/directives.js"></script>
</body>
</html>
