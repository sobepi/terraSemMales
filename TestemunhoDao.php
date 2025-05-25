<?php 

include_once 'Testemunho.php';
include_once 'AbstractDao.php';

class TestemunhoDao extends AbstractDao{
 
    // É aconselhavel que o nome dos métodos na Dao comecem com um verbo de ação prosseguido pelo substantivo.  
    // Método responsavel por inserir os testemunhos no bando de dados
    public function insertTestemunho(Testemunho $testemunho) {
        try{
                $sql = parent::getConexao()->action()->prepare("INSERT INTO testemunho (nome,email,testemunho) VALUES (:nome,:email,:testemunho)");
                $sql->bindParam(":nome", $testemunho->getNome());
                $sql->bindParam(":email", $testemunho->getEmail());
                $sql->bindParam(":testemunho", $testemunho->getTestemunho());
                $sql->execute();
        }
        catch (PDOStatement $e){
            die("Erro no inserção de dados"); 
        }
    }
    
    // Método responsavel por retornar os testemunhos do banco de dados
    public function returnTestemunhos(){
        try{
            $sql = parent::getConexao()->action()->query("SELECT * FROM testemunho");
            $array_testemunhos = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $array_testemunhos;
        }
        catch (PDOStatement $e){
            die("Erro ao retorna informações do Banco");
        }
    }
}

?>