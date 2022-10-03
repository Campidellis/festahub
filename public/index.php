<?php

include_once(dirname(__FILE__, 2) . "/src/config/config.php");
include_once(dirname(__FILE__, 2) . "/src/models/User.php")   ;

// $user = new User(
// [
//     'id_morador' => '2',
//     'nome'       => 'Victor',
//     'telefone_1' => '(14) 9 99753 5475',
//     'telefone_2' => null,
//     'email_1'    => 'joao@teste.com',
//     'email_2'    => null,
//     'ativo'      => 1
// ]);

foreach(User::getClasse(['nome'=>'João Victor'], 'id_morador, nome') as $user) {
    echo $user->nome;
    echo "<br>";
}