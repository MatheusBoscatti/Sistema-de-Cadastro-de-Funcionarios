<?php
require_once("Pessoa.class.php");

class Discente extends Pessoa
{


  public $Curso;
  public $Notas;
  public $Faltas;


  function __construct($Nome, $DataNascimento, $Email, $Sexo, $Setor, $Curso, $Disciplina, $Notas, $Faltas)
  {

    parent::__construct($Nome, $DataNascimento, $Email, $Sexo, $Setor, $Curso, $Disciplina, $Curso, $Notas, $Faltas);

    $this->Curso = $Curso;
    $this->Notas = $Notas;
    $this->Faltas = $Faltas;
  }



  function VerPessoa()
  {
    parent::VerPessoa();

   echo "<fieldset>";
    echo "<b>Curso</b>: {$this->Curso}<br />";
    echo "<b>Notas</b>: {$this->Notas}<br />";
    echo "<b>Faltas</b>: {$this->Faltas}<br />";
   echo "</fieldset>"; 
  }
}
