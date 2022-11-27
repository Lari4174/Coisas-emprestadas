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
    <?php require"../requires/nav_itens.php"?>
    <div id="corpo">
        <section class="Lemprestimo">
            <form action="../recebendo/recebeitem.php" method="post" name="itens" class="formu">
                <input type="hidden" value="<?php echo $_SESSION['nome']?>" name="dono">
                <input type="hidden" value="<?php echo $_SESSION['id'];?>" name="id_user"></br>

                <label for="nome">Nome do produto</label>
                <input type="text" name="nome" id="nome" required class="entrada"></br>

                <label for="data_aco">Data para acordo</label>
                <input type="date" name="data_aco" id ="data_aco" required class="entrada"></br>

                <label for="data_dev">Data de devolução do item</label>
                <input type="date" name="data_dev" id="data_dev" required class="entrada"></br>

                <input type="submit" value="enviar">
            </form>
        </section>
    </div>
</body>
</html>