<?php

class Login extends Model {
  
    /**
     * Método responsável por checkar se o usuário está logado ou não
     * @return Object $usuario
     */
    public function checkarLogin() {

        // $this->validaCampos();
        
        $usuario = Apartamento::getUnicoRegistro(['descricao' => $this->apartamento], "*", ["morador" => "id_morador"], "morador");

        if(!empty($usuario)) {
            
            if($usuario->ativo == false) {
                throw new FestahubException('O usuário inativo ou inexistente');
            }

            if(password_verify($this->senha, $usuario->senha)) {

                return $usuario;

            }

        }

        throw new FestahubException('Usuário/senha inválidos');
    }

} 