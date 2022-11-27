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
        <section class="Lemprestimo" style="width: auto; max-width: 70%">
            <table class="table_listaitens">
                <tr>
                    <td class="td_listaitens">dono</td>
                    <td class="td_listaitens">nome</td>
                    <td class="td_listaitens">data de acordo</td>
                    <td class="td_listaitens">data de devolução</td>
                    <td class="td_listaitens">contato</td>
                    <td class="td_listaitens">Clique para emprestar</td>
                <tr>
                <?php
                    require"../requires/conecta.php";
                    $sql = "SELECT id, id_user, dono, emprestador, nome, data_aco, data_dev, contato FROM itens";
                    $query = mysqli_query($conn, $sql);
                    echo"<h2>Lista de coisas para emprestar<h2>";
                    while ($i = mysqli_fetch_assoc($query)){
                        if(empty($i['emprestador'])){
                        echo"
                        <form action='../recebendo/recebe_emprestimo.php' method='post'>
                        <tr>
                            <td class='td_listaitens'>". $i['dono']. "</td>
                            <td class='td_listaitens'>". $i['nome'] ."</td>
                            <td class='td_listaitens'>". $i['data_aco'] ."</td>
                            <td class='td_listaitens'>". $i['data_dev'] ."</td>
                            <td class='td_listaitens'>". $i['contato'] ."</td>
                            <input type='hidden' name='id_item' value='".$i['id']."'>
                            <td class='td_listaitens'><button type='submit'>emprestar</button></td>
                        </tr>
                        </form>"; //aqui ainda precisa ter a verificação de qual é o usuário no campo hidden  
                        }
                    }
                ?>
            </table>
        </section>
    </div>
</body>
</html>