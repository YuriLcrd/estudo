<?php
    $nome = "Yuri Lacerda";
        $x = explode(" ", $nome);

    print_r($x)."<br/>"; //função separar string, formando outras strings.
    

    $array = array("Yuri", "Lacerda");
        $nomecompleto = implode(" ", $array);
    echo $nomecompleto."<br/>"; //implode tem a função de juntar um array.
    

    $X = number_format(8.2578419, 2);
    echo $X."<br/>"; //Formata numeros de diversas formas possiveis
    
    $texto = "minha cachorra mordeu meu chinelo!";
    $string = str_replace("mordeu", "destruiu", $texto);
        echo $string."<br/>"; // função de trocar palavras de uma string.
    
    echo strtolower("YURI GUIMARAES")."<br/>";//transformar tudo que está maiusculo em minusculo
    echo strtoupper("yuri lacerda")."<br/>"; //transformar tudo que  esta minusculo em maisculo

    $substr = "YURI GUIMARÃES LACERDA";
    $xx = substr($substr, 0, 10);
        echo $xx."<br/>"; // Função é voce pegar parte de uma string

    $ucfirst = "fulano";
        echo ucfirst($ucfirst)."<br/>"; //tem função de transformar a primeira letra da primeira palavra de uma string em Maiusculo

    $ucwords = "fulano de tal de tal";
        echo ucwords($ucwords)."<br/>";// tem função de modificar todas as palavras colocando todas as primeiras letras em maiusculo
     
?>