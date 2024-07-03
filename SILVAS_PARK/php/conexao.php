<?php

$servername = "localhost";
$username = "root";
$password = "";

// CRIA CONEXÃO
$conn = new mysqli($servername, $username, $password);

// VERIFICA ESTADO DA CONEXÃO
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo "conectado com sucesso"

?>