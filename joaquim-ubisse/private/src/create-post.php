<?php
include '../db/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];

    try {
        $sql = "INSERT INTO posts (title, content, author) VALUES (:title, :content, :author)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':author', $author);
        $stmt->execute();
        echo "Post criado com sucesso!";
    } catch(PDOException $e) {
        echo "Erro ao criar o post: " . $e->getMessage();
    }
}
?>
