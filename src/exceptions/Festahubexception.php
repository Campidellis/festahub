<?php

/**
 * Nessa classe vamos personalzar os erros da nossa aplicação
 * 
 */

class FestahubException extends Exception {

    public function __construct($message, $code = 0, $previous = null ) {
        parent::__construct($message, $code, $previous);
    }
}