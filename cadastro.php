<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background: linear-gradient(135deg,black,#0b2e1a,#00ff6a);
            min-height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>CADASTRO</h1>
    <form action="cadastrar.php" method="post">
        <Label>NOME</Label>
        <input type="text" name="nome">
        <label>Email</label>
        <input type="email" name="email">
        <label>Senha</label>
        <input type="password" name="senha"> 
        <label>Telefone</label>
        <input type="text" name="telefone">
        <label>CPF</label>
        <input type="text" name="cpf">
        <button>Cadastrar</button>
    </form>
    </div>
</body>
</html>