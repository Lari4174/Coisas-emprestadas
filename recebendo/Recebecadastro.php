<?php
    $conn = mysqli_connect("localhost", "root", "","primeiro");
    if ($conn == false){
        die ("ERRO: não conseguiu conectar ao MySQL " . mysqli_connect_error());
    }
    $nome = $_POST['nome'];
    $email = $_POST['e-mail'];
    $senha = $_POST['pass'];
    $contato = $_POST['contato'];

    $sql = "INSERT INTO cadastros (nome, email, contato, senha) 
    VALUES ('$nome', '$email', $contato, '$senha')";
    $res = mysqli_query($conn , $sql);

    if($res){
        echo"sucesso";
        header("Location: ../parte_frontal/login.php?certo=1");
    }else{
        echo"não foi cadastrado";
    };
    /*
    echo "nome: " . $_POST["nome"] . "</br>";
    echo "pass: " . $_POST['pass'] . "</br>";
    echo "cidade: " . $_POST['cidade'] . "</br>";
    */
?>
