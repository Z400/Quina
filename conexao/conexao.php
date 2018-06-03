<?php  $conn = mysqli_connect("localhost", "root", "root", "Quina") or die(mysql_error());

if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        // echo "Conexao realizada com sucesso";
    }
?>
