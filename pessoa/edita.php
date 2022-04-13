<html>
    <body>
        <center>
            <h3>
                GARAGEM 🚗
                <hr/>
            </h3>
        </center>
        <?php
            include 'conecta.php';
            $marca = $_GET['marca'];
            $sql = " SELECT * FROM carros WHERE marca = $marca ";
            $query = $conn->query($sql);
            while($dados = $query->fetch_assoc()){
                $marca = $dados['marca'];
                $modelo = $dados['modelo'];
                $data = $dados['data'];
                $combustivel = $dados['combustivel'];
            }
        ?>
        <form action="editar.php?id=<?php echo $marca; ?>" method="POST">
            <label>
                Modelo
            </label><br/>
            <input type="text" name="modelo" value="<?php echo $modelo; ?>"/><br/>

            <label>
               Data
            </label><br/>
            <input type="number" name="data" value="<?php echo $data; ?>"/><br/><br/>
            <label>
                Combustivel
            </label><br/>
            <input type="text" name="combustivel" value="<?php echo $combustivel; ?>"/><br/>

            <input type="submit" value="Atualizar" name="btinserir"/>
        </form>
    </body>
</html>