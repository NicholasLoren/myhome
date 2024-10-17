<?php
require_once 'config.php';

$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL' . mysqli_connect_error();
}

function dbQuery($sql) {
    $result = mysqli_query($GLOBALS['dbConn'], $sql);
    return $result;
} 

function dbFetchArray($result, $resultType = MYSQLI_NUM) { 

    return mysqli_fetch_array($result, $resultType);
}

function dbFetchAssoc($result) {

    return mysqli_fetch_assoc($result);
}

function dbNumRows($result) {

    return mysqli_num_rows($result);
}

function dbError() {
    return mysqli_error($GLOBALS['dbConn']);
}


function sqlEscape($post) {
    $escape = mysqli_real_escape_string($GLOBALS['dbConn'], $post);
    return $escape;    
}

?>