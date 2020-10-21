<?php

session_start();

 if($_SESSION['erro']){
     echo $_SESSION['erro'];
     $_SESSION['erro'] = '';
 }
?>

<h1>Qual é o seu nome?</h1>

<form method="POST", action="recebedor.php">

    <input type="text" name="nome"><br/>
    <input type="submit" value="Enviar"/>

</from>