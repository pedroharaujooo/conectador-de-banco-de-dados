<?php
$servername = "baseteste.srv.br";//servidor
$username = "basetestesrv_u_pedro";//seu usuario
$password = "180295Pe#";//sua senha
$database = "basetestesrv_pedrinhoaraujo";//sua base de dados

$conexao = mysqli_connect($servername, $username, $password, $database);

if(!$conexao){
    die("Falhou a conexão".mysqli_connect_error());
}else{
    echo "conectado com sucesso";
}//checa se a conexão com o banco de dados foi um sucesso.
?>