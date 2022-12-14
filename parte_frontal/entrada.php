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
        <section class="projeto">
            <h1 style="margin-left: 1em;">Site projeto para gerenciamento de empréstimos pessoais</h1>
            <h4>Contamos com os seguintes serviços:</h4>
            <ul>
                <li>Realizar o cadastro dos usuários e dos itens.</li>
                <li>Realizar o login do usuário.</li>
                <li>Permitir ao usuário acessar/configurar seus dados, que ficam salvos.</li>
                <li>Realizar o cadastro do item emprestado, data e contato do destinatário.</li>
                <li>Data de devolução combinada.</li>
                <li>Na tela inicial, mostrar lista dos itens emprestados e permitir clicar em botão para cadastrar um novo empréstimo.</li>
                <li>Após a data combinada, o item deve ficar destacado na lista de empréstimo; se não houver data determinada, deve-se destacar também.</li>
                <li>Quando algo for devolvido, deve ser marcado no sistema, que irá salvar a data.</li>
                <li>Gerar relatórios de itens emprestados pendentes.</li>
            </ul>
        </section>
    </div>
</body>
</html>