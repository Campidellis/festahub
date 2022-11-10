<?php
carregaModel('Login');
session_start();
$exception = null;

/**
 * Controller de login, responsável pelo redirecionameto para a página home
 * 
 */
if(count($_POST) > 0) {

    $login = new Login($_POST);

    try {
        
        $usuario = $login->checkarLogin();
        $_SESSION['usuario'] = $usuario;
        header("Location: home.php");

    } catch (FestahubException $e) {

        $exception = $e;
    
    }

}

carregaView('login', $_POST + ['exception' => $exception]);