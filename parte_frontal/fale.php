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