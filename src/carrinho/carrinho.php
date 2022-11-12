<?php
session_start();

//Conexão com o banco
require("../assets/bd/connect.php");

if(!isset($_SESSION['nome'])){
    ?><script>window.replace.location('../login/index.php')</script><?php
}
if(isset($_GET['id_prod'])){

    $id = intval($_GET['id_prod']);
    
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = [];
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
                die();
            </script>
        <?php
    }else{
        if(!isset($_SESSION['carrinho'][$id])){
            $_SESSION['carrinho'][$id] = 1;
        }else{
            $_SESSION['carrinho'][$id] += 1;
        }
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
      <h1>Meu carrinho <?php var_dump($_SESSION['carrinho']); ?></h1>
      <a href="../prod/index.php" class="continue">Continue comprando</a>
    </div>
    <div class="cart">
      <ul class="tableHead">
        <li class="prodHeader">Produtos</li>
        <li>Quantidades</li>
        <li>Total</li>
        <li>Remover</li>
      </ul>
      <?php
  foreach($_SESSION['carrinho'] as $id => $qtd){
    //Gerando a SQL de PESQUISA das categorias existentes no BD
    $pesquisar_prod = "SELECT * FROM `produto` WHERE `cod_prod` = '$id'";

    //Executando a SQL e armazenando o resultado em uma variavel
    $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

    $vetor_prod = mysqli_fetch_array($resultado_prod);
      ?>
      <ul class="cartWrap">
        <li class="items even">
          <div class="infoWrap">
            <div class="cartSection">
              <img src="<?php echo $vetor_prod[4]; ?>" alt="" class="itemImg" />
              <p class="itemNumber">ID do produto: <?php echo $vetor_prod[0]; ?></p>
              <h3><?php echo $vetor_prod[1]; ?></h3>
              <h4><?php echo $vetor_prod[3]; ?></h4>
              <p> <input type="text" class="qty" value="<?php echo $qtd; ?>" /></p>
            </div>
            <div class="prodTotal cartSection">
              <p><?php echo $vetor_prod[6]; ?></p>
            </div>
            <div class="cartSection removeWrap">
              <a href="#" class="remove" onclick="removeProd()">x</a>
            </div>
          </div>
        </li>
        <hr>
      </ul>
      <?php 
  }
      ?>
    </div>
    <div class="subtotal cf" style="margin-right: 35%">
      <ul style="list-style-type: none;">
        <li class="totalRow" style="margin-right: 21%"><span class="label">Subtotal</span><span class="value">R$10850,00</span></li>
        <li class="totalRow final" style="margin-right: 32%"><span class="label">Total</span><span class="value">R$10850,00</span></li>
        <li class="totalRow"><a href="../carrinho/carrinho.php" class="btn continue" onclick="limpCarrinho()" style="background-color: red; margin-bottom: 30px">Limpar carrinho</a></li>
        <li class="totalRow"><a href="../index/index.php" class="btn continue" onclick="myFunction()">Finalizar compra</a></li>
      </ul>
    </div>
  </div>

  <script src="./js/main.js"></script>
  <script>
    function limpCarrinho(){
      <?php 
        unset($_SESSION['carrinho']);
      ?>
    }

    function removeProd() {
      <?php
        unset($_SESSION['carrinho'][$id]);
      ?>
    }
  </script>

</body>
</html>