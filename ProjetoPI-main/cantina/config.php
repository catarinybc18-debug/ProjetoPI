<?php
// Configurações do XAMPP padrão
$host = "localhost";
$db   = "sabores_tecnicos";
$user = "root";
$pass = "";

// Habilita a exibição de erros para facilitar o seu desenvolvimento
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset("utf8mb4");
} catch (Exception $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>