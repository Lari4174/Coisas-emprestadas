<?php
$nome = $_POST['usuario'];
$contato = $_POST['contato'];
$senha = $_POST['senha'];
require"../requires/autentica.php";
require"../requires/conecta.php";


$id = $_SESSION['id'];
$sql = "UPDATE cadastros SET nome = '$nome', contato='$contato', senha = '$senha' WHERE id='$id'";
$res = mysqli_query($conn, $sql);
if ($res){
    header("Location: ../sistema/principal.php?altera=1");
}else{
    echo "erro ao atualizar o cadastro";
}
?>