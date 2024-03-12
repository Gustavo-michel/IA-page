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
</head>
<header>
    <h1>Cadastro</h1>
</header>
    <nav class="cadNav">
            <ul>
                <li><a href="home.html">inicio</a></li>
                <li><a href="historia.html">historia da IA</a></li>
                <li><a href="machineLearning.html">machine Learning</a></li>
                <li><a href="deepLearning.html">Deep Learning</a></li>
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

            <!-- <span class="error"><?php error_reporting(E_ERROR | E_PARSE); echo $msg; ?></span><br> -->

            <input type="submit" class="submit" name="submit" value="Cadastrar">
        </form>
        <p>Não tem conta?<a href="login.php"> Voltar para o Login</a>
    </div>
    </div>
</body>

</html>