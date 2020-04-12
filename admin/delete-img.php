<?php

require_once "../db.php";


if(isset($_GET['id'])){
    
    $id = htmlspecialchars($_GET['id']);

    $sql = "UPDATE posts SET image = '' WHERE posts.id = $id";
    $stmn = $db->prepare($sql);
    $stmn->bindParam(':id', $id);
    $stmn->execute();
    header("Location:update.php?id=$id");

    }
   