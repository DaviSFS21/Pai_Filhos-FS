<?php
if(isset($_POST['id_prod'])){
    require("../assets/bd/connect.php");

    $id = $_POST['id_prod'];
    $nome_prod = $_POST['a_nome_prod'];
    $desc_prod = $_POST['a_desc_prod'];
    $marca = $_POST['a_marca'];
    $categoria = $_POST['a_categoria'];
    $preco = $_POST['a_preco'];

    $pesquisar_a_prod = "UPDATE `produto` SET `nome_prod` = '$nome_prod',`desc_prod` = '$desc_prod',
    `marca` = '$marca',`categoria` = '$categoria',`preco` = '$preco' WHERE `cod_prod` = '$id'";

    mysqli_query($conexao, $pesquisar_a_prod);

    if(isset($_FILES['a_img'])){
        /* Declaração da variável da imagem */
        $img_prod = $_FILES['a_img'];
        $id = $_POST['id_prod'];

        /* Declaração do novo caminho da imagem e criação do uniqid() para mudar o local da imagem, do local temporário ao source do servidor */
        $pasta = "../assets/img_prod/";
        $novoNomeImg = uniqid();
        $extensaoImg = strtolower(pathinfo($img_prod['name'], PATHINFO_EXTENSION));

        /* Condições caso o upload sofra um erro, caso a extensão seja a errada, ou, caso a imagem seja muito pesada */
        if($img_prod['error']){

            ?>
            <script>
                alert("Falha ao enviar o arquivo...");
                javascript:history.back();
            </script>
            <?php
            die();
        }

        if($extensaoImg != 'jpg' && $extensaoImg != 'png'){
            ?>
            <script>
                alert("Extensão não permitida...(Somente .jpg ou .png)");
                javascript:history.back();
            </script>
            <?php
            die();
        }

        if($img_prod['size'] > 4194304){
            ?>
            <script>
                alert("Arquivo maior que 4MB...");
                javascript:history.back();
            </script>
            <?php
            die();
        }

        $pesquisar_v_img = "SELECT `path_img` FROM `produto` WHERE `cod_prod` = '$id'";
    
        $resultado_v_img = mysqli_query($conexao, $pesquisar_v_img);

        $img = mysqli_fetch_array($resultado_v_img);

        unlink($img[0]);

        $novoPath = $pasta . $novoNomeImg . "." . $extensaoImg;    
        move_uploaded_file($img_prod['tmp_name'], $novoPath);

        /* Movendo a imagem e apresentando-a na tela */
        $path_img = $pasta . $novoNomeImg . "." . $extensaoImg;

        move_uploaded_file($img_prod['tmp_name'], $path_img);

        $sql_atualizar_img = "UPDATE `produto` SET `path_img` = '$path_img' WHERE `cod_prod` = '$id'";

        mysqli_query($conexao, $sql_atualizar_img);
    }
    ?>
    <script>
        alert("Produto atualizado!");
        window.location.replace("lista_prod.php");
    </script>
    <?php

    mysqli_close($conexao);
}