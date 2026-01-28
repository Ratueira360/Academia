<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$CPF = $_POST['CPF'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$SQL = "INSERT into usuario(nome, email, senha, telefone, cpf)
values ('$nome', '$email', '$senha', '$telefone', '$cpf')";

mysqli_query($conexao, $sql);
echo "Cadastro realizado com sucesso";
echo "<br><ahref=\"index.php\">voltar</a>";
?>