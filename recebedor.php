<?php 
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if($nome){
    header("Location:index.php");
    $_SESSION['preenchido'] = $nome;
}
else
{
    $_SESSION['erro'] = 'Digite um nome para entrar';
    header("Location:login.php");
}