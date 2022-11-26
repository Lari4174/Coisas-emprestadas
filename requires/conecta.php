<?php
$conn = mysqli_connect("localhost", "root", "","primeiro");
if ($conn == false){
    die ("ERRO: não conseguiu conectar ao MySQL " . mysqli_connect_error());
}
