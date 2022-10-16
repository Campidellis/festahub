<?php

class ValidaCamposException extends FestahubException {

    private $erros = [];
    /**
     * 
     * PAROU AQUI
     */
    public function __construct($mensagem = "Erros de validação", $code = 0, $previous = null) {

        parent::__construct($mensagem, $code, $previous);
        $this->erros;

    }

    public function getErros() {
        return $this->erros;
    }

    public function get($att) {
        return $this->erros[$att];
    }
}