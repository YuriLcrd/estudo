<?php 
    include('pessoa.class.php');

    $pessoa = new Pessoa;
    print_r($pessoa->buscarPessoa());

    foreach($pessoa->buscarPessoa() as $key => $pessoas) :
        
        if ($key % 2 == 0 ) :
            echo '<div style="background: #AAFFFF;">';
            echo '<hr>';
            echo 'Nome :' . $pessoas['Nome'];
            echo '<br>'; 
            echo 'Altura :' . $pessoas['Altura'];
            echo '<br >'; 
            echo 'Cabelo :' . $pessoas['Cabelo'];
            echo '<hr>';
            echo '</div>';
        else : 
            echo '<p>';
            echo '<hr>';
            echo 'Nome :' . $pessoas['Nome'];
            echo '<br>'; 
            echo 'Altura :' . $pessoas['Altura'];
            echo '<br >'; 
            echo 'Cabelo :' . $pessoas['Cabelo'];
            echo '<hr>';
            echo '</p>';
        endif;
    endforeach;
?>