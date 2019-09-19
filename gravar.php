<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Escola - Consultar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header>
       <h1>Painel de Sistema</h1>
        <nav>
           <ul class="nav nav-tabs">
            <a class="nav-link active" href="Cadastrar.php">Cadastrar</a>
            <a class="nav-link" href="Consultar.php">Consultar</a> 
            </ul>   
        </nav>
    
    </header>





<?php 

    $nome = $_POST['nome'];
    $Tel = $_POST['Tel'];
    $email = $_POST['email'];


  

    include "connect.php";
    
    $sql = "INSERT INTO aluno VALUES(null, '{$nome}', '{$email}', '{$Tel}')";
    if(($nome != null && $Tel != null && $email != null)){
        if(mysqli_query($con, $sql)){
            
            echo "Gravado com sucesso <br>";
            echo "<a href='Cadastrar.php'>Voltar</a>";
            
        }else{
            echo "Erro ao gravar <br>";
            echo "<a href='Cadastrar.php'>Voltar</a>";
        }
    }else{
        echo "Preencha todos os Campos <br>";
        echo "<a href='Cadastrar.php'>Voltar</a>";
    }


?>


</body>
</html>