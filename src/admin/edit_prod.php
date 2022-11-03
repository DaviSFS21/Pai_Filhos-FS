<?php 
    session_start();
    if(isset($_SESSION['nome'])){
      if($_SESSION['verif_admin'] == 0){
        ?>
        <script>
          alert("Você não deveria estar aqui...");
          window.location.replace("../index/index.php");
        </script>
        <?php
      }
    }else{
        ?>
        <script>
            window.location.replace("../login/index.php");
        </script>
        <?php
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="opera-gx">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_coll.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div id="header_1">
        <div class="logo_1">
        <a href="#home">Comercial Pai & Filhos</a>
        </div>
        <nav style="width: 891px; padding-top: 5px;">
            <ul style="float: right; margin-right: 25px">
                <li>
                <a href="cad_prod.php">Cadastrar produto</a>
                </li>
                <li class="drop_1">
                <a href="edit_prod.php">Ver produtos</a>
                </li>
                <li class="drop_2">
                <?php
                if (isset($_SESSION['nome'])) {
                    echo '<a href="../user/index.php">Olá, ' . $_SESSION['nome'] . '</a>
                        <ul class="drop" style="width: 40%; margin-left: 430px;">
                        <li class="scroll">
                            <ul class="mega-col">
                            <li><a href="../index/index.php">Voltar ao site</a></li>
                            <li><a href="../assets/bd/exit.php">Sair</a></li>
                            </ul>
                        </li>
                        </ul>';
                } else {
                    echo "<a href='../login/index.php'>Faça o login</a>";
                }
                ?>
                </li>
            </ul>
        </nav>
    </div>
    <div class='row'>
        <?php
            //Conexão com o banco
            require("../assets/bd/connect.php");

            //Gerando a SQL de PESQUISA das categorias existentes no BD
            $pesquisar_prod = "SELECT * FROM `produto`";

            //Executando a SQL e armazenando o resultado em uma variavel
            $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

            //Obtendo o numero de linhas retornadas na pesquisa
            $numero_resultado = mysqli_num_rows($resultado_prod);

            if($numero_resultado == 0)
            {
                ?>
                    <!-- Aqui tem Javascript!-->
                    <script>
                        alert("Não existem produtos cadastrados...");
                        window.location.replace("../index.html");
                    </script>
                <?php
            }
            else
            {

                //Existe categorias cadastradas!
                for($i = 0  ; $i < $numero_resultado; $i++){
                    //Gerando um vetor com as categorias
                    $vetor_prod = mysqli_fetch_array($resultado_prod);
                    echo '
                        <div class="col-1 offset-sm-1" style="margin-left: 65px;">
                        <div class="card" style="width: 18rem;">
                          <img src="'.$vetor_prod[4].'" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text"><b>'.$vetor_prod[1].'</b></p>
                            <p class="card-text">'.$vetor_prod[3].'</p>
                          </div>
                          <button type="button" class="btn btn-outline-success">
                            <a href="teste.php?id='.$vetor_prod[0].'" class="color-hover">Editar o produto</a>
                          </button>
                        </div>
                      </div>
                        ';
                }
            }                
        ?>     
    </div>
</body>
</html>