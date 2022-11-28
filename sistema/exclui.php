<?php
$id_item = $_POST['id_item'];
require"../requires/conecta.php";
$sql = "DELETE FROM itens WHERE id= $id_item";
$res = mysqli_query($conn, $sql);
if(isset($res)){
    header("Location:../sistema/cadastrados.php?exclui=1");
}

?>