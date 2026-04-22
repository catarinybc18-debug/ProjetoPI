<?php
include("config.php");

$data = json_decode(file_get_contents('php://input'), true);

$nome = $data['nome'];
$email = $data['email'];
$senha = $data['senha'];


$sql = "INSERT INTO usuarios (nome, email, senha)
        VALUES ('$nome', '$email', '$senha')";
$conexao = obterConexao();
if($conexao){
    if (mysqli_query($conexao, $sql)) {
        echo "Cadastro realizado!";
    } else {
        echo "Erro ao cadastrar";
    }

}
?>