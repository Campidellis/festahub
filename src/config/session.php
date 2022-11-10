<?php

function sessaoValida() {
    $usuario = $_SESSION['usuario'];

    if(!isset($usuario) && empty($usuario)) {
        header('Location: login.php');  
        exit();
    }
}