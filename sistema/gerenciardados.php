<?php
require"../requires/autentica.php";
require "../requires/PF_head.php";
?><!--head-->
<body>
    <header>
        <h1 class="titulo">Coisas emprestadas</h1>
        <!--título da página-->
    </header>

    <?php require"../requires/nav_sistema.php"?> <!--menu navegação-->
    
    <div id="corpo">
        <section class="texto_ger">
            <form action="../recebendo/alteracadastro.php" method="post">
                
            <label for="novo_usuario">Nome</label>
                <input id="novo_usuario" name="usuario" required type="text" value="<?php echo $_SESSION['nome']?>">

                
                <label for="contato_novo">Contato</label>
                <input id="contato_novo" name="contato" required type="number" value="<?php echo $_SESSION['contato']?>">

                
                <label for="senha_normal">Senha</label>
                <input id="senha_normal" name="senha" type="password" required>

                <button type="submit" value="enviar">envair</button>
                <?php?>

            </form>
        </section>
        
    </div>
</body>
</html>