<?php
require_once("Pessoa.class.php");

class FuncionarioDocente extends Pessoa
{
  public $Curso;
  public $Disciplina;


  function __construct($Nome, $DataNascimento, $Email, $Sexo,$Curso, $Disciplina)
  {

    parent::__construct($Nome, $DataNascimento, $Email, $Sexo,$Curso, $Disciplina);

    $this->Curso = $Curso;
    $this->Disciplina = $Disciplina;
  }



  function VerPessoa()
  {
    parent::VerPessoa();

    echo "<b>Curso</b>: {$this->Curso}<br />";
    echo "<b>Disciplina</b>: {$this->Disciplina}<br />";
  }
}
