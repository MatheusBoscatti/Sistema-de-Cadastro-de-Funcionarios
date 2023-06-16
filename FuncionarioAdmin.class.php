<?php
require_once("Pessoa.class.php");

class FuncionarioAdmin extends Pessoa
{

  public $Setor;


  function __construct($Nome, $DataNascimento, $Email, $Sexo, $Setor)
  {

    parent::__construct($Nome, $DataNascimento, $Email, $Sexo, $Setor);

    $this->Setor = $Setor;
  }




  function VerPessoa()
  {
    parent::VerPessoa();

    echo "<b>Setor</b>: {$this->Setor}<br />";
  }
}
