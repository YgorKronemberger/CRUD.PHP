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
    
    <form action="gravar.php" method="post">
       <div class="form-group">
            <label for="nome">Nome:</label>
            <input class="form-control" id="nome" name="nome" type="text" placeholder="Digite seu nome">
       </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="email" name="email" type="email" placeholder="Digite seu Email">   
        </div>
        <div class="form-group">
            <label for="Tel">Tel</label>
            <input class="form-control" id="Tel" name="Tel" type="text" placeholder="Digite seu telefone">   
        </div>
      
          <input type="Submit">  
        
    </form>
    
    
    
</body>
</html>