<?php
    include 'conecta.php';
    $marca = $_GET['marca'];
    $modelo = $_POST['modelo'];
    $data = $_POST['data'];
    $combustivel = $_POST['combustivel'];
    $sql = "UPDATE carros SET combustivel=?, modelo=? WHERE marca=?";
    $query = $conn->prepare($sql) or die($conn->error);
    if(!$query){
        echo "Erro na atualização: ".$conn->errno."-".$conn->error;
    }
    $query->bind_param('ssi',$modelo,$data,$marca,$combustivel,);
    $query->execute();
    $conn->close();
    header("Location:index.php");
?>