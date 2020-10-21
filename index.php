<?php
    session_start();

    if($_SESSION['preenchido']){

        echo '<strong>Seja bem vindo</strong> '.$_SESSION['preenchido'].' <a href="login.php">Sair</a>';
         return;
    }
    else
    {
        header("Location:login.php");
        exit;
    }
?>


