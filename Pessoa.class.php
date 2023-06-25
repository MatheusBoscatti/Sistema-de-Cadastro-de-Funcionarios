<!DOCTYPE html>
<html lang="en">

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

class Pessoa
{

  public $Nome;
  public $DataNascimento;
  public $Email;
  public $Sexo;


  function __construct($Nome, $DataNascimento, $Email, $Sexo)
  {

    $this->Nome = $Nome;
    $this->DataNascimento = $DataNascimento;
    $this->Email = $Email;
    $this->Sexo = $Sexo;
  }



  function VerPessoa()
  {

    echo "<fieldset>";

    echo "<b>Nome: </b>{$this->Nome}<br />";
    echo "<b>DataNascimento</b>: {$this->DataNascimento}<br />";
    echo "<b>Email</b>: {$this->Email}<br />";
    echo "<b>Sexo</b>: {$this->Sexo}<br />";

    echo "</fieldset>";
  }
}
?>