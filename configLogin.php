<?php
    session_start();
    //print_r($_REQUEST);
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        // Acessar sistema
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: '. $email);
        // print_r('<br>');-=
        // print_r('Senha: '. $senha);lk
        $sql = "SELECT * FROM usuario WHERE email='$email' and senha='$senha'";
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result)<1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }else {
            $_SESSION['email']= $email;
            $_SESSION['senha']= $senha;
            header('Location: sistema.php');
        }

    } else {
        // Não acessar
        header('Location: login.php');
    }
?>