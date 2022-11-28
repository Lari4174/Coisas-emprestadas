<?php
   require "../requires/conecta.php";
    $id = $_POST['id_user'];
    $dono = $_POST['dono'];
    $nome_produto = $_POST['nome'];
    $data_aco = $_POST['data_aco'];
    $data_dev = $_POST['data_dev'];
    session_start();
    $contato = $_SESSION['contato'];

   $ui = "INSERT INTO itens (id_user, dono, dono_contato, nome, data_aco, data_dev, contato, identificador) 
   VALUES ('$id', '$dono', '$contato' ,'$nome_produto', '$data_aco', '$data_dev', '$contato', '0')";
   $res = mysqli_query($conn , $ui);

   if($res){
       header("location: ../sistema/listaitens.php");
   }else{
       echo"não foi cadastrado";
   };
?>