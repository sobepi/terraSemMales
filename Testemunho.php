<?php 

// Classe responsavel pela manipulação dos atributos.
class Testemunho{
    private $id_testem;
    private $nome;
    private $email;
    private $testemunho;
    /**
     * @return mixed
     */
    public function getId_testem()
    {
        return $this->id_testem;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getTestemunho()
    {
        return $this->testemunho;
    }

    /**
     * @param mixed $id_testem
     */
    public function setId_testem($id_testem)
    {
        $this->id_testem = $id_testem;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $testemunho
     */
    public function setTestemunho($testemunho)
    {
        $this->testemunho = $testemunho;
    }

    
    
}



?>