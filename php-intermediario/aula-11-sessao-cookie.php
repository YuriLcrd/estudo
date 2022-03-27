<?php
    session_start();

$_SESSION["teste"] = "Yuri Lacerda"; //tem a função de guarda informações no campo que são passadas entre uma pag e outra. 
echo "sessão foi feita";              //gerar uma sessão
echo "Meu nome é: ".$_SESSION["teste"]."<br/>";


setcookie("meuteste", "Fulano de Tal", time()+7200);  //gerando um cookie, lembrando que ele que fica salvo no navegador do usuario
echo "Cookie setado com sucesso!";
echo "Meu cookie é de: ".$_COOKIE["meuteste"];
?>