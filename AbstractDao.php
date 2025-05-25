<?php
include_once 'Configuracao.php';

// Esta classe em especifico servirá como base para as demais Dao's. Esta classe foi criada para iniciar a conexão com o banco de dados automaticamente no momento que
// qualquer método do tipo Dao for chamada. Isso facilita e automatica o conexão com o banco de dados.
abstract class AbstractDao{
    
        protected $conexaoDao;
    
        public function __construct(){
            $this->conexaoDao = new Configuracao();  
            self::getConexao()->startConexao();
        }
        
    
        protected function getConexao()
        {
            return $this->conexaoDao;
        }
       
}

?>