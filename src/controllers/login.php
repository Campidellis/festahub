<?php
carregaModel('Login');

$exception = null;

if(count($_POST) > 0) {

    $login = new Login($_POST);

    try {
        
        $usuario = $login->checkarLogin();
        echo "Apartamento $usuario->descricao logado com sucesso";

    } catch (FestahubException $e) {

        $exception = $e;
    
    }

}

carregaView('login', $_POST + ['exception' => $exception]);