
<?php
require_once "../db.php";


if(isset($_GET['id'])){
    
    $id = htmlspecialchars($_GET['id']);

    $sql = "DELETE FROM posts WHERE id = :id";
    $stmn = $db->prepare($sql);
    $stmn->bindParam(':id', $id);
    $stmn->execute();
    
   
    }?>
    
    <script> location.replace("index.php");</script>
   
    

    