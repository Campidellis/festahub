<?php

class Apartamento extends Model {
    
    protected static $nomeTabela = 'apartamento';
    protected static $colunas = [
        'id_apartamento',
        'descricao',
        'senha',
        'id_morador'
    ];
    
}