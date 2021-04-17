<?php 
$f=preg_replace('/\/$/','',__DIR__."{$_SERVER['REQUEST_URI']}");
if(is_dir($f)){
$abf=preg_replace('/\/$/','',$_SERVER['REQUEST_URI']);
$fs=glob("$f/*");
foreach($fs as $one){
    $one=str_replace($f.'/','',$one);
    echo "<a href='$abf$one'>$one</a><br/>";
}
    return true;
}else{
    return false;
}
//     include('pessoa.class.php');

//     $pessoa = new Pessoa;
//     print_r($pessoa->buscarPessoa());

//     foreach($pessoa->buscarPessoa() as $key => $pessoas) :
        
//         if ($key % 2 == 0 ) :
//             echo '<div style="background: #AAFFFF;">';
//             echo '<hr>';
//             echo 'Nome :' . $pessoas['Nome'];
//             echo '<br>'; 
//             echo 'Altura :' . $pessoas['Altura'];
//             echo '<br >'; 
//             echo 'Cabelo :' . $pessoas['Cabelo'];
//             echo '<hr>';
//             echo '</div>';
//         else : 
//             echo '<p>';
//             echo '<hr>';
//             echo 'Nome :' . $pessoas['Nome'];
//             echo '<br>'; 
//             echo 'Altura :' . $pessoas['Altura'];
//             echo '<br >'; 
//             echo 'Cabelo :' . $pessoas['Cabelo'];
//             echo '<hr>';
//             echo '</p>';
//         endif;
//     endforeach;
// ?>