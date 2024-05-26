<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_blog";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida";
} catch(PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}
?>
