<?php

$localhost="localhost";
$user="root";
$senha="";
$db="academia";

$conexao=mysqli_connect($localhost,$user,$senha,$db);
if (!$conexao){
    die("falha de conexao:" .mysqli_connect_errno());
}
?>