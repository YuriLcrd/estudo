<?php 
    echo '<pre>';   
    $f=preg_replace('/\/$/','',__DIR__);
    if(is_dir($f)){
        $abf=preg_replace('/\/$/','',$_SERVER['REQUEST_URI']) . '/';
        $fs=glob("$f/*");
        foreach($fs as $key => $one){
            $one=str_replace($f.'/','',$one);
            echo "<a href='$abf$one'>$one</a><br/>";
        }
        echo '<a href="javascript:history.go(-1)">voltar</a>';
        return true;
    }else{
        return false;
    }