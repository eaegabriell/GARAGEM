<html>
    <body>
        <center>
            <h3>
                GARAGEM 🚗
                <hr/>
            </h3>
        </center>
        <form action="index.php" method="POST">
            <label>
                Marca
            </label><br/>
            <input type="text" name="marca" require/><br/>
            <label>
                Modelo
            </label><br/>
            <input type="text" name="modelo" require/><br/><br/>
                Data
            </label><br/>
            <input type="number" name="data" require/><br/>
            <label>
                Combústivel
            </label><br/>
            <input type="text" name="combustivel" require/><br/><br/>

            <input type="submit" value="Inserir" name="btinserir"/>
        </form>
        <?php
            if(isset($_POST ['btinserir'])){
                include 'conecta.php';
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $data = $_POST['data'];
                $combustivel = $_POST['combustivel'];
                $sql = "INSERT INTO carros(marca, modelo, data, combustivel) VALUES ('$marca','$modelo','$data','$combustivel')";
                if(mysqli_query($conn, $sql)){
                    echo "<script language='javascript' type='text/javascript'>
                    alert('Registro inserido com sucessso!');
                    window.location.href='index.php'
                    </script>";                            ;
                }else{
                    echo "<script language='javascript' type='text/javascript'>
                    alert('Registro falhou!');
                    window.location.href='index.php'
                    </script>";         
                }
                mysqli_close($conn);
            }else{
                echo "";
            } 
        ?>
        <hr/>
        <table border="1">
            <tr>
                <td>Marca</td>
                <td>Modelo</td>
                <td>Data</td>
                <td>combustivel</td>
                <td>Ações</td>
            </tr>
            <?php
                include 'conecta.php';
                $carros = mysqli_query($conn,"SELECT * FROM carros");
                $linha = mysqli_num_rows($carros);
                if($linha> 0){
                    while($registro = $carros->fetch_array()){
                        echo '<tr>';
                            echo '<td>'.$registro['marca'].'</td>';
                            echo '<td>'.$registro['modelo'].'</td>';
                            echo '<td>'.$registro['data'].'</td>';
                            echo '<td>'.$registro['combustivel'].'</td>';
                            
                            echo '<td><a href="edita.php?id='.$registro['marca'].'">Editar | <a href="exclui.php?id='.$registro['marca'].'">Excluir</td>';
                        echo '</tr>';
                    }
                }else{
                    echo "Não há registros para listar";
                }
                mysqli_close($conn);
            ?>
        </table>
    </body>
</html>