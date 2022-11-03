<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style_coll.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>Promoção de inverno</title>
</head>

<body id="home">
  <?php
  require("../php/nav.php");
  ?>
  <main>
    <div class="container">
      <div class="grid product">
        <div class="column-xs-12 column-md-7">
          <div class="product-gallery">
            <div class="product-image">
              <img class="active" src="../assets/images/jogo_de_cama3.png">
            </div>
            <ul class="image-list" style="padding-left: 0px;">
              <li class="image-item"><img src="../assets/images/jogo_de_cama1.png"></li>
              <li class="image-item"><img src="../assets/images/jogo_de_cama.jpg"></li>
              <li class="image-item"><img src="../assets/images/jogo_de_cama3.png"></li>
            </ul>
          </div>
        </div>
        <div class="column-xs-12 column-md-5">
          <h1>Jogo de cama</h1>
          <h2>R$359.99</h2>
          <div class="description">
            <h5>Cor: Verde água/branco<br>
              Tipo de Desenho: Palmeiras frias<br>
              Comprimento: 2,40x2,40m<br>
              Detalhes: 140 fios <br>
              Tecido/material: 100% algodão <br> </h5>
          </div>
          <button class="add-to-cart"><a href="../carrinho/carrinho.php" class="color-hover">Adicionar ao carrinho</a></button>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <h3>Mais produtos da coleção</h3>
      </div>
      <div class="d-flex justify-content-center">
        <div class="column-xs-12 column-md-4">
          <img src="../assets/images/almofada.png" style="width: 400px;">
          <h4>Almofada</h4>
          <h5 class="price">R$69.99</h5>
          <button class="add-to-cart"><a href="../carrinho/carrinho.php" class="color-hover">Adicionar ao carrinho</a></button>
        </div>
        <div class="column-xs-12 column-md-4">
          <img src="../assets/images/jogo_de_banho.png" style="width: 400px;">
          <h4>Jogo De Banho 5 Peças</h4>
          <h5 class="price">R$89.99</h5>
          <button class="add-to-cart"><a href="../carrinho/carrinho.php" class="color-hover">Adicionar ao carrinho</a></button>
        </div>
        <div class="column-xs-12 column-md-4">
          <img src="../assets/images/capa_duvet.png" style="width: 400px;">
          <h4>Capa Duvet</h4>
          <h5 class="price">R$319.99</h5>
          <button class="add-to-cart"><a href="../carrinho/carrinho.php" class="color-hover">Adicionar ao carrinho</a></button>
        </div>
      </div>
      <br>
    </div>
  </main>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="../prod/js/coll.js"></script>
</body>

</html>