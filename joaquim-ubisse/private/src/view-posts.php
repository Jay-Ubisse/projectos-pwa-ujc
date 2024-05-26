<?php
include '../db/connection.php';

try {
    $stmt = $conn->prepare("SELECT * FROM posts");
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<p>Autor: " . $row["author"] . "</p>";
            echo "<p>" . $row["content"] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "Nenhum post encontrado";
    }
} catch(PDOException $e) {
    echo "Erro ao recuperar posts: " . $e->getMessage();
}
$conn = null;
?>
