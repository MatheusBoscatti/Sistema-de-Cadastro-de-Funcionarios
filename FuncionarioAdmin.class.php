<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.php">
  <title>Document</title>
</head>

<body>

</body>

</html>

<?php
require_once("Pessoa.class.php");

/*FuncionarioAdmin herda pessoa*/
class FuncionarioAdmin extends Pessoa
{

  /*Propriedades da classe Admin*/
  public $Setor;

  /*function para inicializar propriedades da classe "Pessoa"*/
  function __construct($Nome, $DataNascimento, $Email, $Sexo, $Setor)
  {

    parent::__construct($Nome, $DataNascimento, $Email, $Sexo, $Setor);

    $this->Setor = $Setor;
  }

  /*Exibir informações da Classe Admin e Pessoa*/
  function VerPessoa()
  {
    parent::VerPessoa();

    echo "<fieldset>";
    echo "<b>Setor</b>: {$this->Setor}<br />";
    echo "</fieldset>";
  }
}
