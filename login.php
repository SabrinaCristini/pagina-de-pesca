<?php


$nomeusuario=$_POST['nomeusuario'];
$senha=$_POST['senha'];

$sql="SELECT * FROM cadastro WHERE nome='$nomeusuario' AND senha='$senha'";

include_once('conexao.php');

$resultado=mysqli_query($conn,$sql) or die ("erro no retorno dos dados");

$registro=mysqli_fetch_array($resultado);




if(!$registro){
    echo('<script> alert("usuario não cadastrado, faça seu cadastro para acesso!");
    window.location.href="cadastro.html"; </script>');
}

else {
    echo('<script>
    window.location.href="pagina_principal.html"; </script>');
}









?>