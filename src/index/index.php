<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

  <title>Pai & Filhos</title>
</head>

<body id="home">
  <div id="header_1">
    <div class="logo_1">
      <a href="#home">Comercial Pai & Filhos</a>
    </div>
    <nav style="width: 891px; padding-top: 5px; margin-right: 57px;">
      <ul style="padding-left: 0px;">
        <li>
          <a href="#home">Início</a>
        </li>
        <li>
          <a href="../prod/index.php">Produtos</a>
          <ul class="drop" style="margin-left: 40px;">
            <li class="scroll">
              <ul class="mega-col">
                <li><a href="../prod/index.php?categ=travesseiros">Travesseiros</a></li>
                <li><a href="../prod/index.php?categ=colchoes">Colchões</a></li>
                <li><a href="../prod/index.php?categ=edredons">Edredons</a></li>
                <li><a href="../prod/index.php?categ=lencois">Lençois</a></li>
              </ul>
              <ul class="mega-col">
                <li><a href="../prod/index.php?categ=cadeiras">Cadeiras</a></li>
                <li><a href="../prod/index.php?categ=plasticos">Plásticos</a></li>
                <li><a href="../prod/index.php?categ=aluminios">Alumínios</a></li>
                <li><a href="../prod/index.php?categ=vidros">Vidros</a></li>
              </ul>
              <ul class="mega-col">
                <li><a href="../prod/index.php?categ=eletros">Eletrodomésticos</a></li>
                <li><a href="../prod/index.php?categ=escadas">Escadas</a></li>
                <li><a href="../prod/index.php?categ=tapetes">Tapetes</a></li>
                <li><a href="../prod/index.php?categ=panos">Panos</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="drop_1">
          <a href="../contatos/contatos.php">Contatos</a>
        </li>
        <li class="drop_2">
          <?php
          if (isset($_SESSION['nome'])) {
            echo '<a href="../user/index.php">Olá, ' . $_SESSION['nome'] . '</a>
                <ul class="drop" style="width: 20%; margin-left: 350px;">
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
        <li class="icon-buy">
          <a href="../carrinho/carrinho.php" style="height: 85px; width: 90px;"><img src="../assets/images/icon-buy.png" alt=""
              style="height: 50px; width: 50px; margin-top: -10px; margin-left: -10px;"></a>
        </li>
        <form class="d-flex" role="search" style="padding-top: 27px; padding-left: 45px;">
          <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar"
            list="datalistOptions" style="margin-right: 4px;">
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
          </datalist>
          <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </ul>
    </nav>
  </div>
  <main id="home">
    <div class="container">
      <div class="title">
        <h2 style=" font-family: var(--font-used);">Pai & Filhos</h2>
        <h3 class="ml12">Sua casa na moda</h3>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <br>
        <div class="button">
          <button type="button" class="btn btn-success"><a href="../contatos/contatos.php">Venha nos
              conhecer!</a></button>
        </div>
      </div>
    </div>
  </main>
  <section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <a href="#home" id="NUMBER"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
        class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
      </svg></a>
    <div class="container-fluid text-center">
      <div class="jumbotron">
        <h2 class="display-2" id="text">Olá, Bem-vindo(a)!</h2>
        <p class="display-6">Feitos para você</p>
        <div class="text-success">
          <hr class="my-3">
        </div>
      </div>
      <h4>Cama, mesa e banho</h4>
      <div class="row">
        <div class="col-1 offset-sm-1" style="margin-left: 65px;">
          <div class="card" style="width: 18rem;">
            <img src="../assets/images/cama nova 2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Cama King size</p>
            </div>
            <button type="button" class="btn btn-outline-success">Saiba mais</button>
          </div>
        </div>
        <div class="col-2 offset-md-3">
          <div class="card" style="width: 18rem;">
            <img src="../assets/images/mesa nova.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Mesa 6 lugares</p>
            </div>
            <button type="button" class="btn btn-outline-success">Saiba mais</button>
          </div>
        </div>
        <div class="col-3 offset-sm-2">
          <div class="card" style="width: 18rem;">
            <img src="../assets/images/toalha nova.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Toalhas de banho</p>
            </div>
            <button type="button" class="btn btn-outline-success">Saiba mais</button>
          </div>
        </div>
      </div>
      <!-- End Container-fluid -->
    </div>
  </section>
  <section>
    <div class="container-fluid text-center">
      <div class="text-success">
        <hr class="my-3">
      </div>
      <div class="jumbotron">
        <h4>utensílios para casa</h4>
      </div>
      <div class="row">
        <div class="col-1 offset-sm-1" style="margin-left: 65px;">
          <div class="card" style="width: 18rem;">
            <img src="../assets/images/colheres novas.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Kit colheres </p>
            </div>
            <button type="button" class="btn btn-outline-success">Saiba mais</button>
          </div>
        </div>
        <div class="col-2 offset-md-3">
          <div class="card" style="width: 18rem;">
            <img src="../assets/images/panela nova.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Kit panela Tramontina</p>
            </div>
            <button type="button" class="btn btn-outline-success">Saiba mais</button>
          </div>
        </div>
        <div class="col-3 offset-sm-2">
          <div class="card" style="width: 18rem;">
            <img src="../assets/images/cadeira nova.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">6 Cadeiras</p>
            </div>
            <button type="button" class="btn btn-outline-success">Saiba mais</button>
          </div>
        </div>
      </div>
      <!-- end container-fluid -->
  </section>
  <br>
  <footer>
    <span>© 2022 By <a href="#">Trindade Fullstack</a></span>
  </footer>
  <script src="./js/main.js"></script>
  <script src="./js/title.js"></script>
  <script src="./js/scroll.js"></script>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
</body>

</html>