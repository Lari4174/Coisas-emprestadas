<?php
require "../requires/PF_head.php";
?><!--head-->
<body>
    <header>
        <h1 class="titulo">Coisas emprestadas</h1>
    </header>

    <?php require"../requires/nav_sistema.php"?> <!--menu navegação-->
    <?php require"../requires/nav_itens.php"?>

    <div id="corpo">
        <!--ver se é realmente necessário ter estas divs-->
        <div id="emprestimo">
        <section class="Lemprestimo">
            <h2 class="Etitulo">Empréstimos</h2>
            <table class="tabela_emprestimo">
                <thead>
                    <tr>
                        <td>Item</td>
                        <td>Data de devolução</td>
                        <td>Data do acordo</td>
                        <td>Contato</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $id_usuario = 4;
                        //pegar o id do usuário para fazer essa parte
                        require"../requires/conecta.php";
                        $sql = "SELECT * FROM itens WHERE id_user = $id_usuario";
                        $foi = mysqli_query($conn, $sql);
                        while ($i = mysqli_fetch_assoc($foi)){
                        echo"
                        <tr>    
                            <td>". $i['nome'] ."</td>
                            <td>". $i['data_dev'] ."</td>
                            <td>". $i['data_aco'] ."</td>
                            <td>". $i['contato'] ."</td> 
                        </tr>";}
                    ?>
                </tbody>
            </table>
        </section>
        <section class="Lemprestimo">
            <h2 class="Etitulo">Emprestados</h2>
            <table class="tabela_emprestimo">
                <thead>
                    <tr>
                        <td>nome</td>
                        <td>Data de devolução</td> 
                        <td>nome de quem emprestou</td>
                        <td>Contato</td>
                        
                    </tr>
                </thead>
            </table>
        </section>
    </div>
</body>
</html>