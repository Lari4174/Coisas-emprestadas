<?php
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
                <!--vai pegar essa parte em quesito de quem está acessando o sistema-->
                <label for="id_user">Id usuário</label>
                <input type="text" name="id_user" id="id_user" required class="entrada"></br>

                <label for="nome">Nome do produto</label>
                <input type="text" name="nome" id="nome" required class="entrada"></br>

                <label for="data_aco">Data para acordo</label>
                <input type="date" name="data_aco" id ="data_aco" required class="entrada"></br>

                <label for="data_dev">Data de devolução do item</label>
                <input type="date" name="data_dev" id="data_dev" required class="entrada"></br>

                <label for="contato">Deixe seu contato</label>
                <input type="number" name="contato" id="contato" required class="entrada"></br>
                
                <input type="hidden" name="verificador" value="0">

                <input type="submit" value="enviar">
            </form>
        </section>
    </div>
</body>
</html>