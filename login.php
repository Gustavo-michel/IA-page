<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
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

            /* background-color: #1a4344b7;
    padding: 5px;
    border-radius: 10px; */
        }
    </style>
</head>
<header>
    <h1>Login</h1>
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
        <h1>Login</h1>
        <form action="configLogin.php" method="post">
            <label for="Email">Email:</label>
            <input type="email" name="email" placeholder="E-mail" autofocus="true" required><br><br>


            <label for="password">Senha:</label>
            <input type="password" name="senha" placeholder="password" required><br>
            <!-- <a href="esqueceu_senha.php">Esqueceu a senha?</a></p> -->

            <input type="submit" name="submit" value="Entrar">
        </form>
        <p>Não tem uma conta?<a href="cadastro.php"> Cadastre-se</a>
    </div>
</body>

</html>