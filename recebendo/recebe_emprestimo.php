<?php
    require "../requires/conecta.php";
    $verificando = $_POST['verificando'];
    $id_item = $_POST['id_item'];
    $usuario_emprestando = $_POST['usuario_emprestando'];
    
    $sql = "UPDATE itens SET 
    verificador = $verificando,
    id_user = $usuario_emprestando WHERE 
    id = $id_item";
    $vai = mysqli_query($conn, $sql);
    if ($vai){
        header("location: ../sistema/principal.php");
    }else{
        echo"erro";
    }

?>