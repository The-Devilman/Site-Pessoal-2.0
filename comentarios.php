<?php

$nome = $_POST['nome'];
$turma = $_POST['turma'];
$comentario = $_POST['comentarios'];

echo "<p>Nome: $nome </p>";
echo "<p>Comentarios: $comentario </p>";

$sql = "insert into comentarios (nome, turma, comentario) values ('$nome', '$turma', '$comentario')";

echo $sql;

$conexao = new PDO('mysql:host=127.0.0.1;dbname=site pessoal','root','');
$conexao->exec($sql);


header("Location: index.html");

die();

?>
