<?php
//atribuindo as variaveis 
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$celular=$_POST['celular'];
$regiao_pesca=$_POST['regiao_pesca'];
$estado_pesca=$_POST['estado_pesca'];

//conectando com o banco 
include_once('conexao.php');

//inserindo os valores do cadastro no banco 
$sql="INSERT INTO cadastro (email,nome,sobrenome,senha,regiao_pesca,celular,estado_pesca)
VALUES ('$email','$nome','$sobrenome','$senha','$regiao_pesca','$celular','$estado_pesca')";

//se der erro no retorno dos dados , a "conexâo" vai encerrar e  avisar 

$resultado=mysqli_query($conn,$sql) or die('Erro na inserção do registro');

// se for cadastrado vai aparecer essa mensagem 

echo('<script>
    window.location.href="pagina_principal.html"; </script>');

//fechando a conexão do banco de dados 
mysqli_close($conn);


?>