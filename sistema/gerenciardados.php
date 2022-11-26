<?php
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