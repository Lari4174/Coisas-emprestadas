<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['nome']);
    unset($_SESSION['contato']);
    header("location: ../parte_frontal/login.php");
?>