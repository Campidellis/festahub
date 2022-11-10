<?php

class Morador extends Model {
    
    protected static $nomeTabela = 'morador';
    protected static $colunas = [
        'id_morador ',
        'nome',
        'telefone_1 ',
        'telefone_2 ',
        'email_1 ',
        'email_2 ',
        'ativo ',
        'is_admin'
    ];
    
}