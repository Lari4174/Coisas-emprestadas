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
                <label for="nome">Qual o seu nome?</label>
                <input type="text" required class="entrada" name="nome" id="nome">

                <label for="e-mail">Digite seu e-mail</label>
                <input type="email" required class="entrada" name="e-mail" id="e-mail">

                <label for="contato">Digite um contato</label>
                <input type="email" required class="entrada" name="contato" id="contato">
                
                <label for="pass">Digite uma senha</label>
                <input type="password" required class="entrada" name="pass" id="pass">

                <button type="submit">Enviar</button>
            </form>
        </section>
    </div>
</body>
</html>