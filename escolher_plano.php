<?php
include("conexao.php");

$plano = $_POST['plano'];

$email = "teste@email.com";

$sql = "INSERT into plano_usuario(email,plano)
values('$email','$plano')";

if(mysqli_query($conexao,$sql)){
    header("Location: menu.html");
    exit;
}else{
    echo "Error ao escolher plano";
}
