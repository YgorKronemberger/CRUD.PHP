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
            <a class="nav-link active" href="Cadastrar.php">Cadastrar</a>
            <a class="nav-link" href="Consultar.php">Consultar</a> 
            </ul>   
        </nav>
    
    </header>

    <h2>Deseja realmente excluir esse dado?</h2>
    <form action="ExcluirConf.php" method="get">
    <input name="val" type="submit" class="btn btn-danger" style="margin-right:2%;" href="ExcluirConf.php/?nome=<?php echo $nome ?>&email=<?php echo $email; ?>&telefone=<?php echo $telefone ?>" value="Sim">
    <input name="val" class="btn btn-primary" type='button' value='Não' onclick='history.go(-1)' />
    </form>




</body>
</html>