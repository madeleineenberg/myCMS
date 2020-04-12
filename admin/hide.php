<?php


require_once '../db.php';

if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);
    $info = "SELECT published FROM posts WHERE id =:id";
    $stmt = $db->prepare($info);
    $stmt->bindParam(':id', $id);
    $stmt->execute(); 
    
    if($stmt->rowCount() > 0){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
    }
    
    if($row['published'] == 1) {
        $published = htmlspecialchars(0);
        $sql = "UPDATE posts SET published=:published WHERE id =:id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':published', $published);
    
        $stmt->execute(); 
    
    }else{
        $published = htmlspecialchars(1);
        $sql = "UPDATE posts SET published=:published WHERE id =:id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':published', $published);
    
        $stmt->execute(); 
    }

    header("Location:index.php");

}
