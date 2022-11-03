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
        <li class="items odd">

          <div class="infoWrap">
            <div class="cartSection">
              <img src="../assets/images/cadeira nova.jpg" alt="" class="itemImg" />
              <p class="itemNumber">ID: 4302-421-1345</p>
              <h3>Conjunto de cadeiras</h3>

              <p> <input type="text" class="qty" placeholder="1" /> x R$500,00</p>

              <p class="stockStatus"> Em estoque</p>
            </div>


            <div class="prodTotal cartSection">
              <p>R$500,00</p>
            </div>
            <div class="cartSection removeWrap">
              <a href="#" class="remove" onclick="removeProd()">x</a>
            </div>
          </div>
        </li>

        <hr>

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

        <li class="items odd">
          <div class="infoWrap">
            <div class="cartSection">

              <img src="../assets/images/jogo_de_banho.png" alt="" class="itemImg" />
              <p class="itemNumber">ID: 7432-633-5282</p>
              <h3><s>Jogo de banho</s></h3>

              <p> <input type="text" class="qty" placeholder="3" /> x R$200,00</p>

              <p class="stockStatus out">Fora de estoque :/</p>
            </div>

            <div class="prodTotal cartSection">
              <p><s>R$600,00</s></p>
            </div>
            <div class="cartSection removeWrap">
              <a href="#" class="remove" onclick="removeProd()">x</a>
            </div>
          </div>
        </li>

        <hr>

        <li class="items even">
          <div class="infoWrap">
            <div class="cartSection info">

              <img src="../assets/images/toalha nova.jpg" alt="" class="itemImg" />
              <p class="itemNumber">ID: 5928-810-9847</p>
              <h3>Kit Toalhas</h3>

              <p> <input type="text" class="qty" placeholder="1" /> x R$350,00</p>

              <p class="stockStatus"> Em estoque</p>

            </div>


            <div class="prodTotal cartSection">
              <p>R$350,00</p>
            </div>

            <div class="cartSection removeWrap" id="produtos">
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