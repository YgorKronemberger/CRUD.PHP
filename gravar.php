<?php 

    $nome = $_POST['nome'];
    $Tel = $_POST['Tel'];
    $email = $_POST['email'];


  

    include "connect.php";
    
    $sql = "INSERT INTO aluno VALUES(null, '{$nome}', '{$Tel}', '{$email}')";

    if(mysqli_query($con, $sql) && ($nome != null || $Tel != null || $email != null)){
        
        echo "Gravado com sucesso <br>";
        echo "<a href='Cadastrar.php'>Voltar</a>";
        
    }else{
        echo "Erro ao gravar <br>";
        echo "<a href='Cadastrar.php'>Voltar</a>";
    }



?>