<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coisas emprestadas</title>
    <link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <h1 class="titulo">Coisas emprestadas</h1>
    </header>
    <nav>
        <ul>
           <li><a href="entrada.php">Home</a></li>
           <li><a href="#">Login</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="fale.php">Fale conosco</a></li>
        </ul>
    </nav>
    <div id="corpo">
        <section class="login">
            <h2 style="text-align: center;">Login</h2>
            <form action="Recebelogin.php" method="post" class="formu" name="login">
                
                <label for="Ilogin">Login</label>
                <input type="text" required class="entrada" name="usuario">
                
                <label>Senha</label>
                <input type="password" required class="entrada" name="senha">
                
                <button type="submit">Enviar</button>
            </form>
        </section>
    </div>
</body>
</html>