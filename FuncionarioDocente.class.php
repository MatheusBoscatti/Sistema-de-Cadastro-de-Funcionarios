<?php
require_once("Pessoa.class.php");

/*Doscente herda pessoa*/
class FuncionarioDocente extends Pessoa
{

  /*Propriedades da classe Doscente*/
  public $Curso;
  public $Disciplina;


  /*function para inicializar propriedades da classe "Pessoa"*/
  function __construct($Nome, $DataNascimento, $Email, $Sexo, $Curso, $Disciplina)
  {

    parent::__construct($Nome, $DataNascimento, $Email, $Sexo, $Curso, $Disciplina);

    $this->Curso = $Curso;
    $this->Disciplina = $Disciplina;
  }


  /*Exibir informações da Classe Doscente e Pessoa*/
  function VerPessoa()
  {
    parent::VerPessoa();

    echo "<fieldset>";
    echo "<b>Curso</b>: {$this->Curso}<br />";
    echo "<b>Disciplina</b>: {$this->Disciplina}<br />";
    echo "</fieldset>";
  }
}
