<?php
require("../assets/bd/connect.php");

//Caso existam dados nas caixas de texto, executar o código
if (isset($_POST['n_email'])) {
  $email = $_POST['n_email'];
  $cpf = $_POST['n_cpf'];
  $nome = $_POST['n_nome'];
  $senha = $_POST['n_senha'];
  $tel = $_POST['n_tel'];
  $cripto = sha1($senha);

  //Conectando com o banco para fazer a consulta do usuario

  //SQL de pesquisa de email
  $sql_pesq_email = "select * from `usuario` where `email` = '$email'";
  $result_email = mysqli_query($conexao, $sql_pesq_email);

  //tranformando em numero o resultado da pesquisa
  $verif_email = mysqli_num_rows($result_email);

  //SQL de pesquisa de CPF
  $sql_pesq_cpf = "select * from `usuario` where `cpf` = '$cpf'";
  $result_cpf = mysqli_query($conexao, $sql_pesq_cpf);

  //tranformando em numero o resultado da pesquisa
  $verif_cpf = mysqli_num_rows($result_cpf);

  //SQL de pesquisa de Telefone
  $sql_pesq_tel = "select * from `usuario` where `tel` = '$tel'";
  $result_tel = mysqli_query($conexao, $sql_pesq_tel);

  //tranformando em numero o resultado da pesquisa
  $verif_tel = mysqli_num_rows($result_tel);

  //Se não houver dados iguais, realizar o cadastro
  if ($verif_email == 0 && $verif_cpf == 0 && $verif_tel == 0) {

    //Iniciando a session com os dados inseridos
    session_start();
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['verif_admin'] = 0;
?>
    <script>
      alert("Cadastrado com sucesso!");
      window.location.replace("../index/index.php");
    </script>
  <?php

    //Comando e função de execução para o insert do usuário no BD
    $sql_cadastrar = "INSERT INTO `usuario`(`cpf`, `email`, `nome`, `senha`, `tel`) 
    VALUES ('$cpf','$email','$nome','$cripto','$tel')";

    mysqli_query($conexao, $sql_cadastrar);
  }
  //Caso já existam registros inseridos, criar condicionais para mostrar o que foi repetido
  else {
    if ($verif_cpf == 1) $valor_rep = "CPF; ";
    if ($verif_email == 1) $valor_rep = $valor_rep . "Email; ";
    if ($verif_tel == 1) $valor_rep = $valor_rep . "Telefone; ";
  ?>
    <script>
      alert("Já cadastrados: <?php echo trim($valor_rep, "; "); ?>");
    </script>
    <?php
  }
  mysqli_close($conexao);
}

if (isset($_POST['c_email'])) {
  $email = $_POST['c_email'];
  $senha = $_POST['c_senha'];
  $cripto = sha1($senha);
  //SQL de pesquisa de usuario e senha
  $sql_pesquisa = "select * from `usuario` where `email` = '$email' AND `senha` = '$cripto'";
  $resultado_usuario = mysqli_query($conexao, $sql_pesquisa);

  //tranformando em numero o resultado da pesquisa
  $numero_resultado = mysqli_num_rows($resultado_usuario);

  if($numero_resultado == 1){
    $vetor_user = mysqli_fetch_array($resultado_usuario);
    ?>
    <script>
      alert("Aqui funciona");
    </script>
  <?php

  session_start();

      $_SESSION['nome'] = $vetor_user[4];
      $_SESSION['email'] = $vetor_user[3];
      $_SESSION['verif_admin'] = $vetor_user[2];
  ?>
      <script>
        alert("Login com sucesso!");
        window.location.replace("../index/index.php");
      </script>
  <?php
  }else{
    ?>
    <script>
      alert("Senha ou usuário incorretos...");
    </script>
    <?php
  }
  mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Login - Pai & Filhos</title>
</head>

<body>
  <div id="back">
    <div class="backRight"></div>
    <div class="backLeft"></div>
  </div>

  <div id="slideBox">
    <div class="topLayer">
      <div class="left">
      <div class="go-back" id="home" style=" height: 30px; width: 70px;">
            <a href="../index/index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                <path style="fill:#fff" d="M24 12.001H2.914l5.294-5.295-.707-.707L1 12.501l6.5 6.5.707-.707-5.293-5.293H24v-1z" data-name="Left" />
              </svg>
            </a>
          </div>
        <div class="content">
          <h2>Cadastrar</h2>
          <form action="" method="POST">
            <div class="form-outline mb-4">
              <input type="text" name="n_nome" placeholder="Nome" required>
            </div>
            <div class="form-outline mb-4">
              <input type="email" name="n_email" placeholder="Email" required>
            </div>
            <div class="form-outline mb-4">
              <input type="text" name="n_cpf" placeholder="CPF" onkeypress="$(this).mask('000.000.000-00');" maxlength="15" required>
            </div>
            <div class="form-outline mb-4">
              <input type="text" name="n_tel" placeholder="Telefone" onkeypress="$(this).mask('(00) 00000-0000');" maxlength="15" required>
            </div>
            <div class="form-outline mb-4">
              <input type="password" oninput="check_senha()" name="n_senha" id="n_senha" placeholder="Senha" minlength=8 required>
            </div>
            <div class="form-outline mb-4">
              <input type="password" oninput="check_senha()" id="n_rep_senha" placeholder="Confirme a Senha" minlength=8 required>
            </div>
            <a id="goLeft" class="off" style="cursor: default;">Login</a>
            <button type="submit" id="confirm_button" class="btn btn-primary btn-block mb-4" disabled>Cadastrar</button>
          </form>
        </div>
      </div>
      <div class="right">
      <div class="go-back" id="home" style=" height: 30px; width: 70px;">
            <a href="../index/index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                <path style="fill:#333" d="M24 12.001H2.914l5.294-5.295-.707-.707L1 12.501l6.5 6.5.707-.707-5.293-5.293H24v-1z" data-name="Left" />
              </svg>
            </a>
          </div>
        <div class="content2">
          <br>
          <h2>Login</h2>
          <form action="" method="POST">
            <div class="form-outline mb-4">
              <input type="email" name="c_email" placeholder="Email" required>
            </div>
            <div class="form-outline mb-4">
              <input type="password" name="c_senha" placeholder="Senha" required>
            </div>
            <a id="goRight" class="off" style="cursor: default;">Cadastrar</a>
            <button type="submit" style="cursor: pointer;" class="btn btn-primary btn-block mb-4">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="./js/script.js" text="text/javascript"></script>
</body>

</html>