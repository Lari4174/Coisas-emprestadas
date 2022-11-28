<?php
require"../requires/autentica.php";
require "../requires/PF_head.php";
?><!--head-->
<body>
    <header>
        <h1 class="titulo">Coisas emprestadas</h1>
        <?php
        if (isset($_GET['exclui'])){
            echo "<h5 class='titulo' style='color:green;'>Excluido com sucesso</h5>";
        }
        ?>
        <!--título da página-->
    </header>
    <?php require"../requires/nav_sistema.php"?> <!--menu navegação-->
    <?php require"../requires/nav_itens.php"?>
    
    <div id="corpo">
        <section class="Lemprestimo" style="width: auto; max-width: 70%">
            <table class="table_listaitens">
                <thead>
                    <tr>
                        <td class="td_listaitens">nome</td>
                        <td class="td_listaitens">Emprestador</td>
                        <td class="td_listaitens">data de acordo</td>
                        <td class="td_listaitens">data de devolução</td>
                        <td class="td_listaitens">Clique para excluir</td>
                    <tr>
                </thead>
                <tbody>
                    <?php
                    require"../requires/conecta.php";
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM itens WHERE id_user=$id";
                    $query = mysqli_query($conn,$sql);
                    while($i = mysqli_fetch_assoc($query)){
                        echo"
                        <tr>    
                        <td class='td_listaitens'>".$i ['nome']."</td>
                        <td class='td_listaitens'>".$i ['emprestador']."</td>
                        <td class='td_listaitens'>".$i ['data_aco']."</td>
                        <td class='td_listaitens'>".$i ['data_dev']."</td>
                        ";
                        if(empty($i['emprestador'])){
                            
                            echo"
                            <form action='exclui.php' method='POST'>
                            <td class='td_listaitens'><button type='submit' name='id_item' value='".$i['id']."'>excluir</button></td>
                            </form>";
                        }else{
                            echo "<td class='td_listaitens'>tem alguem com isso</td>";
                        }
                        echo "</tr>";
                    
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</html>