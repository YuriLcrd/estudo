<?php
    $nome = "Yuri Guimarães Lacerda";
    $nome2 = md5($nome);// lembrando que o padrão md5 e irreversivel

        echo "Nome original: ".$nome. "</br>";
        echo "Nome crypto: ".$nome2."<br/>";

$aluno = "Maria Fernanda Nogueira Lima Pereira";
$alunocrypto = base64_encode($aluno); //tipo de cryptografia reversivel... 
    echo "Nome do aluno: ".$aluno."<br/>";
    echo "Cryptografia do aluno: ".$alunocrypto."<br/>";

$codigo = "TWFyaWEgRmVybmFuZGEgTm9ndWVpcmEgTGltYSBQZXJlaXJh";
echo "meu texto original é: ".base64_decode($codigo); // modo de reverter a crypto do base64_encode


?>