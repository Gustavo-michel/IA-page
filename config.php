<?php
    $dbhost = 'localhost';
    $dbusername = 'root';
    $dbPassword = '';
    $dbName = 'cadastro';

    $conexao = new mysqli($dbhost,$dbusername,$dbPassword,$dbName);

    if($conexao->connect_errno){
        echo "erro no servidor ";
    }else{
        echo "Conexão efetuada com sucesso \n";
    }

?>