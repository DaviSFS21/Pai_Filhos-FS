<?php
session_start();

//Conexão com o banco
require("../assets/bd/connect.php");

if(isset($_SESSION['nome'])){
    if ($_SESSION['verif_admin'] == 0) {
        ?>
        <script>
        alert("Você não deveria estar aqui...");
        window.location.replace("../index/index.php");
        </script>
        <?php
        die();
    }
}
if(isset($_GET['id_prod'])){
    //Conexão com o banco
    $id = $_GET['id_prod'];

    //Gerando a SQL de PESQUISA das categorias existentes no BD
    $pesquisar_prod = "SELECT * FROM `produto` WHERE `cod_prod` = '$id'";

    //Executando a SQL e armazenando o resultado em uma variavel
    $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

    //Obtendo o numero de linhas retornadas na pesquisa
    $numero_resultado = mysqli_num_rows($resultado_prod);

    if($numero_resultado == 0)
    {
        ?>
            <!-- Aqui tem Javascript!-->
            <script>
                alert("Este produto não foi encontrado...");
                javascript:history.back;
            </script>
        <?php
    }else{
        //Gerando a SQL de PESQUISA das categorias existentes no BD
        $excluir_prod = "DELETE FROM `produto` WHERE `cod_prod` = '$id'";

        //Executando o comando para o MySQL
        mysqli_query($conexao, $excluir_prod);
        
        ?>
            <!-- Aqui tem Javascript!-->
            <script>
                alert("Produto excluído!");
                window.location.replace("lista_prod.php");
            </script>
        <?php
    }
    mysqli_close($conexao);
}
?>