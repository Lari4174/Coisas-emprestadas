<?php
require "../requires/PF_head.php";
?>
<body>
    <header>
        <h1 class="titulo">Coisas emprestadas</h1>
    </header>
    <?php
    include "../requires/nav_frontal.php";
    ?>
    <div id="corpo">
        <section class="login">
            <h2 style="text-align: center;">Cadastro</h2>
            <form action= "../recebendo/Recebecadastro.php" method="post" class="formu">
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