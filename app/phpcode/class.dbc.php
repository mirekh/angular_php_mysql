<?php
/**
 * Debugger
 * @version 1.1 [eng]
 */
class Debugger{
    public $logs = array();
    //-c-
    public function Debugger(){
        //$this->logs = Array();
    }
    //-m-
    public function Log($msg){
        array_push($this->logs,$msg);
    }
    public function GetLogs(){
        $str = join("</li><li>",$this->logs);
        return ( sprintf("<ul><li>%s</li></ul>", $str) );
    }
    public function ShowLogs(){
        echo $this->GetLogs();
    }
    public function IsArr($x){
        printf("<div>is_array($x)? : %b</div>", is_array($x));
    }
}

/**
 * Configurator connection
 */
class PolaczenieMySQL extends Debugger{
    public $host;
    public $user;
    public $password;
    public $database;
    public $link;
    public $success;

    //-c-
    public function PolaczenieMySQL(){
        $this->success = false;
        $this->Log('[i][PolaczenieMySQL] Init.');
    }
    //-m-
    public function Setup($h,$u,$p,$db){
        $this->host = $h;
        $this->user = $u;
        $this->password = $p;
        $this->database = $db;
        $this->Log('[i][Setup] Done.');
    }
    public function GetParams(){
        return(
            sprintf("%s/%s/%s/%s",
                $this->host,
                $this->user,
                base64_decode($this->password),
                $this->database
            )
        );
    }

    public function Connect(){
        $this->Log('[i][Connect] Begin.');
        $this->link = mysql_connect($this->host, $this->user, $this->password);
        if (!$this->link) {
            $this->success = false;
            $this->Log('[e] Can\'t connect to DB ['.$this->database.'] for url ['.$this->host.']! <i>'. mysql_error().'</i>');
        }else{
            //ustaw baze
            $ok = mysql_select_db($this->database,$this->link);
            if($ok){
                $query = "SET NAMES 'utf8';";
                $result = mysql_query($query,$this->link);
                if (!$result){
                    $this->success = false;
                    $this->Log('[e] Can\'t setup var SET NAMES in DB!');
                }else{
                    $this->success = true;
                    $this->Log('[i] Connected successfully.');
                };
            }else{
                $this->success = false;
                $this->Log('[e] Can\'t connect to DB ['.$this->database.'] for url ['.$this->host.']!');
            }
        };
        $this->Log('[i][Connect] End.');

    }
    public function Close(){
        mysql_close($this->link);
    }
}

/**
 * Sluzy do polazcenia z baza dancych. Automatyczne wybiera parametry polaczenia w zaleznosci czy jest
 * serwer uruchamiany lokalnie czy zdalnie.
 */
class DBmysql extends Debugger{
    public $conn;//c.Polaczenie

    public function DBmysql(){
        $this->Log("[i][DBmysql] Init.");
        $this->conn = new PolaczenieMySQL();
        //local or remote DB?
        if($this->IsLocalhost()){
            $this->conn->Setup("localhost","root","mypasshere","dbname");
            $this->Log("[i][DBmysql] Setup localhost.");
        }else{
            $this->conn->Setup("mysql.myserver.pl","mypasshere","dbname","test");
            $this->Log("[i][DBmysql] Setup remote host.");
        }
        $this->Log("[i][DBmysql] Connect params: (".$this->conn->GetParams().")");
        $this->conn->Connect();
    }
    public function IsLocalhost(){
        return (strtolower($_SERVER['SERVER_NAME'])=='localhost');
    }
    public function GetLink(){
        return $this->conn->link;
    }
    public function IsSuccess(){
        return $this->conn->success;
    }
    public function GetResults($query){
        return mysql_query($query,$this->GetLink());
    }
    public function GetAssocc($query){
        $result = $this->GetResults($query);
        $arr = array();
        while ($row = mysql_fetch_assoc($result)) {
            array_push($arr,$row);
            //echo $row['firstname'];
        }
        return $arr;
    }
}

/*
USE:
$polaczenie = new DBmysql();
*/

?>