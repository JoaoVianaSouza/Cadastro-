<?php

    $nom = $_GET['nome'];
    $end = $_GET['endereco'];
    $nasc = $_GET['nascimento'];
    $sexo = $_GET['sexo'];

    echo "\n<h1>Dados Recebidos</h1>";
    echo "\nNome do Candidato: $nom <br>";
    echo "\nEndereço: $end <br>";
    echo "\nNascimento: $nasc <br>";
    $sexo_ex="";
    if($sexo=='m') {
        $sexo_ex = "Masculino";
    } else{
        $sexo_ex = "Feminino";
    }
    echo "\nSexo do candidato: $sexo_ex <br>";

    if (isset($_GET['h1'])){
        $h1 = $_GET['h1'];
        echo "\nLinguagens do Candidato: $h1 <br>";
    }
    if (isset($_GET['h2'])){
        $h2 = $_GET['h2'];
        echo "\nLinguagens do Candidato: $h2 <br>";
    }
    if (isset($_GET['h3'])){
        $h3 = $_GET['h3'];
        echo "\nLinguagens do Candidato: $h3 <br>";

    }

?>