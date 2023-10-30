<?php

$dbHost = "localhost:3310";
$dbUsername = "root";
$dbPassword = "";
$dbName = "goodpet";

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
  echo "Erro";
} else {
  echo "Conexão efetuada com sucesso";
}
