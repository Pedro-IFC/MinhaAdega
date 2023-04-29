<?php 
    include_once "auto.php";
    if($_GET['acao']=="logar"){
        unset($_SESSION['usuario']);
        $administrador = new administrador($_GET['email'], $_GET['senha'], $conn);
        if($administrador->login()){
            header('Location: ../administrador/');
        }
        echo $_SESSION['mensagem'];
    }
?>