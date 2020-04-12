<?php
require_once '../db.php';
/**************************** 
 * filen innehåller ett formulär som skickar data till databasen
 * 
*******************************/

//hanterar data som skickas via formuläret
$msg = "";

    if($_SERVER['REQUEST_METHOD'] === 'POST') :
        
        $sql = "INSERT INTO posts (heading, post, image, link, published)
                VALUES (:heading, :post, :image, :link, :published) ";
           
        $stmt = $db->prepare($sql);

        
        $heading = htmlspecialchars($_POST['heading']);
        $post = htmlspecialchars($_POST['post']);
        $published = htmlspecialchars($_POST['published']);
        $image = $_FILES['image']['name'];
        $link = $_POST['link'];
        $target = "../images/".basename($image);
        

        
        $stmt->bindParam(':heading', $heading);
        $stmt->bindParam(':post', $post);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':link', $link);
        $stmt->bindParam(':published', $published);
       
       
        $stmt->execute(); 

        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Bilden är uppladdad!";
        }else{
            $msg = "Ingen bild är uppladdad!";
        }
    endif;


?>

<form action="#" method="POST" enctype="multipart/form-data">
<div class="container">
<div class="row">
<div class="col-md-6">
            <input type="text" placeholder="Ange Rubrik" name="heading" class="form-control mb-4">
        </div>
</div>
    <div class="row">
        <div class="col-md-6">
            <textarea name="post" placeholder="Skriv ett inlägg (max 5000 tecken)" cols="10" rows="8" class="form-control mb-4"></textarea>
        </div>
    <div class="col-md-6">
        <label for="image">Ladda upp en bild:</label><br>
        <input type="file" name="image" class="form-control mb-4">
        <?php echo $msg; ?><br>
        <label for="link">Lägg till en inbäddad länk:</label><br>
        <input type="text" name="link" class="form-control mb-4">
        
    </div>
</div>
    <div class="row">
        <div class="col-md-6">
            <input type="hidden" name="published" value="1">
            <input type="submit" value="Lägg till" class="btn btn-success btn-block mb-5">
        </div>
    </div>
</div>

</form>
<hr>