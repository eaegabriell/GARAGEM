<?php
    include 'conecta.php';
    $marca = $_GET['marca'];

    $sql = "DELETE FROM carros WHERE id = $marca";

    if(mysqli_query($conn, $sql)){
        echo "<script language='javascript' type='text/javascript'>
        alert('Registro excluido com sucesso!');
        window.location.href='index.php'
        </script>";     
    }else{

        echo "<script language='javascript' type='text/javascript'>
        alert('Falha ao excluir o registro!');
        window.location.href='index.php'
        </script>";     
    }

?>