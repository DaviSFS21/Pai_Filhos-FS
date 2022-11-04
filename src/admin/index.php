<?php
session_start();
if (isset($_SESSION['nome'])) {
  if ($_SESSION['verif_admin'] == 0) {
?>
    <script>
      alert("Você não deveria estar aqui...");
      window.location.replace("../index/index.php");
    </script>
  <?php
  }
} else {
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
  <link rel="stylesheet" href="./css/style_index.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>Admin - Pai & Filhos</title>
</head>

<body>
  <!-- Isso irá ficar no cabeçalho no lugar das opções para usuários comuns -->
  <div class="container-fluid">
    <h1>Pai & Filhos</h1>
    <ul>
      <li class="items"><a href="cad_prod.php">Cadastrar</a></li>
      <li class="items"><a href="lista_prod.php">Editar</a></li>
      <li class="items"><a href="../assets/bd/exit.php">Sair</a></li>
      <li class="items"><a href="../index/index.php">Início</a></li>
    </ul>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
</body>

</html>