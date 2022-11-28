<?php
require"../requires/autentica.php";
require "../requires/PF_head.php";
?><!--head-->
<body>
    <header>
        <h1 class="titulo">Coisas emprestadas</h1>
        <h3 class="titulo"><?php echo "olá ". $_SESSION['nome'];?></h3>
        <?php
        if(isset($_GET['altera'])){
            echo"<h5 class='titulo' style='color: green; margin-top:10px;'>Aleração de cadastro com sucesso</h5>";
        }
        if(isset($_GET['devolvido'])){
            echo"<h5 class='titulo' style='color: green; margin-top:10px;'>Devolvido com sucesso!!</h5>";
        }
        ?>
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
                        <td>De quem emprestou</td>
                        <td>Data do acordo</td>
                        <td>Data de devolução</td>
                        <td>Contato</td>
                        <td>Devolver</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require"../requires/conecta.php";
                        $iduser = $_SESSION['id'];
                        $slq = "SELECT id, nome, data_aco, dono, data_dev, contato, identificador, emprestador FROM itens WHERE id_emprestador ='$iduser' AND identificador = 1";
                        $query = mysqli_query($conn, $slq);
                        while($i = mysqli_fetch_assoc($query)){
                        echo "
                        <tr>
                            <td>".$i ['nome']."</td>
                            <td>".$i ['dono']."</td>
                            <td>".$i ['data_aco']."</td>
                            <td>".$i ['data_dev']."</td>
                            <td>contato</td>
                        
                            <form action='../recebendo/recebe_devolucao.php' method='post'>
                            <input type='hidden' name='id_item' value = ". $i['id'] .">
                            <td><button type='submit' name='devolvido' value='1'>clique para devolver</button></td>
                            </form>
                        </tr>";
                        }
                    ?>
                </tbody>
                <tbody>

                </tbody>
            </table>
        </section>
        <section class="Lemprestimo">
            <h2 class="Etitulo">Emprestados</h2>
            <table class="tabela_emprestimo">
                <thead>
                    <tr>
                        <td>emprestador</td>
                        <td>nome item</td> 
                        <td>Data de de acordo</td>
                        <td>data de devolução</td>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $id_user = $_SESSION['id'];
                        require"../requires/conecta.php";
                        $sql = "SELECT * FROM itens WHERE id_user = '$id_user'";
                        $foi = mysqli_query($conn, $sql);
                        while ($i = mysqli_fetch_assoc($foi)){
                        if ($i['identificador'] ==  1){
                            echo"
                            <tr>    
                                <td>". $i['emprestador'] ."</td>
                                <td>". $i['nome'] ."</td>
                                <td>". $i['data_aco'] ."</td>
                                <td>". $i['data_dev'] ."</td>
                            </tr>";
                            }}
                        
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>