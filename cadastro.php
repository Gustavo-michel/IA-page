<?php
if (isset($_POST['submit'])) {
    include_once('config.php');
    $nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $verifyPassword = $_POST['verifyPassword'];

    $msg = "";
    if ($senha !== $verifyPassword) {
        $msg = " As senhas não coincidem. Por favor, insira senhas iguais nos dois campos.";
    } else {
        $result = mysqli_query($conexao, "INSERT INTO usuario (nome, email, telefone, senha, verifyPassword) VALUES ('$nome', '$email', '$telefone', '$senha', '$verifyPassword') ");
        $msg = " Seu cadastro foi efetuado com sucesso. ";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles/styles_form.css">
    <style>
        body {
            font-family: 'roboto', sans-serif;
            background-color: #065c85;
            margin: 0;
            padding: 0;
            background-image: url('https://wwws.alfafinanciamentos.com.br/Portal/imagens/default/fundo_login.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 105% auto;
            animation: gradientAnimation 10s infinite linear;
        }

        header {
            background-color: #21698aab;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }

        nav {
        background-color: #21698aab;
        padding: 8px;
        background-image: linear-gradient(to bottom, #21698a, #3b85a783);
        text-align: left;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 0px;
            padding: 0px 15px;
            border-right: 1px solid #293c4f;
        }

        nav ul li:last-child {
            border-right: none;
        }

        nav ul li a {
            text-decoration: none;
            color: #ffffff;
            padding: 15px 10px;
            border-radius: 10px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #cdfdff;
        }


        .container {
            width: 360px;
            margin: 100px auto;
            background: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .container label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        .container span[class='error'] {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: rgb(173, 11, 11);
        }

        .container span[class='right'] {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: rgb(16, 173, 11);
        }

        .container input[type="text"],
        .container input[type="password"],
        .container input[type="Email"],
        .container input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .container input[type="submit"] {
            width: 100%;
            background-color: #000000;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .container input[type="submit"]:hover {
            background-color: #2d312e;
        }

        .container .signup {
            text-align: center;
        }

        .container .signup a {
            color: #007bff;
            text-decoration: none;
        }

        .container .signup a:hover {
            text-decoration: underline;
        }

        p {
            text-align: justify;
            font-size: 15px;
            font-weight: 600;
            color: #000000;
            padding: 0px;
            margin: 50px;
        }
    </style>
</head>
<header>
    <h1>Cadastro</h1>
</header>
<nav class="cadNav">
    <ul>
        <li><a href="home.html">inicio</a></li>

        <li><a href="cadastro.php">cadastro</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</nav>

<body>
    <div class="container">
        <h1>Cadastro</h1>
        <form action="cadastro.php" method="post">
            <label for="Nome">Nome:</label>
            <input type="text" id="Nome" name="Nome" placeholder="Nome" required><br><br>

            <label for="Email">Email:</label>
            <input type="email" id="Email" name="Email" placeholder="Email" required><br><br>

            <label for="telefone">telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="telefone" required><br><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="senha"><br><br>

            <label for="verifyPassword">Confirme sua senha:</label>
            <input type="password" id="verifyPassword" name="verifyPassword" placeholder="Confirmar senha" required><br><br>

            <!-- <span class="error"><?php error_reporting(E_ERROR | E_PARSE);
                                        echo $msg; ?></span><br> -->

            <input type="submit" class="submit" name="submit" value="Cadastrar">
        </form>
        <p>Não tem conta?<a href="login.php"> Voltar para o Login</a>
    </div>
    </div>
</body>

</html>