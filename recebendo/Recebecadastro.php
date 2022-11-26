<?php
    $conn = mysqli_connect("localhost", "root", "","primeiro");
    if ($conn == false){
        die ("ERRO: não conseguiu conectar ao MySQL " . mysqli_connect_error());
    }
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $senha = $_POST['pass'];

    $sql = "INSERT INTO cadastros (nome, cidade, senha) 
    VALUES ('$nome', '$cidade', '$senha')";
    $res = mysqli_query($conn , $sql);

    if($res){
        echo"sucesso";
        header("Location: ../sistema/teste.php");
    }else{
        echo"não foi cadastrado";
    };
    /*
    echo "nome: " . $_POST["nome"] . "</br>";
    echo "pass: " . $_POST['pass'] . "</br>";
    echo "cidade: " . $_POST['cidade'] . "</br>";
    */
?>
