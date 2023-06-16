<?php 

class Pessoa{

  public $Nome;
  public $DataNascimento;
  public $Email;
  public $Sexo;


  function __construct($Nome,$DataNascimento,$Email,$Sexo){

    $this->Nome=$Nome;
    $this->DataNascimento=$DataNascimento;
    $this->Email=$Email;
    $this->Sexo=$Sexo;
}



function VerPessoa(){


    echo "<b>Nome: </b>{$this->Nome}<br />";
    echo "<b>DataNascimento</b>: {$this->DataNascimento}<br />";
    echo "<b>Email</b>: {$this->Email}<br />";
    echo "<b>Sexo</b>: {$this->Sexo}<br />";
    }



}
?>