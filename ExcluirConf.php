
<?php 
  $nome = $_GET['nome'];
  $email = $_GET['email'];
  $tel = $_GET['telefone'];



  include "connect.php";

$sql = "DELETE FROM alunos WHERE nome = '{$nome}' AND email = '{$email}' AND  telefone = {$tel};";


if(mysqli_query($con, $sql)){
    echo "dados deletados com sucesso !!";
}else{
    echo "Err";
}
?>