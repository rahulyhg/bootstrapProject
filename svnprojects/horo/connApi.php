<?php

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connMain = "localhost";
$database_connMain = "consultl_api";
$username_connMain = "consultl_user";
$password_connMain = "passwords123";
$connMain = mysqli_connect($hostname_connMain, $username_connMain, $password_connMain) or trigger_error(mysql_error(),E_USER_ERROR);
mysqli_select_db($connMain, $database_connMain) or die('could not select db');
$dsn_connMain = 'mysql:dbname='.$database_connMain.';host='.$hostname_connMain;

//adodb try
define('BASE_DIR', dirname(__FILE__));
include(BASE_DIR.'/adodb/adodb.inc.php');

$ADODB_CACHE_DIR = BASE_DIR.'/cache/ADODB_cache';
$connMainAdodb = ADONewConnection('mysqli');
$connMainAdodb->Connect($hostname_connMain, $username_connMain, $password_connMain, $database_connMain);
//$connAdodb->LogSQL();consultl_user, passwords123
