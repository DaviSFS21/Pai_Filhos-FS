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
  <title>Admin - Pai & Filhos</title>
</head>

<body>
  <h2>Comercial Pai & Filhos - Pagina de administrador</h2>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
    </div>
    <div class="form-container sign-in-container">
      <form action="#">
        <h1>Gerenciamento</h1>
        <button><a href="./cad_prod.php">Cadastrar</a></button>
        <a href="./lista_prod.php"><button>Alterar</a></button>
        <a href="./exluir_prod.php"><button>Excluir</a></button>
        <a href="./"><button>Consultar</a></button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">

        </div>
        <div class="overlay-panel overlay-right">
          <h1>Olá, Trindade Full Stack!</h1>
          <p>Bem-vindos a pagina de administrador</p>
          <button><a href="../index/index.php">Voltar</a></button>
        </div>
      </div>
    </div>
  </div>

  <script src="./js/index.js"></script>
</body>

</html>