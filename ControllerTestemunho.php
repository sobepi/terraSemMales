<?php 
include_once "TestemunhoDao.php";

class ControllerTestemunho {
    
        // Método responsavel por preencher as propriedades do objeto Testemunho
        private function fillTestemunho(){
                $testemunho = new Testemunho();
                $testemunho->setNome($_POST['nome']);
                $testemunho->setEmail($_POST['email']);
                $testemunho->setTestemunho($_POST['testemunho']);
                return $testemunho;
        }
       
        
        public function controllPost(){
            if( $_SERVER['REQUEST_METHOD']=='POST' ) 
            {
                $request = md5( implode( $_POST ) );
                var_dump($_POST);
                if( isset( $_SESSION['last_request'] ) && $_SESSION['last_request']== $request )
                {
                    return 'refresh';
                }
                else
                {
                    $_SESSION['last_request']  = $request;
                    return 'post';
                }
            }
        }
        
        public function registerTestemunho(){
            // O if() serve para evitar a repetição de dados provocados pelo adicionamento do f5 por meio da lógica do método controllPost()
            if(self::controllPost() == "post"){ 
                $testemunhoDao = new TestemunhoDao();
                $testemunhoDao->insertTestemunho(self::fillTestemunho()); // Aqui será feita a persistencia dos dados atraves do método insertTestemunho(); do objeto $testemunhoDao
            }
       }
        
        // Função responsavel por mostrar todos os testemunhos já inscritos
        public function showTestemunhos(){
            $testemunhoDao = new TestemunhoDao();
            $testemunhos = $testemunhoDao->returnTestemunhos();
            foreach($testemunhos as $testemunho) {
                echo "<tr>
                          <td>" . $testemunho['id_testem'] ."</td>". 
                         "<td>" . $testemunho['nome'] . "</td>".
                         "<td>" . $testemunho['email'] . "</td>".
                         "<td>" . $testemunho['testemunho'] . "</td>
                      </tr>"; 
            }
        }    
}
?>