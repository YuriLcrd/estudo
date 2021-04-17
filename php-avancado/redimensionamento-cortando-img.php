<?php
  $filename = "imagemphp.png";
  $largura = 200;
  $altura = 200;

  list($largura_original, $altura_original) = getimagesize($filename);

  $ratio = $largura_original / $altura_original;
  
  if($largura/$altura > $ratio)
  {
    $largura = $altura * $ratio;
  } else {
    $altura = $largura / $ratio;
  }

   //echo 'Largura '.$largura . ' - Altura' .$altura .'<br>';
   //echo "Largura O {$largura_original } - Altura O {$altura_original}<br>";

  $imagem_final = imagecreatetruecolor($largura, $altura);
  $imagem_original = imagecreatefrompng($filename);

  imagecopyresampled($imagem_final, $imagem_original, 
  0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);
  
  header("Content-Type: image/png"); //para apenas criar uma imagem menor
  imagepng($imagem_final, 'mini.png');
  //echo "Imagem redmensionada";
?>