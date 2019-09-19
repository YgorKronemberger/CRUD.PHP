<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Escola - Consultar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container">
    
    <header>
       <h1>Painel de Sistema</h1>
        <nav>
           <ul class="nav nav-tabs">
            <a class="nav-link" href="Cadastrar.php">Cadastrar</a>
            <a class="nav-link active" href="Consultar.php">Consultar</a> 
            </ul>   
        </nav>
    
    </header>
    
     
     <table class="table">
         <thead>
             <tr>
                <th>Matricula</th>
                 <th>Nome</th>
                 <th>Email</th>
                 <th>Tel</th>
                 <th>Editar</th>
                 <th>Excluir</th>
                 
             </tr>
         </thead>
         <tbody>
           
           
           <?php 
             
             include "connect.php";
             $sql = "SELECT * FROM aluno";
             $busca = mysqli_query($con, $sql);
             
                 while($array = mysqli_fetch_array($busca)){
             
             
                    $mat = $array["mat"];
                    $nome = $array["nome"];
                    $email = $array["email"];
                    $telefone = $array["Telefone"];
                     
             
             
             
             ?>
           
            <tr>
               
                <td><?php echo $mat; ?></td>
                <td><?php echo  $nome; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $telefone;  ?></td>
                <td><a class="btn btn-primary" href="editar.php/?nome=<?php echo $nome ?>&email=<?php echo $email; ?>&telefone=<?php echo $telefone ?>">Editar</a></td>
                <td><a class="btn btn-danger" type="button" href="excluir.php/?nome=<?php echo $nome ?>&email=<?php echo $email; ?>&telefone=<?php echo $telefone ?>" >Excluir</a></td>

                
                
            </tr>
             <?php } ?>
             
         </tbody>
         
         
     </table>
    
    
    
</body>
</html>