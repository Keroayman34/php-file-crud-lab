<?php

$host = "127.0.0.1";
$dbname = "php_lab";
$username = "root";
$password = "123456";

try {

$connection = new PDO(
"mysql:host=$host;dbname=$dbname;charset=utf8",
$username,
$password
);

$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

die($e->getMessage());

}
?>