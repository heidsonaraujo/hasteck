<?php

//Aqui é para conectar ao banco de dados MySQL com o PDO
$conn = new PDO("mysql:host=localhost;dbname=hasteck", "root", "");

//Preparação do código para a inserção de um comando SQL
$stmt = $conn->prepare("DELETE FROM  tb_usuarios WHERE idusuario = :ID");

//Realizando um delete na tabela tb_usuarios
$id = 4;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados deletados com sucesso!";


?>