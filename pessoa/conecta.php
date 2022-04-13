<?php 
    $conn = mysqli_connect("localhost","root","","carros");
    mysqli_set_charset($conn,"utf8");
    if(!$conn){
        echo "Erro: Falha de conexão".mysqli_connect_error();
    }
?>