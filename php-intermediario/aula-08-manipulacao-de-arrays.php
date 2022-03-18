<?php
$um = array(
    "Nome" => "Yuri",
    "idade" => 24,
    "Cidade" => "Santa Maria",
    "Estado" => "DF"
);
$array2 = array_keys($um);//tem a função de criar outro array usando somente as chaves de um determinado array
print_r($array2)."<br/>";


$dois = array(
    "Nome" => "Fulano",
    "idade" => 25,
    "Cidade" => "Brasilia",
    "Estado" => "DF"
);
$array3 = array_values($dois);//tem a função de criar outro array usando somente os valores de um determinado array
print_r($array3)."<br/>";


$tres = array(
    "Nome" => "Joao",
    "idade" => 19,
    "Cidade" => "Valparaiso",
    "Estado" => "GO"
);
array_pop($tres); //tem a função de remover o ultimo registro do array, quanto mais vezes for feito o comando ele vai executando e removendo
print_r($tres)."<br/>";


$quatro = array(
    "Nome" => "Vinicius",
    "idade" => 28,
    "Cidade" => "Asa Norte",
    "Estado" => "Brasilia"
);
array_shift($quatro); //tem a função de remover o primeiro registro do array, quanto mais vezes for feito o comando ele vai executando e removendo
print_r($quatro)."<br/>";


$cinco = array(
    "Jose",
    "Alex",
    "Yuri",
    "Oswaldo",
    "Bruno"
);
asort($cinco); //tem a função de ordenar o array em forma alfabetica no modo crescente, ou seja, de A a Z depois numeros
print_r($cinco)."<br/>";

$seis = array(
  "Jose",
  "Alex",
  "Yuri",
  "Oswaldo",
  "Bruno"
);
arsort($cinco); //tem a função de ordenar o array em forma alfabetica no modo decrescente, ou seja, primeiro numeros , apos vem de Z a A.
print_r($seis)."<br/>";

$sete = array(
    "Yuri",
    "Yuri",
    "Yuri",
    "Yuri"
);
 echo "Total de vezes que se repete meu nome é: ".count($sete)."<br/>"; //conta o numero de elementos de uma variavel, ou propiedades de um objeto.

 $oito = array(
     "Yuri",
     "Fulano",
     "Beltrano",
     "Vinicius"
 );
 if(in_array("Yuri", $oito)) { //checa se um valor existe em um array, normalmente é usado em condicionadores de algo. Ou seja, se existir o nom yuri na variavel
                                // tal, é verdadeira essa condição então transmite para a tela. caso contrario não.
     echo "Vencedor foi Yuri";
 }
?>