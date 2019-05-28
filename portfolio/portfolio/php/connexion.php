<?php

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
];

try {
    $user='root';
	$pass='';
	$cnx = new PDO("mysql:host=localhost;dbname=portfolio", $user, $pass,$options);
} catch (PDOException $e) {
    echo "ERROR ".$e->getMessage();
}

  


?>
	