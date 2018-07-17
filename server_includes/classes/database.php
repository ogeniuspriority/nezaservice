<?php

class mysqldatabase {
private $connection;
private $last_query;
private $magic_quotes_active;
private $new_enough_php;

function __construct(){
$this->open_connection();
$this->magic_quotes_active = get_magic_quotes_gpc();
$this->new_enough_php = function_exists("mysql_real_escape_string");
}

public function open_connection(){
$this->connection= mysqli_connect(DB_SERVE,DB_USER,DB_PASS,DB_NAME);
if(! $this->connection)
die("Taekwondo do not match!".mysql_error());
//selecting database
$select=mysqli_select_db($this->connection,DB_NAME);
if(! $select)
die("Database do not match!".mysqli_error());
}

public function close_connection(){
if(isset($this->connection)){
mysqli_close($this->connection);
unset($this->connection);
}
}


public function query($sql){
$this->last_query = $sql;
$result = mysqli_query($this->connection,$sql);
$this->comfirm($result);
    return $result;   
}


public function fetch_array($query){
return mysqli_fetch_array($query);
}


public function num_rows($result){
return mysqli_num_rows($result);
}


public function inset_id(){
return mysqli_insert_id();
}



public function affected_rows(){
return mysqli_affected_rows($this->connection);
}


public function escape_value($value){

if($this->new_enough_php){
// undo any magic quotes effect so mysql_real_escape_string can do the work
if($this->magic_quotes_active){$value = stripslashes($value);}
$value = mysqli_real_escape_string($this->connection,$value);}
else{// before php v4.3.0
if(! $this->magic_quotes_active){$value = addslashes($value);}
}
return $value;

}


private function comfirm($result){
if(! $result){
$output = "Query Failed.  ".mysqli_error($this->connection);
$output .= $this->last_query;
 die($output);
	   }
}

public function count_all($table){
$sql = "SELECT COUNT(*) FROM {$table}";
$result = $this->query($sql);
$this->comfirm($result);
$number = $this->fetch_array($result);
return array_shift($number);
}


}

$database = new mysqldatabase();



?>