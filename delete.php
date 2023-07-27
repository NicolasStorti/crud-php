<?php

include 'conexao.php';

$id = $_GET['id'];

$delete = "DELETE FROM `tarefas` WHERE `tarefas` . `id` = $id";

$result = mysqli_query($conexao, $delete);

header("location: index.php");