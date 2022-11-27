<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: ../parte_frontal/login.php?autentica=1");
    }
?>
