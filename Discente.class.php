<?php
require_once("Pessoa.class.php");

/*Discente herda pessoa*/
class Discente extends Pessoa
{

  /*Propriedades da classe Discente*/
  public $Curso;
  public $Matricula;


  /*function para inicializar propriedades da classe "Pessoa"*/
  function __construct($Nome, $DataNascimento, $Email, $Sexo, $Setor, $Curso, $Disciplina, $Matricula)
  {

    parent::__construct($Nome, $DataNascimento, $Email, $Sexo, $Setor, $Curso, $Disciplina, $Curso, $Matricula);

    $this->Curso = $Curso;
    $this->Matricula = $Matricula;
  }


  /*Exibir informações da Classe discente e Pessoa*/
  function VerPessoa()
  {
    parent::VerPessoa();

    echo "<fieldset>";
    echo "<b>Curso</b>: {$this->Curso}<br />";
    echo "<b>Matricula</b>: {$this->Matricula}<br />";
    echo "</fieldset>";
  }
}
