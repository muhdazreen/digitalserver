<?php
include('../DataInfo/dataInfo.inc.php');

function startconnection() {
    global $db;
    $dbinfo['hostname'] = $hostname;
    $dbinfo['username'] = $username;
    $dbinfo['password'] = $password;
    $dbinfo['database'] = $database;
    $dbinfo['port'] = $port;
    $dbinfo['socket'] = $socket;
    
    $db = mysqli_connect($dbinfo['hostname'], $dbinfo['username'], $dbinfo['password'], $dbinfo['database'], $dbinfo['port'], $dbinfo['socket']);
    $error =  mysqli_connect_errno();
    if (!($error == "")) {
        print_r($error);
    }
}