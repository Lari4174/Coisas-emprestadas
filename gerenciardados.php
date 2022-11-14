<!DOCTYPE html>
<html lang="pt">
<head>
    <?php
        $usuario = $_GET["usuario"];
        $senha = $_GET["senha"];
        //ver como fazer a parte de pegar esses dados do banco de dados
    ?>
    <!--essa parte precisa pegar com banco de dados já que não tem linkagem que faça compartilhamento de variáveis de php-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coisas emprestadas</title>
    <link href="css.css" rel="stylesheet" type="text/css">
    <link href="teste.css" rel="stylesheet" type="text/css">
    <!--por algum motivo está dando erro no css e ele não integra a página, criado outro arquivo-->
</head>
<body>
    <header>
        <h1 class="titulo">Coisas emprestadas</h1>
        <!--título da página-->
    </header>
    <nav>
        <ul>
           <li><a href="principal.php">Principal</a></li>
           <li><a href="#">Gerar relatório de itens pendentes</a></li>
           <li><a href="#">Gerenciar dados</a></li>
            <li><a href="entrada.html">Logoff</a></li>       
            <!--menu de navegação, a parte de formatação está no css-->
        </ul>
    </nav>
    <div id="corpo">
        <section class="texto_ger">
            <form action="#" type="post">
                <label for="usuario_ger">Nome de usuário atual</label>
                <input id="usuario_ger" name="usuario_normal" required type="text">
                <!--ver a classe do input-->
                <label for="usuarion_ger">Nome novo do usuário</label>
                <input id="usuarion_ger" name="usuario_novo" required type="text">
                <!--pular uma linha a mais-->
                <label for="senha_ger">Senha atual</label>
                <input id="senha_ger" name="senha_normal" type="password" required>
                <label for="senhan_ger">Nova senha</label>
                <input id="senhan_ger" name="senha" type="password" required>
                <button type="submit" value="enviar">envair</button>
                <?php?>
                <!--alterar nome de usuário e senha.-->
            </form>
        </section>
        
    </div>
</body>
</html>