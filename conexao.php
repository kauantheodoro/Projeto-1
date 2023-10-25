<?php
$host = 'Localhost';
$usuario = 'root';
$senha = '';
$banco = 'form_cliente';


$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
   
die("Falha na conexão: " . $conexao->connect_error);
} 
else {
    echo("Conexão efetuada com sucesso.");
}
?>
