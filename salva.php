<?php

include 'conexao.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

$insert = "INSERT INTO tarefas(titulo, descricao) VALUES ('$titulo', '$descricao')";

$result = mysqli_query($conexao, $insert);

header("location: index.php");