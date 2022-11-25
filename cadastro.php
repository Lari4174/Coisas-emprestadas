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
           <li><a href="login.php">Login</a></li>
            <li><a href="#">Cadastro</a></li>
            <li><a href="fale.php">Fale conosco</a></li>
        </ul>
    </nav>
    <div id="corpo">
        <section class="login">
            <h2 style="text-align: center;">Cadastro</h2>
            <form action="Recebecadastro.php" method="post" class="formu">
                <label>Qual o seu nome?</label>
                <input type="text" required class="entrada" name="nome">

                <label>Digite sua cidade</label>
                <input type="text" required class="entrada" name="cidade">
                
                <label>Digite uma senha</label>
                <input type="password" required class="entrada" name="pass">
                
                <label>Confirme sua senha</label>
                <input type="password" required class="entrada">
                
                <button type="submit">Enviar</button>
            </form>
        </section>
    </div>
</body>
</html>