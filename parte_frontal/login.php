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
            <h2 style="text-align: center;">Login</h2>
            <form action="../recebendo/Recebelogin.php" method="post" class="formu" name="login">
                
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