<?php
    require "../requires/conecta.php";
    session_start();
    $nome = $_SESSION['nome'];
    $id_item = $_POST['id_item'];
    $id_emprestador = $_SESSION['id'];
    $sql = "UPDATE itens SET identificador = 1, emprestador = '$nome', id_emprestador = '$id_emprestador' WHERE id = $id_item";
    $vai = mysqli_query($conn, $sql);
    if ($vai){
        header("location: ../sistema/principal.php");
    }else{
        echo"erro";
    }

?>