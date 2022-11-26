<?php
   require "../requires/conecta.php";
   $id_user = $_POST['id_user'];
   $nome = $_POST['nome'];
   $data_aco = $_POST['data_aco'];
   $data_dev = $_POST['data_dev'];
   $contato = $_POST['contato'];
   $verificador = $_POST['verificador'];

   $ui = "INSERT INTO itens (id_user, nome, data_aco, data_dev, contato, verificador) 
   VALUES ('$id_user', '$nome', '$data_aco', '$data_dev', '$contato', '$verificador')";
   $res = mysqli_query($conn , $ui);

   if($res){
       echo"sucesso";
       header("Location: ../sistema/listaitens.php");
   }else{
       echo"não foi cadastrado";
   };
?>