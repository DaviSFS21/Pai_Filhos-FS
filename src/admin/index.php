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
<body>
  <!-- Isso irá ficar no cabeçalho no lugar das opções para usuários comuns -->
<h1>Pai & Filhos</h1>
    <ul class="nav__links">
        <li><a href="cad_prod.php">Cadastrar</a></li>
        <li><a href="edit_prod.php">Editar</a></li>
        <li><a href="../assets/bd/exit.php">Sair</a></li>
        <li><a class="cta" href="index.html">Início</a></li>
    </ul>
</body>
</html>