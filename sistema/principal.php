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
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require"../requires/conecta.php";
                        $iduser = $_SESSION['id'];
                        $slq = "SELECT nome, data_aco, dono, data_dev, contato, identificador, emprestador FROM itens WHERE id_emprestador ='$iduser' AND identificador = 1";
                        $query = mysqli_query($conn, $slq);
                        while($i = mysqli_fetch_assoc($query)){
                        echo "
                        <tr>
                            <td>".$i ['nome']."</td>
                            <td>".$i ['dono']."</td>
                            <td>".$i ['data_aco']."</td>
                            <td>".$i ['data_dev']."</td>
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
                            echo"
                            <tr>    
                                <td>". $i['emprestador'] ."</td>
                                <td>". $i['nome'] ."</td>
                                <td>". $i['data_aco'] ."</td>
                                <td>". $i['data_dev'] ."</td>
                            </tr>";
                            }
                        
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>