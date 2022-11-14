<!DOCTYPE html>
<html lang="pt">
<head>
    <?php
        $usuario = $_GET["usuario"];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coisas emprestadas</title>
    <link href="css.css" rel="stylesheet" type="text/css">
    <link href="teste.css" rel="stylesheet" type="text/css">
    <!--por algum motivo está dando erro no css e ele não integra a página, criado outro arquivo-->
</head>
<body>
    <header>
        <h1 class="titulo">Coisas emprestadas</h1>
        <!--título da página-->
    </header>
    <nav>
        <ul>
           <li><a href="#">Principal</a></li>
           <li><a href="#">Gerar relatório de itens pendentes</a></li>
           <li><a href="gerenciardados.php">Gerenciar dados</a></li>
            <li><a href="entrada.html">Logoff</a></li>       
            <!--menu de navegação, a parte de formatação está no css-->
        </ul>
    </nav>
    <div id="corpo">
        <!--ver se é realmente necessário ter estas divs-->
        <div id="emprestimo">
            <div class="usuario">
                <?php
                    echo "<h2>Olá $usuario</h2>";
                ?>
                <!--ver como fazer com banco de dados essa parte-->
            </div>
            <section class="Lemprestimo">
                <h2 class="Etitulo">Emprestados</h2>
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
                        <tr>
                            <td>asdfasfasdfasfasdfaasdfasfasfafafasdasfsasfasdfasfasdfasdfasfasf</td>
                            <td>it. teste</td>
                            <td>it. teste</td>
                            <td>teste</td>
                        </tr>
                    </tbody>
                        <!--(comando for)pode ser usado um algorítimo definido como for para faazer a formatação dos dados pelo banco de dados-->
                </table>
                    <!--quando for dado baixa marcar no sistmea e gerar relatório de itens. Tudo isso dentro de uma tabela com lista talvez-->
                    <!--criar uma parte de css destacando os que já passaram da data de validade de empréstimo, e os que ainda estão aceitáveis. (if com php)-->
                <button class="Bemprestimo">Cadastrar novo</button>
            </section>
            <section class="Lemprestimo">
            <h2 class="Etitulo">Emprestados</h2>
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
                        <tr>
                            <td>asdfasfasdfasfasdfaasdfasfasfafafasdasfsasfasdfasfasdfasdfasfasf</td>
                            <td>it. teste</td>
                            <td>it. teste</td>
                            <td>teste</td>
                        </tr>
                    </tbody>
                        <!--(comando for)pode ser usado um algorítimo definido como for para faazer a formatação dos dados pelo banco de dados-->
                </table>
                    <!--quando for dado baixa marcar no sistmea e gerar relatório de itens. Tudo isso dentro de uma tabela com lista talvez-->
                    <!--criar uma parte de css destacando os que já passaram da data de validade de empréstimo, e os que ainda estão aceitáveis. (if com php)-->
                <button class="Bemprestimo">Cadastrar novo</button>
            </section>
            <!--para cada item terá um botão ao lado direito para gerenciar o item que foi imprestado, numa página padrão com as informações inseridas-->
        </div>
    </div>
</body>
</html>