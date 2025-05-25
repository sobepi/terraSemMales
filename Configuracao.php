<?php

// Arquivo de configuraçao para acessar o banco de dados.

class Configuracao{
    

    private $host = 'localhost';
    private $dbname = 'beja_provida';
    private $login = 'provida';
    private $senha = 't1vFxpirypCl1tz';
    private $conexao;

public function startConexao(){
  try{
      $this->conexao = new PDO("mysql:host=".self::getHost().";dbname=".self::getDbname(),self::getLogin() ,self::getSenha());
  }
  catch (PDOException $e){
      print "Ops, algo deu errado: " . $e->getMessage(). "<br>";
  }
}

public function action(){
    return self::getConexao();        
}

public function encerrarConexao(){
       self::setConexao(NULL);
}

/**
 * @return mixed
 */
public function getConexao()
{
    return $this->conexao;
}

/**
 * @param mixed $conexao
 */
public function setConexao($conexao)
{
    $this->conexao = $conexao;
}


    
/**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @param string $dbname
     */
    public function setDbname($dbname)
    {
        $this->dbname = $dbname;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @param string $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }        
}

?>
