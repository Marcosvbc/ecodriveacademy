<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "questionario";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);
echo '<pre>';
print_r("opa");
echo '</pre>';
exit;
// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$corrente_eletrica = $_POST['corrente_eletrica'];
$corrente_tensao = $_POST['corrente_tensao'];
$potencia_eletrica = $_POST['potencia_eletrica'];
$alta_voltagem = $_POST['alta_voltagem'];
$veiculos_eletricos = $_POST['veiculos_eletricos'];
$beneficios_veiculo = $_POST['beneficios_veiculo'];
$opiniao_site = $_POST['opiniao_site'];
$textos_claros = $_POST['textos_claros'];

// Inserir dados no banco de dados
$sql = "INSERT INTO respostas (nome, email, corrente_eletrica, corrente_tensao, potencia_eletrica, alta_voltagem, veiculos_eletricos, beneficios_veiculo, opiniao_site, textos_claros)
VALUES ('$nome', '$email', '$corrente_eletrica', '$corrente_tensao', '$potencia_eletrica', '$alta_voltagem', '$veiculos_eletricos', '$beneficios_veiculo', '$opiniao_site', '$textos_claros')";

if ($conn->query($sql) === TRUE) {
    echo "Respostas enviadas com sucesso!";
} else {
    echo "Erro
