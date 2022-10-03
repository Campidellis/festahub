<?php

require_once(realpath(MODEL_PATH). '/Model.php');

class User extends Model {
    
    protected static $nomeTabela = 'morador';
    protected static $colunas = [
        "id_morador", 
        "nome",
        "telefone_1",
        "telefone_2", 
        "email_1",
        "email_2", 
        "ativo",
    ];
    
}