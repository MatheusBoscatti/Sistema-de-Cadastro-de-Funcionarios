<?php

$Pessoa = $_POST['Pessoa'];

echo "<html>";
echo "<head>";
echo "<link rel='stylesheet' href='estilo.css'>";
echo "</head>";
echo "<body>";
echo "<form action='exibir.php' method='POST'>";

echo "<div>";

echo "<fieldset>";

echo "<label>Nome</label><input class='input' type='text' name='Nome' required>";

echo "<br>";
echo "<br>";

echo "<label>Data Nascimento</label><input type='date' name='DataNascimento' required>";

echo "<br>";
echo "<br>";

echo "<label>Email</label><input class='input' type='email' name='Email' required>";

echo "<br>";

echo "<p>Sexo:</p>";
echo "<input type='radio' name='Sexo' value='Masculino' required>";
echo "<label>Masculino</label>";

echo "<br>";
echo "<br>";

echo "<input type='radio' name='Sexo' value='Feminino' required>";
echo "<label>Feminino</label>";

echo "<br>";
echo "<br>";

if ($Pessoa == "FuncionarioAdmin") {

    echo "<label>Setor</label><input class='input' type='text' name='Setor' required>";

    echo "<br>";
    echo "<br>";

    echo "<input type='hidden' name='Pessoa' value='FuncionarioAdmin'>";
};
if ($Pessoa == "FuncionarioDocente") {
    echo "<label>Curso</label><input class='input' type='text' name='Curso' required>";

    echo "<br>";
    echo "<br>";

    echo "<label>Disciplina</label><input class='input' type='text' name='Disciplina' required>";

    echo "<br>";
    echo "<br>";

    echo "<input type='hidden' name='Pessoa' value='FuncionarioDocente'>";
};
if ($Pessoa == "Discente") {

    echo "<label>Curso</label><input class='input' type='text' name='Curso' required>";

    echo "<br>";
    echo "<br>";

    echo "<label>Disciplina</label><input class='input' type='text' name='Disciplina' required>";

    echo "<br>";
    echo "<br>";

    echo "<input type='hidden' name='Pessoa' value='Discente'>";
};


echo "<input type='submit' value='cadastrar'>";

echo "</fieldset>";

echo "</div>";

echo "</form>";
echo "</body>";
echo "</html>";
