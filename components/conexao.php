<?php

session_start();

$user = 'root';
$pass = '';
$database = 'adota-pet';
$localhost = 'localhost';

global $pdo;

try {
  //orientada a objetos com pdo
  $pdo = new PDO("mysql:dbname=".$database."; host=".$localhost, $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "ERRO: ".$e->getMessage();
  exit;
}