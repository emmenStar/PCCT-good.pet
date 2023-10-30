<?php
//if (isset($_POST['submit'])) {
//print('<br>');
//print_r($_POST['nome']);
//print_r($_POST['email']);
//print_r($_POST['senha']);
//}

include_once('config.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
?>



<!DOCTYPE html>
<html lang="pt - br">

<head>
  <meta charset="=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" contaent="IE=edge">
  <meta name="viewport" content="whidth=device-whidth, initial-scale=1.0">
  <title>CADASTRO</title>
  <link rel="stylesheet" href="css/cadastro.css">


<body>
  <div class="box">
    <div class="img-box">
      <img src="src/fundo.png" alt="">
    </div>
    <div class="form-box">
      <h2> CRIE SUA CONTA!</h2>
      <p> já é um membro? <a href="Tela de login.html">LOGIN</a></p>
      <form action="">
        <div class="input-group">
          <label for="nome"> nome completo</label>
          <input type="text" id="nome" placeholder="digite seu nome completo" required>
        </div>

        <div class="input-group">
          <label for="Email"> E-mail </label>
          <input type="text" id="E-mail" placeholder="digite o seu E-mail" required>
        </div>

        <div class="input-group w50">
          <label for="senha"> senha </label>
          <input type="password" id="senha" placeholder="digite sua senha" required>
        </div>

        <div class="input-group w50">
          <label for="Confirmarsenha"> Confirmar senha </label>
          <input type="password" id="Confirmarsenha" placeholder="confirme senha" required>
        </div>

        <div class="input-group">
          <button>CADASTRAR</button>

        </div>

      </form>

    </div>
  </div>


</body>