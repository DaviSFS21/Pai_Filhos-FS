<?php
session_start();

//Conexão com o banco
require("../assets/bd/connect.php");

if(isset($_SESSION['nome'])){
  $carrinho = $_SESSION['carrinho'];
}else{
  ?><script>window.replace.location('../login/index.php')</script><?php
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
      array_push($carrinho,$id);
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/carrinho.css">
  <title>Carrinho - Pai & Filhos</title>
</head>

<body>
  <div class="wrap cf">
    <img src="../assets/images/Logo_P&F.png" alt="Pai & Filhos" style="height: 110px; width: 120px;">
    <h1 class="projTitle">Pai & Filhos</h1>
    <div class="heading cf">
      <h1>Meu carrinho</h1>
      <a href="../prod/index.php" class="continue">Continue comprando</a>
    </div>
    <div class="cart">
      <ul class="tableHead">
        <li class="prodHeader">Produtos</li>
        <li>Quantidades</li>
        <li>Total</li>
        <li>Remover</li>
      </ul>
      <ul class="cartWrap">
        <li class="items even">
          <div class="infoWrap">
            <div class="cartSection">
              <img src="../assets/images/cama_2.jpg" alt="" class="itemImg" />
              <p class="itemNumber">ID: 1104-543-1738</p>
              <h3>Cama King Size</h3>
              <p> <input type="text" class="qty" placeholder="2" /> x R$5000,00</p>
              <p class="stockStatus">Em estoque</p>
            </div>
            <div class="prodTotal cartSection">
              <p>R$10000,00</p>
            </div>
            <div class="cartSection removeWrap">
              <a href="#" class="remove" onclick="removeProd()">x</a>
            </div>
          </div>
        </li>
        <hr>
      </ul>
    </div>
    <div class="subtotal cf" style="margin-right: 35%">
      <ul style="list-style-type: none;">
        <li class="totalRow" style="margin-right: 21%"><span class="label">Subtotal</span><span class="value">R$10850,00</span></li>
        <li class="totalRow final" style="margin-right: 32%"><span class="label">Total</span><span class="value">R$10850,00</span></li>
        <li class="totalRow"><a href="../index/index.php" class="btn continue" onclick="myFunction()">Finalizar compra</a></li>
      </ul>
    </div>
  </div>

  <script src="./js/main.js"></script>
</body>

</html>