<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.php">
    <title>Sistema de Cadastro</title>
</head>
<body>
    
</body>
</html>

<?php

$Pessoa = $_POST['Pessoa'];


if ($Pessoa == 'FuncionarioAdmin') {

    require_once("FuncionarioAdmin.class.php");

    $Nome = $_POST['Nome'];
    $DataNascimento = date('d/m/Y', strtotime($_POST['DataNascimento']));
    $Email = $_POST['Email'];
    $Sexo = $_POST['Sexo'];
    $Setor = $_POST['Setor'];


    $Pessoa = new FuncionarioAdmin($Nome, $DataNascimento, $Email, $Sexo, $Setor);

    echo $Pessoa->VerPessoa();
} else {

    require_once("FuncionarioDocente.class.php");

    $Nome = $_POST['Nome'];
    $DataNascimento = date('d/m/Y', strtotime($_POST['DataNascimento']));
    $Email = $_POST['Email'];
    $Sexo = $_POST['Sexo'];
    $Curso = $_POST['Curso'];
    $Disciplina = $_POST['Disciplina'];

    $Pessoa = new FuncionarioDocente($Nome, $DataNascimento, $Email, $Sexo, $Curso, $Disciplina);

    echo $Pessoa->VerPessoa();
}
