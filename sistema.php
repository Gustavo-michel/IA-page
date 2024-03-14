<?php
session_start();

if ((!isset($_SESSION['email']) == True) and (!isset($_SESSION['senha']) == True)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
} else {
    $logado = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/sistema.css">
</head>

<body>
    <header>
        <h1>conta</h1>
    </header>
    <nav>
        <ul>
            <li><a href="home.html">Página Inicial</a></li>
            <li><a href="#news">Minha conta</a></li>
            <li><a href="#contact">Atendimento</a></li>
            <li><a style="float:right" href="sair.php">Sair</a></li>
        </ul>
    </nav>
    <div style="padding: 20px;">
        <div class="content">
            <?php
            echo "<h2>Seja bem vindo ao sistema <br> $logado </h2>"
            ?>
        </div>
    </div>
</body>

</html>