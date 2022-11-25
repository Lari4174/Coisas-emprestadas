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
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="#">Fale conosco</a></li>
        </ul>
    </nav>
    <div id="corpo">
        <section class="login">
            <h2 style="text-align: center;">Fale conosco</h2>
            <form action="teste.html" type="post" class="formu">
                <label>Digite seu nome</label>
                <input type="text" required class="entrada">
                
                <label>Seu e-mail</label>
                <input type="email" required class="entrada">
                
                <label>Digite sua mensagem</label>
                <textarea required class="entrada"></textarea>
                
                <button type="submit">Enviar</button>
            </form>
        </section>
    </div>
</body>
</html>