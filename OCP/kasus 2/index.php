<?php
include_once "DBMS.php";
include_once "MySQL.php";
include_once "MongoDB.php";
include_once "DBMSConnection.php";

$dbmsConnection = new DBMSConnection();

$mysql = new MySQL();
$dbmsConnection->connect($mysql);

$mongodb = new MongoDB();
$dbmsConnection->connect($mongodb);
?>