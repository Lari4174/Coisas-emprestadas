
<?php
    $nome =  $_POST["usuario"];
    $senha = $_POST['senha'];

    require"../requires/conecta.php";
    $sql = "SELECT * FROM cadastros WHERE nome = '$nome' AND senha = '$senha'";
    $res = mysqli_query($conn, $sql);
    
    $Qregistro = mysqli_num_rows($res);
    if ($Qregistro > 0){
        session_start();
        $row = mysqli_fetch_assoc($res);
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['contato'] = $row['contato'];
        header("Location: ../sistema/principal.php");
        
    }else{
        header("Location: ../parte_frontal/login.php?erro=1");
    }
?>