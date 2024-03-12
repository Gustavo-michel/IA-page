<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles/styles_form.css">
</head>
<header>
    <h1></h1>
</header>
<nav  class="cadNav">
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
        <h1>Login</h1>
        <form action="configLogin.php" method="post">
            <label for="Email">Email:</label>
            <input type="email" name="email" placeholder="E-mail" autofocus="true" required><br><br>


            <label for="password">Senha:</label>
            <input type="password" name="senha" placeholder="password"  required><br>
            <!-- <a href="esqueceu_senha.php">Esqueceu a senha?</a></p> -->

            <input type="submit" name="submit" value="Entrar">
        </form>
        <p>Não tem uma conta?<a href="cadastro.php"> Cadastre-se</a>
    </div>
</body>
</html>