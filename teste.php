<?php
//    $QuantNumeros = 5;
//    $meuNumeros = array();
//    $con = 1;
//    $NumAtual = 1;
//    $NumUtilizados = array();
//
//    while($NumAtual <= $QuantNumeros)
//    {
//     $NumGerados = rand(1,80);
//
//      if(!in_array($NumGerados,$NumUtilizados))
//       {
//
//        array_push($NumUtilizados,$NumGerados);
//        echo "<p>". $NumGerados ."</p>" ;
//        $NumAtual++;
//       }
//    }
?>



<?php
    
    $numeros = array();
    $con;
    
    while(count($numeros) < 5){
        
        $sorteado = mt_rand(1, 80);
        $numeros[$sorteado] = $sorteado;
        
    }
    
    foreach ($numeros as $result) {
        echo $result . " ";
    }

//print_r($numeros);

?>