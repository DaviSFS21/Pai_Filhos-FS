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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_cad.css">
  <title>Document</title>
</head>

<body>
  <h2>Comercial Pai & Filhos - Cadastro de produtos</h2>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
    </div>
    <div class="form-container sign-in-container">
      <br>
    <form enctype="multipart/form-data" method="post" action="upload_prod.php">
      Nome: <input name="c_nome_prod" type=text size=140 maxlength=120>
      Marca: <input name="c_marca" type=text size=100 maxlength=100>
      Descrição: <br><textarea name="c_desc_prod" type=text size=460 maxlength=450 rows=6 cols=40></textarea>
      Categoria: <select name="c_categoria">
        <option>Selecione...</option>
        <option value="travesseiros">Travesseiros</option>
        <option value="colchoes">Colchões</option>
        <option value="edredons">Edredons</option>
        <option value="lencois">Lençois</option>
        <option value="cadeiras">Cadeiras</option>
        <option value="plasticos">Plásticos</option>
        <option value="aluminios">Alumínios</option>
        <option value="vidros">Vidros</option>
        <option value="eletros">Eletrodomésticos</option>
        <option value="escadas">Escadas</option>
        <option value="tapetes">Tapetes</option>
        <option value="panos">Panos</option>
      </select><br>
      Preço: <input name="c_preco" type=text size=20 maxlength=15>
      Imagem: <input type="file" name="c_img">
      <input type=submit value=Enviar>
    </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">

        </div>
        <div class="overlay-panel overlay-right">
          <h1>Olá, <?php echo $_SESSION['nome']; ?>!</h1>
          <p>Acesso restrito</p>
          <button><a href="index.php">Voltar</a></button>
        </div>
      </div>
    </div>
  </div>
    <br>
  <script src="./js/index.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
</body>

</html>