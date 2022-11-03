<?php 
    session_start();
    if(isset($_SESSION['nome'])){
      if($_SESSION['verif_admin'] == 1){
        ?>
        <script>
          alert("Redirecionando para a página de admin!");
          window.location.replace("../admin/index.php");
        </script>
        <?php
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Sim
</body>
</html>