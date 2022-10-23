<?php

carregaModel('Apartamento');

class Login extends Model {
    
    // public function validaCampos() {

        /**
         * Método responsável por validar os campos do form de login;
         * 
         */
    //     $erros = [];

    //     if(empty($this->apartamento)) {
    //         $erros['apartamento'] = "Informe o apartamento";
    //     }
        
    //     if(empty($this->senha)) {
    //         $erros['senha'] = "Informe a senha";
    //     }
        
    //     if(count($erros) > 0) {
    //         throw new ValidaCamposException($erros);
    //     }
    // }   

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