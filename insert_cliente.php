<?php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$data_nascimento = $_POST['data_nascimento'];
 
include ('conexao.php');
 
$sql = "INSERT INTO clientes ( nome, endereco, numero, bairro, cidade, estado, email, cpf_cnpj, rg, telefone, celular, data_nascimento) VALUES ('$nome', '$endereco', '$numero', '$bairro', '$cidade', '$estado', '$email', '$cpf_cnpj', '$rg', '$telefone', '$celular', '$data_nascimento')";
 
if ($conexao->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir o registro: " . $conexao->error;
}
 
$conexao->close();
?>
