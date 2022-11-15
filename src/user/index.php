<?php
session_start();
if (isset($_SESSION['nome'])) {
  if ($_SESSION['verif_admin'] == 1) {
?>
    <script>
      alert("Redirecionando para a página de admin!");
      window.location.replace("../admin/index.php");
    </script>
  <?php
  } else {
  ?>
    <script>
      window.location.replace("../carrinho/carrinho.php");
    </script>
<?php
  }
}
?>