<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../prod/style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

  <title>Produtos - Pai & Filhos</title>
</head>

<body id="home">
    <div id="header_1">
        <div class="logo_1">
        <a href="../index/index.php">Comercial Pai & Filhos</a>
        </div>
        <nav style="width: 891px; padding-top: 5px; margin-right: 57px;">
        <ul style="padding-left: 0px;">
            <li>
            <a href="../index/index.php">Início</a>
            </li>
            <li>
            <a href="#home">Produtos</a>
            <ul class="drop" style="margin-left: 40px;">
                <li class="scroll">
                <ul class="mega-col">
                    <li><a href="#trav">Travesseiro</a></li>
                    <li><a href="#col">Colchão</a></li>
                    <li><a href="#edred">Edredom</a></li>
                    <li><a href="#lenc">Lençol</a></li>
                </ul>
                <ul class="mega-col">
                    <li><a href="#cadei">Cadeiras</a></li>
                    <li><a href="#plas">Plásticos</a></li>
                    <li><a href="#alum">Alumínio</a></li>
                    <li><a href="#vidr">Vidros</a></li>
                </ul>
                <ul class="mega-col">
                    <li><a href="#elet">Eletrodomésticos</a></li>
                    <li><a href="#esc">Escada</a></li>
                    <li><a href="#tap">Tapete</a></li>
                    <li><a href="#pano">Panos</a></li>
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
            <a href="../carrinho/carrinho.php" style="height: 85px; width: 90px;"><img src="../assets/images/icon-buy.png" alt="" style="height: 50px; width: 50px; margin-top: -10px; margin-left: -10px;"></a>
            </li>
            <form class="d-flex" role="search" style="padding-top: 27px; padding-left: 45px;">
            <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar" list="datalistOptions" style="margin-right: 4px;">
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
    <img src="../assets/images/produtos.PNG" style="width: 70rem; height: 30rem; margin-left: 12rem;">
    <div class="button">
        <button type="button" class="btn btn-success" style="margin-top: -15rem; margin-left: 15rem;">
        <a class="btn-hover" href="../prod/coll.php" style="text-decoration: none;">Aproveite a oferta!</a></button>
    </div>
    <hr>
    <?php
    if(!isset($_GET['categ'])){
    ?>
    <h2>Travesseiros</h2>
        <?php
            $col = 0;

            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = 'travesseiros'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                  $col += 1;
      
                  if($col == 1){
                      echo '
          <section id="col" style="margin-bottom: 50px;">
              <div class="container-fluid text-center">
                  <div class="text-success"></div>
                  <div class="row">';
                  }
      
                  if($col == 1){
                      echo '
                      <div class="col-1 offset-sm-1">';
                  }
                  if($col == 2){
                      echo '
                      <div class="col-2 offset-md-3">';
                  }
      
                  if($col == 3){
                      echo '
                      <div class="col-3 offset-sm-2">';
                  }
                  echo '
                          <div class="card" style="width: 18rem;">
                              <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[1].'</p>
                              </div>
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[3].'</p>
                              </div>
                              <button type="button" class="btn btn-outline-success">
                                  <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                              </button>
                          </div>
                      </div>';
                  if($col == 3){
                      echo '
                  </div>
              </div>
          </section>
                      ';
                      $col = 0;
                  }
              }
            }                
        ?>    
    <hr>
    <h2>Edredons</h2>
    <?php
            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = 'edredons'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                  $col += 1;
      
                  if($col == 1){
                      echo '
          <section id="col" style="margin-bottom: 50px;">
              <div class="container-fluid text-center">
                  <div class="text-success"></div>
                  <div class="row">';
                  }
      
                  if($col == 1){
                      echo '
                      <div class="col-1 offset-sm-1">';
                  }
                  if($col == 2){
                      echo '
                      <div class="col-2 offset-md-3">';
                  }
      
                  if($col == 3){
                      echo '
                      <div class="col-3 offset-sm-2">';
                  }
                  echo '
                          <div class="card" style="width: 18rem;">
                              <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[1].'</p>
                              </div>
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[3].'</p>
                              </div>
                              <button type="button" class="btn btn-outline-success">
                                  <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                              </button>
                          </div>
                      </div>';
                  if($col == 3){
                      echo '
                  </div>
              </div>
          </section>
                      ';
                      $col = 0;
                  }
              }
            }                
        ?>    
    <hr>
    <h2>Lençóis</h2>
    <?php
            $col = 0;

            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = 'lencois'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                  $col += 1;
      
                  if($col == 1){
                      echo '
          <section id="col" style="margin-bottom: 50px;">
              <div class="container-fluid text-center">
                  <div class="text-success"></div>
                  <div class="row">';
                  }
      
                  if($col == 1){
                      echo '
                      <div class="col-1 offset-sm-1">';
                  }
                  if($col == 2){
                      echo '
                      <div class="col-2 offset-md-3">';
                  }
      
                  if($col == 3){
                      echo '
                      <div class="col-3 offset-sm-2">';
                  }
                  echo '
                          <div class="card" style="width: 18rem;">
                              <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[1].'</p>
                              </div>
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[3].'</p>
                              </div>
                              <button type="button" class="btn btn-outline-success">
                                  <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                              </button>
                          </div>
                      </div>';
                  if($col == 3){
                      echo '
                  </div>
              </div>
          </section>
                      ';
                      $col = 0;
                  }
              }
            }                
        ?>    
    <hr>
    <h2>Cadeiras</h2>
    <?php
            $col = 0;

            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = 'cadeiras'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                  $col += 1;
      
                  if($col == 1){
                      echo '
          <section id="col" style="margin-bottom: 50px;">
              <div class="container-fluid text-center">
                  <div class="text-success"></div>
                  <div class="row">';
                  }
      
                  if($col == 1){
                      echo '
                      <div class="col-1 offset-sm-1">';
                  }
                  if($col == 2){
                      echo '
                      <div class="col-2 offset-md-3">';
                  }
      
                  if($col == 3){
                      echo '
                      <div class="col-3 offset-sm-2">';
                  }
                  echo '
                          <div class="card" style="width: 18rem;">
                              <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[1].'</p>
                              </div>
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[3].'</p>
                              </div>
                              <button type="button" class="btn btn-outline-success">
                                  <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                              </button>
                          </div>
                      </div>';
                  if($col == 3){
                      echo '
                  </div>
              </div>
          </section>
                      ';
                      $col = 0;
                  }
              }
            }                
        ?>    
    <hr>
    <h2>Plásticos</h2>
    <?php
            $col = 0;

            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = 'plasticos'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                  $col += 1;
      
                  if($col == 1){
                      echo '
          <section id="col" style="margin-bottom: 50px;">
              <div class="container-fluid text-center">
                  <div class="text-success"></div>
                  <div class="row">';
                  }
      
                  if($col == 1){
                      echo '
                      <div class="col-1 offset-sm-1">';
                  }
                  if($col == 2){
                      echo '
                      <div class="col-2 offset-md-3">';
                  }
      
                  if($col == 3){
                      echo '
                      <div class="col-3 offset-sm-2">';
                  }
                  echo '
                          <div class="card" style="width: 18rem;">
                              <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[1].'</p>
                              </div>
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[3].'</p>
                              </div>
                              <button type="button" class="btn btn-outline-success">
                                  <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                              </button>
                          </div>
                      </div>';
                  if($col == 3){
                      echo '
                  </div>
              </div>
          </section>
                      ';
                      $col = 0;
                  }
              }
            }                
        ?>    
    <hr>
    <h2>Alumínios</h2>
    <?php
            $col = 0;

            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = 'aluminios'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                  $col += 1;
      
                  if($col == 1){
                      echo '
          <section id="col" style="margin-bottom: 50px;">
              <div class="container-fluid text-center">
                  <div class="text-success"></div>
                  <div class="row">';
                  }
      
                  if($col == 1){
                      echo '
                      <div class="col-1 offset-sm-1">';
                  }
                  if($col == 2){
                      echo '
                      <div class="col-2 offset-md-3">';
                  }
      
                  if($col == 3){
                      echo '
                      <div class="col-3 offset-sm-2">';
                  }
                  echo '
                          <div class="card" style="width: 18rem;">
                              <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[1].'</p>
                              </div>
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[3].'</p>
                              </div>
                              <button type="button" class="btn btn-outline-success">
                                  <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                              </button>
                          </div>
                      </div>';
                  if($col == 3){
                      echo '
                  </div>
              </div>
          </section>
                      ';
                      $col = 0;
                  }
              }
            }                
        ?>    
    <hr>
    <h2>Vidros</h2>
    <?php
            $col = 0;

            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = 'vidros'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                  $col += 1;
      
                  if($col == 1){
                      echo '
          <section id="col" style="margin-bottom: 50px;">
              <div class="container-fluid text-center">
                  <div class="text-success"></div>
                  <div class="row">';
                  }
      
                  if($col == 1){
                      echo '
                      <div class="col-1 offset-sm-1">';
                  }
                  if($col == 2){
                      echo '
                      <div class="col-2 offset-md-3">';
                  }
      
                  if($col == 3){
                      echo '
                      <div class="col-3 offset-sm-2">';
                  }
                  echo '
                          <div class="card" style="width: 18rem;">
                              <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[1].'</p>
                              </div>
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[3].'</p>
                              </div>
                              <button type="button" class="btn btn-outline-success">
                                  <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                              </button>
                          </div>
                      </div>';
                  if($col == 3){
                      echo '
                  </div>
              </div>
          </section>
                      ';
                      $col = 0;
                  }
              }
            }                
        ?>    
    <hr>
    <h2>Eletrodomésticos</h2>
    <?php
            $col = 0;

            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = 'eletros'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                  $col += 1;
      
                  if($col == 1){
                      echo '
          <section id="col" style="margin-bottom: 50px;">
              <div class="container-fluid text-center">
                  <div class="text-success"></div>
                  <div class="row">';
                  }
      
                  if($col == 1){
                      echo '
                      <div class="col-1 offset-sm-1">';
                  }
                  if($col == 2){
                      echo '
                      <div class="col-2 offset-md-3">';
                  }
      
                  if($col == 3){
                      echo '
                      <div class="col-3 offset-sm-2">';
                  }
                  echo '
                          <div class="card" style="width: 18rem;">
                              <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[1].'</p>
                              </div>
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[3].'</p>
                              </div>
                              <button type="button" class="btn btn-outline-success">
                                  <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                              </button>
                          </div>
                      </div>';
                  if($col == 3){
                      echo '
                  </div>
              </div>
          </section>
                      ';
                      $col = 0;
                  }
              }
            }                
        ?>    
    <hr>
    <h2>Escadas</h2>
    <?php
            $col = 0;

            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = 'escadas'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                  $col += 1;
      
                  if($col == 1){
                      echo '
          <section id="col" style="margin-bottom: 50px;">
              <div class="container-fluid text-center">
                  <div class="text-success"></div>
                  <div class="row">';
                  }
      
                  if($col == 1){
                      echo '
                      <div class="col-1 offset-sm-1">';
                  }
                  if($col == 2){
                      echo '
                      <div class="col-2 offset-md-3">';
                  }
      
                  if($col == 3){
                      echo '
                      <div class="col-3 offset-sm-2">';
                  }
                  echo '
                          <div class="card" style="width: 18rem;">
                              <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[1].'</p>
                              </div>
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[3].'</p>
                              </div>
                              <button type="button" class="btn btn-outline-success">
                                  <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                              </button>
                          </div>
                      </div>';
                  if($col == 3){
                      echo '
                  </div>
              </div>
          </section>
                      ';
                      $col = 0;
                  }
              }
            }                
        ?>    
    <hr>
    <h2>Tapetes</h2>
    <?php
            $col = 0;

            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = 'tapetes'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                  $col += 1;
      
                  if($col == 1){
                      echo '
          <section id="col" style="margin-bottom: 50px;">
              <div class="container-fluid text-center">
                  <div class="text-success"></div>
                  <div class="row">';
                  }
      
                  if($col == 1){
                      echo '
                      <div class="col-1 offset-sm-1">';
                  }
                  if($col == 2){
                      echo '
                      <div class="col-2 offset-md-3">';
                  }
      
                  if($col == 3){
                      echo '
                      <div class="col-3 offset-sm-2">';
                  }
                  echo '
                          <div class="card" style="width: 18rem;">
                              <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[1].'</p>
                              </div>
                              <div class="card-body">
                                  <p class="card-text">'.$vetor_prod[3].'</p>
                              </div>
                              <button type="button" class="btn btn-outline-success">
                                  <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                              </button>
                          </div>
                      </div>';
                  if($col == 3){
                      echo '
                  </div>
              </div>
          </section>
                      ';
                      $col = 0;
                  }
              }
            }                
        ?>    
    <hr>
    <h2>Panos</h2>
        <?php
            $col = 0;

            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = 'panos'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                    $col += 1;
        
                    if($col == 1){
                        echo '
            <section id="col" style="margin-bottom: 50px;">
                <div class="container-fluid text-center">
                    <div class="text-success"></div>
                    <div class="row">';
                    }
        
                    if($col == 1){
                        echo '
                        <div class="col-1 offset-sm-1">';
                    }
                    if($col == 2){
                        echo '
                        <div class="col-2 offset-md-3">';
                    }
        
                    if($col == 3){
                        echo '
                        <div class="col-3 offset-sm-2">';
                    }
                    echo '
                            <div class="card" style="width: 18rem;">
                                <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">'.$vetor_prod[1].'</p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">'.$vetor_prod[3].'</p>
                                </div>
                                <button type="button" class="btn btn-outline-success">
                                    <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                                </button>
                            </div>
                        </div>';
                    if($col == 3){
                        echo '
                    </div>
                </div>
            </section>
                      ';
                        $col = 0;
                    }
                }
            }
        }else{
            $col = 0;

            //Conexão com o banco
            require("../assets/bd/connect.php");

            $categoria = $_GET['categ'];

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto` WHERE `categoria` = '$categoria'";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado != 0){
                //Existe categorias cadastradas!
                for($i = 1; $i <= $numero_resultado; $i++){
                  $vetor_prod = mysqli_fetch_array($resultado_prod);
      
                    $col += 1;
        
                    if($col == 1){
                        echo '
            <section id="col" style="margin-bottom: 50px;">
                <div class="container-fluid text-center">
                    <div class="text-success"></div>
                    <div class="row">';
                    }
        
                    if($col == 1){
                        echo '
                        <div class="col-1 offset-sm-1">';
                    }
                    if($col == 2){
                        echo '
                        <div class="col-2 offset-md-3">';
                    }
        
                    if($col == 3){
                        echo '
                        <div class="col-3 offset-sm-2">';
                    }
                    echo '
                            <div class="card" style="width: 18rem;">
                                <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">'.$vetor_prod[1].'</p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">'.$vetor_prod[3].'</p>
                                </div>
                                <button type="button" class="btn btn-outline-success">
                                    <a href="carrinho.php?id_prod='.$vetor_prod[0].'" class="color-hover">Adicionar ao carrinho</a>
                                </button>
                            </div>
                        </div>';
                    if($col == 3){
                        echo '
                    </div>
                </div>
            </section>
                      ';
                        $col = 0;
                    }
                }
            }
        }           
        ?>
    <div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <a href="#home" id="NUMBER" style="padding-left: 87rem;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg></a>
    </div>
    <br>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="./js/scroll.js"></script>
    <footer>
        <span>© 2022 By <a href="#">Trindade Fullstack</a></span>
    </footer>
</body>
</html>
<?php mysqli_close($conexao); ?>