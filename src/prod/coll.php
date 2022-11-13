<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link do CSS -->
  <link rel="stylesheet" href="../css/style_coll.css">
  <!-- Frameworks/libs do CSS -->
  <!-- Bootstrap - CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- W3.CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <!-- Cloudflare -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

  <title>Promoção de inverno</title>
</head>

<body id="home">
  <!-- O require do php irá puxar a nav de uma outra pasta php -->
  <!-- A nav bugou quando colocamos direto -->
  <?php
  require("../php/nav.php");
  ?>
  <!-- utilizamos o main para ficar formatado de forma correta dentro da página -->
  <main>
    <!-- DIV com a class container irá ser o geral dentro da main -->
    <div class="container">
      <!-- DIV grid product vai ser a div central para englobar tudo   -->
      <div class="grid product">
        <!-- DIV abaixo vai fazer a separação do grid -->
        <div class="column-xs-12 column-md-7">
          <!-- DIV das imagens de baixo que irão alternar com a principal -->
          <div class="product-gallery">
            <!-- Div da imagem principal -->
            <div class="product-image">
              <img class="active" src="../assets/images/jogo_de_cama3.png">
              <!-- Fim - Div -->
            </div>
            <!-- ul que ira armazenar as 'li' das imagens q irão se alternar -->
            <ul class="image-list" style="padding-left: 0px;">
              <!-- li imagem 1 -->
              <li class="image-item"><img src="../assets/images/jogo_de_cama1.png"></li>
              <!-- li imagem 2 -->
              <li class="image-item"><img src="../assets/images/jogo_de_cama.jpg"></li>
              <!-- li imagem 3 -->
              <li class="image-item"><img src="../assets/images/jogo_de_cama3.png"></li>
              <!-- Fim - ul -->
            </ul>
            <!-- Fim - Div -->
          </div>
          <!-- Fim - Div -->
        </div>
        <!-- Div das categorias do produto apresentado -->
        <div class="column-xs-12 column-md-5">
          <!-- Nome produto -->
          <h1>Jogo de cama</h1>
          <!-- Valor produto -->
          <h2>R$359.99</h2>
          <!-- Div da descrição do pruduto -->
          <div class="description">
            <h5>Cor: Verde água/branco<br>
              Tipo de Desenho: Palmeiras frias<br>
              Comprimento: 2,40x2,40m<br>
              Detalhes: 140 fios <br>
              Tecido/material: 100% algodão <br> </h5>
            <!-- Fim - Div -->
          </div>
          <!-- Botão para adicionar o produto no carrinho -->
          <button class="add-to-cart"><a href="../carrinho/carrinho.php" class="color-hover">Adicionar ao carrinho</a></button>
          <!-- Fim - Div -->
        </div>
        <!-- Fim - Div -->
      </div>
      <!-- Div para o h3 -->
      <div class="d-flex justify-content-center">
        <h3>Mais produtos da coleção</h3>
        <!-- Fim - Div -->
      </div>
      <!-- Div dos outros produtos da coleção -->
      <div class="d-flex justify-content-center">
        <!-- Div para alinhar corretamente com bootstrap o produto -->
        <div class="column-xs-12 column-md-4">
          <!-- Imagem produto 1 -->
          <img src="../assets/images/almofada.png" style="width: 400px;">
          <!-- Nome produto -->
          <h4>Almofada</h4>
          <!-- Valor produto -->
          <h5 class="price">R$69.99</h5>
          <!-- Botão para adicionar o produto no carrinho -->
          <button class="add-to-cart"><a href="../carrinho/carrinho.php" class="color-hover">Adicionar ao carrinho</a></button>
          <!-- Fim - div -->
        </div>
        <!-- Div para alinhar corretamente com bootstrap o produto -->
        <div class="column-xs-12 column-md-4">
          <!-- Imagem produto 2 -->
          <img src="../assets/images/jogo_de_banho.png" style="width: 400px;">
          <!-- Nome produto -->
          <h4>Jogo De Banho 5 Peças</h4>
          <!-- Preço produto -->
          <h5 class="price">R$89.99</h5>
          <!-- Botão para adicionar o produto no carrinho -->
          <button class="add-to-cart"><a href="../carrinho/carrinho.php" class="color-hover">Adicionar ao carrinho</a></button>
          <!-- Fim - Div -->
        </div>
        <!-- Div para alinhar corretamente com bootstrap o produto -->
        <div class="column-xs-12 column-md-4">
          <!-- Imagem produto 3  -->
          <img src="../assets/images/capa_duvet.png" style="width: 400px;">
          <!-- Nome produto -->
          <h4>Capa Duvet</h4>
          <!-- Preço produto -->
          <h5 class="price">R$319.99</h5>
          <!-- Botão para adicionar o produto no carrinho -->
          <button class="add-to-cart"><a href="../carrinho/carrinho.php" class="color-hover">Adicionar ao carrinho</a></button>
          <!-- Fim - Div -->
        </div>
        <!-- Fim - Div -->
      </div>
      <br>
      <!-- Fim - Div -->
    </div>
    <!-- fim - Main -->
  </main>
  <!-- Bootstrap - JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <!-- Script para funcionar a mudança das imagens no começo da página -->
  <script src="../prod/js/coll.js"></script>
</body>

</html>