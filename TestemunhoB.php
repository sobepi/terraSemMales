<?php

if ((isset($_POST['email']))&&(!empty($_POST['email']))){

    //porta, usuário, senha, nome data base
    //caso não consiga conectar mostra a mensagem de erro mostrada na conexão
    $conexao = mysqli_connect("localhost", "provida", "t1vFxpirypCl1tz", "beja_provida") or die("Erro na conexão com banco de dados " . mysqli_error($conexao));

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $testemunho = $_POST['testemunho'];

    $string_sql = "INSERT INTO testemunho (id_testem,nome,email,testemunho) VALUES (null,'$nome','$email','$testemunho')";
    $insert_member_res = mysqli_query($conexao, $string_sql);
    if(mysqli_affected_rows($conexao)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
       echo "<p>Testemunho Registrado</p>";
       echo "<a href='testemunhos.html'>Voltar para formulário de cadastro</a>"; //Apenas um link para retornar para o formulário de cadastro
    } else {
       echo "Erro, não foi possível inserir no banco de dados";
    }
   mysqli_close($conexao); //fecha conexão com banco de dados
}else{
    echo "Por favor, preencha os dados";
}

?>