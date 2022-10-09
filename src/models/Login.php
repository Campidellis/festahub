<?php

carregaModel('Apartamento');

class Login extends Model {
    
    /**
     * Método responsável por checkar se o usuário está logado ou não
     * @return Object $usuario
     */
    public function checkarLogin() {

        $usuario = Apartamento::getUnicoRegistro(['descricao' => $this->descricao]);

        if(!empty($usuario)) {
            
            if(password_verify($this->senha, $usuario->senha)) {

                return $usuario;

            }

        }

        throw new Exception();
    }

} 