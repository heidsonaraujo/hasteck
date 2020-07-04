<?php

//Aqui é para conectar ao banco de dados MySQL com o PDO
$conn = new PDO("mysql:host=localhost;dbname=hasteck", "root", "");

//Preparação do código para a inserção de um comando SQL
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

//Realizando um Update na tabela tb_usuarios
$login = "Heide";
$password = "fa1234";
$id = 4;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Update realizado com sucesso!";


?>