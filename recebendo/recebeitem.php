<?php
   require "../requires/conecta.php";
    $id = $_POST['id_user'];
    $dono = $_POST['dono'];
    $nome_produto = $_POST['nome'];
    $data_aco = $_POST['data_aco'];
    $data_dev = $_POST['data_dev'];
    $contato = $_POST['contato'];

   $ui = "INSERT INTO itens (id_user, dono, nome, data_aco, data_dev) 
   VALUES ('$id', '$dono' ,'$nome_produto', '$data_aco', '$data_dev')";
   $res = mysqli_query($conn , $ui);

   if($res){
       echo"sucesso";
       header("Location: ../sistema/listaitens.php");
   }else{
       echo"não foi cadastrado";
   };
?>