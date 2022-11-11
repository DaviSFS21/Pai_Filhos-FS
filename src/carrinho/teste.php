<?php
session_start();

//Conexão com o banco
require("../assets/bd/connect.php");

if(!isset($_SESSION['nome'])){
    ?><script>window.replace.location('../login/index.php')</script><?php
}
if(isset($_GET['id_prod'])){

    $id = $_GET['id_prod'];

    unset($_SESSION['carrinho']);
    
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = [
            1 => $id
        ];
    }

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
        /* array_push($_SESSION['carrinho'],$id); */
    }
  var_dump($_SESSION['carrinho']);
}
?>