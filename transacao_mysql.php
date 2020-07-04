<?php

//Aqui é para conectar ao banco de dados MySQL com o PDO
$conn = new PDO("mysql:host=localhost;dbname=hasteck", "root", "");

//Para abrir uma transação no MySQL
$conn->beginTransaction();

//Preparação do código para a inserção de um comando SQL
$stmt = $conn->prepare("DELETE FROM  tb_usuarios WHERE idusuario = ?");

//Realizando um delete na tabela tb_usuarios
$id = 5;

$stmt->execute(array($id));

$conn->commit();

echo "Dados deletados com sucesso!";


?>