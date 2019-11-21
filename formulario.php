<?php
    $flag = 0;
    if(isset($_POST['submit'])){
        //abrindo conexão com o bd
        $con = mysqli_connect('localhost', 'root', '', 'resistenzadelledonne')
        or die("[ERRO] Não foi possível conectar ao banco de dados!");
        
        //definindo as variáveis que farão referência aos atributos do bd
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['conteudo'];

        //fazendo com que o comando funcione
        $query = "insert into contato values(DEFAULT, '$nome', '$email', '$mensagem')";
        $data = mysqli_query($con, $query) or die ("Erro ao executar o procedimento!");

        //mensagem de confirmação
        echo "<h2>Sua mensagem foi enviada com sucesso<h2>";
        mysqli_close($con);
    }
?>