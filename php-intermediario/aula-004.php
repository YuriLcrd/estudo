<?php
/*$nomes = array(
    array("nome" => "Yuri", "idade" => 24),
    array("nome" => "Fulano", "idade" => 22),
    array("nome" => "Cicrano", "idade" => 20),
);

    foreach($nomes as $aluno);
    {
        echo "Aluno: ".$aluno["nome"]." - idade: ".$aluno["idade"]."<br/>";
    }*/

$name = array(
   array("nome" => "Yuri", "idade" => 23),
   array("nome" => "Vinicius", "idade" => 25),
   array("nome" => "Fulano", "idade" => 24),
   array("nome" => "Beltrano", "idade" => 20)
);
foreach($name as $aluno)
   {
       echo "Aluno: ".$aluno["nome"]." - Idade: ".$aluno["idade"]."<br/>";
   }

//ele funciona auxiliando o processo de listagem de ARRAY's
?>