<?php
/**************************** 
 * filen innehåller info om databasen och användaren
 * 
*******************************/

ini_set('display_errors', '1');
error_reporting(E_ALL);

// $db_server = "madeleineenberg.com.mysql";
// $db_username = "madeleineenberg_commy_cms";
// $db_password = "Aldobaldo";
// $db_database = "madeleineenberg_commy_cms";

$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "my_cms";

try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_database;charset=utf8", $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //echo "<h2>Connected successfully</h2>";
}catch (PDOException $e){
    echo "<h2>Error:" . $e-> getMessage() . "</h2>";
}

