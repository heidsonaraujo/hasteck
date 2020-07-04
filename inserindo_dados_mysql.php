<?php

//Aqui é para conectar ao banco de dados MySQL com o PDO
$conn = new PDO("mysql:host=localhost;dbname=hasteck", "root", "");

//Preparação do código para a inserção de um comando SQL
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "fabio";
$password = "fa1234";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Insert realizado com sucesso!";


?>