<?php

/**
 *  Classe para validar compos dos formulários
 */
class ValidaCamposException extends FestahubException {

    private $erros = [];
    
    public function __construct($erros = [], $mensagem = "Erros de validação", $code = 0, $previous = null) {

        parent::__construct($erros, $mensagem, $code, $previous);
        $this->erros = $erros;

    }

    public function getErros() {
        return $this->erros;
    }

    public function get($att) {
        return $this->erros[$att];
    }
}