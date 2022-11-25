<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coisas emprestadas</title>
    <link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <h1 class="titulo">Coisas emprestadas</h1>
    </header>
    <nav>
        <ul>
           <li><a href="entrada.php">Home</a></li>
           <li><a href="login.php">Login</a></li>
            <li><a href="#">Cadastro</a></li>
            <li><a href="fale.php">Fale conosco</a></li>
        </ul>
    </nav>
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
                    $conn = mysqli_connect("localhost", "root", "","primeiro");
                    if ($conn == false){
                        die ("ERRO: não conseguiu conectar ao MySQL " . mysqli_connect_error());
                    }
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
