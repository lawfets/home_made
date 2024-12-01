<?php
    require_once 'login.php';

    try{
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (PDOException $e){
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    $query = "SELECT * FROM blogposts";
    $result = $pdo->query($query);

    while ($row = $result -> fetch()){
        echo 'author: ' . htmlspecialchars($row['author']) . "&nbsp;";
        echo 'date: ' . htmlspecialchars($row['published_date']) . "&nbsp;&nbsp;&nbsp;";
        echo 'title: ' . htmlspecialchars($row['title']) . "<br>";
        echo 'post: ' . htmlspecialchars($row['post']) . "<br>";
    }
?>