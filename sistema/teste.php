<?php
require"../requires/autentica.php";
require "../requires/PF_head.php";
?>
<body>
    <header>
        <h1 class="titulo">Coisas emprestadas</h1>
    </header>
    <?php
    require "../requires/nav_sistema.php"
    ?>
    <div id="corpo">
        <section class="login">
            <h2 style="text-align: center;">Cadastro</h2>
            <table>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Cidade</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <?php
                    require "../requires/conecta.php"

                    $sql = "SELECT id, nome, cidade FROM cadastros";
                    $query = mysqli_query($conn, $sql);

                    while ($i = mysqli_fetch_assoc($query)){
                    echo"
                        <tr>
                        <td>". $i['id'] ."</td>
                        <td>". $i['nome'] ."</td>
                        <td>". $i['cidade'] ."</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>";  
                    }

//56,49 min de vídeo 
                ?>
            </table>
        </section>
    </div>
</body>
</html>
