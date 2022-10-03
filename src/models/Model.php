<?php

class Model {

    protected static $nomeTabela = '';
    protected static $colunas = [];
    protected $valores = [];

    function __construct($arr) {
        $this->carregaArray($arr);
    }

    /**
     * Método responsável por carregar o retorno da query
     * @param Array $arr
     * @return Array
     */
    public function carregaArray($arr) {

        if(count($arr) > 0) {
            foreach($arr as $chave => $valor) {
                $this->$chave = $valor;
            }
        }

    }

    public function __get($chave) {

        return $this->valores[$chave];

    }

    public function __set($chave, $valor) {

        $this->valores[$chave] = $valor;

    }

    /* ================== PAROU DE PROGRAMAR AQUI ============================= */
    public static function getClasse($filtros = [], $colunas = "*") {
        
        $objeto = [];
        $result = static::getSelect($filtros, $colunas);
        echo '<pre>';
        print_r(count($result));
        echo '</pre>';
        exit();
        if(count($result) > 0) {
            $class = get_called_class();

            for ($i=0; $i < count($result) ; $i++) { 
                array_push($objeto, new $class($result));                
            }

        }

        return $objeto;
    }

    /**
     * Método responsável por montar a query SELECT, concatena com valor do nome da tabela que vem das classes que 
     * extendem a model e retonra o resultado da query em formato de array associativo, se não tiver registro, retorna null
     * @param Array $filtros
     * @param String $colunas
     * @return Array
     */
    public static function getSelect($filtros = [], $colunas = '*') {

        $sql = "SELECT $colunas FROM " . static::$nomeTabela . static::getFiltros($filtros);
        $result = Database::getResultadoDaQuery($sql);
        
        if($result->rowCount() > 0) {
            return $result->fetch(PDO::FETCH_ASSOC);
        } else {
            return null;
        }

    }

    /**
     * Método responsável por montar a cláusula where na query
     * o 1 = 1 é para conseguir colocar os 'AND' na query
     * 
     * @param Array $filtros
     * @return String
     */
    private static function getFiltros($filtros = []) {
        
        $sql = '';
        if(count($filtros) > 0) {

            $sql .= " WHERE 1 = 1 ";
            foreach ($filtros as $coluna => $valor) {
                $sql .= " AND ${coluna} = " . static::formataValor($valor);
            }
        }

        return $sql;

    }


    /**
     * Método responsável por formatar os valores que vão para a query,
     * Se for null ou vazio ele passa null
     * Se for string coloca aspas
     * Senão ele passa o valor normal, geralmente vai ser numérico
     *  
     * @param String $valor
     * @return String
     */
    private static function formataValor($valor) {
        
        if(is_null($valor) || empty($valor)) {
            $valor = "null";
        } else if(gettype($valor) === 'string') {
            $valor = "'${valor}'";
        }

        return $valor;

    }

}