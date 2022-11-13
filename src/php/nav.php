<!-- Tentativa de fazer um único arquivo para todas as <nav>'s. -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Frameworks/libs do CSS -->
  <!-- Bootstrap - CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- W3.CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <!-- Cloudflare -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

  <title>Document</title>
</head>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap");

  :root {
    --color-primary: #2c3e50;
    --color-primary-2: #34495e;
    --color-background-darkness: #1e262d;
    --color-white: #fff;
    --color-white-2: #eee;
    --color-background-cinzel: #bdc3c7;
    --color-black: #000;
    --color-black-2: #333;
    --color-green: #198754;
    --color-hover: #2d72ff;
    --font-used: "Quicksand", sans-serif;
    --background-image: url(../assets/images/arrumando\ a\ cama.jpg);
  }

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: var(--font-used);
  }

  body {
  line-height: 1.5;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 16px;
  color: var(--color-white);
  text-decoration: none;
}

  #header_1 a {
    text-decoration: none;
    color: var(--color-white);
  }

  #header_1 {
    background: var(--color-background-darkness);
    width: 100%;
    position: relative;
    text-decoration: none;
  }

  #header_1:after {
    content: "";
    clear: both;
    display: block;
  }

  .search {
    float: right;
    padding: 30px;
  }

  input {
    border: none;
    padding: 10px;
    border-radius: 20px;
  }

  .logo_1 {
    float: left;
    padding: 26px 0 26px;
  }

  .logo_1 a {
    font-size: 28px;
    display: block;
    padding: 0 0 0 20px;
  }

  nav {
    float: right;
  }

  nav>ul {
    float: left;
    position: relative;
  }

  nav li {
    list-style: none;
    float: left;
  }

  nav .dropdown {
    position: relative;
  }

  nav li a {
    float: left;
    padding: 30px;
  }

  nav li a:hover {
    background: var(--color-primary);
  }

  nav li ul {
    display: none;
  }

  nav li:hover ul {
    display: inline;
  }

  nav li li {
    float: none;
  }

  nav .drop {
    width: 50%;
    position: absolute;
    top: 100%;
    left: -50px;
    background: var(--color-black);
    overflow: hidden;
    padding: 20px 35px;
    border-bottom: 3px solid var(--color-primary-2);
    margin-top: -5px;
  }

  ol,
  ul {
    padding-left: 2rem;
  }

  nav .drop_1 ul {
    position: absolute;
    left: 256px;
    top: 100%;
    background: var(--color-black);
    padding: 20px 0;
    border-bottom: 3px solid var(--color-primary-2);
    margin-top: -5px;
  }

  nav .drop_1 li {
    white-space: nowrap;
  }

  nav .drop_1 i a {
    padding: 10px 35px;
    font-size: 13px;
    min-width: 200px;
  }

  nav li li a {
    float: inline-start;
    color: var(--color-black-2);
    display: block;
    padding: 8px 10px;
    border-radius: 3px;
    font-size: 12px;
  }

  nav li a:hover {
    background: var(--color-primary);
  }
  .mega-col {
    width: 25%;
    float: left;
    color: var(--color-black);
  }
</style>

<body>
  <!-- DIV geral da nav -->
  <div id="header_1">
    <!-- DIV do nome da empresa -->
    <div class="logo_1">
      <a href="../index/index.php">Comercial Pai & Filhos</a>
      <!-- Fim - Div -->
    </div>
    <!-- NAV -->
    <nav style="width: 891px; padding-top: 5px; margin-right: 113px;">
      <!-- ul engloba e ordena todos os 'li' -->
      <ul style="padding-left: 0px;">
        <!-- li para acesso do index -->
        <li>
          <a href="../index/index.php">Início</a>
        </li>
        <!-- li para acesso da tela produtos -->
        <li>
          <a href="../prod/index.php">Produtos</a>
          <ul class="drop" style="margin-left: 40px;">
            <!-- li do dropdown para acessar as cetegorias de produtos -->
            <li class="scroll">
              <ul class="mega-col" style="margin-right: 20px ;">
                <li><a href="../prod/index.php#trav">Travesseiro</a></li>
                <li><a href="../prod/index.php#col">Colchão</a></li>
                <li><a href="../prod/index.php#edred">Edredom</a></li>
                <li><a href="../prod/index.php#lenc">Lençol</a></li>
              </ul>
              <ul class="mega-col">
                <li><a href="../prod/index.php#cadei">Cadeiras</a></li>
                <li><a href="../prod/index.php#plas">Plásticos</a></li>
                <li><a href="../prod/index.php#alum">Alumínio</a></li>
                <li><a href="../prod/index.php#vidr">Vidros</a></li>
              </ul>
              <ul class="mega-col">
                <li><a href="../prod/index.php#elet">Eletrodomésticos</a></li>
                <li><a href="../prod/index.php#esc">Escada</a></li>
                <li><a href="../prod/index.php#tap">Tapete</a></li>
                <li><a href="../prod/index.php#pano">Panos</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- li para acessar a página de contatos da empresa -->
        <li class="drop_1">
          <a href="../contatos/contatos.php">Contatos</a>
        </li>
        <!-- li do user/admin -->
        <li class="drop_2">
          <?php
          if (isset($_SESSION['nome'])) {
            echo '<a href="../user/index.php">Olá, ' . $_SESSION['nome'] . '</a>
                <ul class="drop" style="width: 20%; margin-left: 457px;">
                  <li class="scroll">
                    <ul class="mega-col">
                      <li><a href="../assets/bd/exit.php">Sair</a></li>
                    </ul>
                  </li>
                </ul>';
          } else {
            echo "<a href='../login/index.php'>Faça o login</a>";
          }
          ?>
        </li>
        </li>
        <!-- li com img para simbolizar e acessar o carrinho -->
        <li class="icon-buy">
          <a href="../carrinho/carrinho.php" style="height: 84px; width: 90px;"><img src="../assets/images/icon-buy.png" alt="" style="height: 50px; width: 50px; margin-top: -10px; margin-left: -10px;"></a>
        </li>
        <!-- form do search para conseguir pesquisar os produtos de forma automática -->
        <form class="d-flex" role="search" style="padding-top: 27px; padding-left: 45px;">
          <!-- Input para fazer a pesquisa -->
          <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar" list="datalistOptions" style="margin-right: 4px; margin-left: -10px; width: 10pc;">
          <!-- Datalist com os produtos disponiveis na loja -->
          <datalist id="datalistOptions">
            <option value="Travesseiro"></option>
            <option value="Colchão"></option>
            <option value="Edredom"></option>
            <option value="Lençol"></option>
            <option value="Cadeiras"></option>
            <option value="Plásticos"></option>
            <option value="Alumínio"></option>
            <option value="Vidros"></option>
            <option value="Eletrodomésticos"></option>
            <option value="Escada"></option>
            <option value="Tapete"></option>
            <option value="Panos"></option>
            <!-- Fim - Datalist -->
          </datalist>
          <!-- Botão para fazer a pesquisa do produto -->
          <button class="btn btn-outline-success" type="submit" style="margin-right: -48px;"><i class="fa fa-search"></i></button>
          <!-- Fim - form -->
        </form>
        <!-- Fim - ul -->
      </ul>
      <!-- Fim - Nav -->
    </nav>
    <!-- Fim - Div -->
  </div>

  <!-- Bootstrap - JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
  <!-- Script do header -->
  <script src="../index/js/main.js"></script>
</body>

</html>