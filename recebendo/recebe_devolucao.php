<?php
    $devolvido = $_POST['devolvido'];
    session_start();
    $id = $_SESSION['id'];
    $id_item = $_POST['id_item'];
    if(isset($devolvido)){
        require"../requires/conecta.php";
        $sql = "UPDATE itens SET  emprestador='', identificador='0' WHERE id = $id_item";
        $res = mysqli_query($conn, $sql);
        header("location:../sistema/principal.php?devolvido=1");
    }else{
        echo"ERRO AO DEVOLVER";
    }
    

?>