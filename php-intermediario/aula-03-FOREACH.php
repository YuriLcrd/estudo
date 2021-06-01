<?php
$aluno = array(
    "Nome" => "Yuri",
    "Sobrenome" => "Lacerda",
    "Idade" => 23,
    "Estado" => "DF",
    "País" => "Brasil"
);
foreach($aluno as $chave => $dados)
{
    echo $chave." = ".$dados."<br/>";
}

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

$nomes = array("Yuri", "Vinicius", "Fulano", "Beltrano");
   foreach($nomes as $aluno)
   {
       echo "Aluno: ".$aluno."<br/>";
   }
?>

