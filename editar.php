<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Escola - Cadastrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container">
    
    <header>
       <h1>Painel de Sistema</h1>
        <nav>
           <ul class="nav nav-tabs">
            <a class="nav-link" href="Cadastrar.php">Cadastrar</a>
            <a class="nav-link" href="Consultar.php">Consultar</a> 
            </ul>   
        </nav>
    
    </header>




<br>
    <br>
    <br>
    

    <h2>Editar Dados</h2>
    <br>
    <form action="modifi.php <?php echo $nome ?>" method="post">

        <div class="form-group">
            <label for="">Nome Atual: <b><?php echo $nome ?></b></label>
            <input name="nomeNovo" class="form-control" type="text" placeholder="Digite seu novo nome de usuaruio">

        

        </div>

        <div class="form-group">
            <label for="">Email Atual: <b><?php echo $email ?></b></label>
            <input name="emailNovo" class="form-control" type="email" placeholder="Digite seu novo email">
        </div>

        <div class="form-group">
            <label for="">Telefone Atual: <b><?php echo $tel ?></b></label>
            <input name="TelNovo" class="form-control" maxlength="11" type="text" placeholder="Digite seu novo telefone">
        
        
        </div>





         <input type="submit" class="btn btn-primary" value="Modificar">
    
    
    

    

</body>
</html>