<?php
require_once '../db.php';
require_once 'header-admin.php';
$imageold = "";
if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);
    $sql = "SELECT * FROM posts WHERE id =:id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $heading = $row['heading'];
        $post = $row['post'];
        $link = $row['link'];
        $imageold = $row['image'];
        
    }else {
        header('Location:index.php');
        exit;
    }
}else {
    header('Location:index.php');
    exit;
}
$msg = "";

if($_SERVER['REQUEST_METHOD'] === 'POST') :
    

    $heading = htmlspecialchars($_POST['heading']);
    $post = htmlspecialchars($_POST['post']);
    $link = $_POST['link'];
    $id = htmlspecialchars($_POST['id']);
    if ($_FILES['image']['name'] ==''){
        echo "using old file";
        $image = $imageold;
    }else {
        $image = $_FILES['image']['name'];
        $target ="../images/".basename($image);
        echo "using new file";
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Bilden är uppladdad!";
        }else{
            $msg = "Ingen bild är uppladdad!";
        }
    }
    
    
    $sql = "UPDATE posts SET heading=:heading , post=:post , link=:link, image=:image WHERE id=:id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':heading', $heading);
    $stmt->bindParam(':post', $post);
    $stmt->bindParam(':link', $link);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    ?>
    <script> location.replace("index.php");</script>
    
    
    
   
    
<?php endif;
?>
<form action="#" method="POST" enctype="multipart/form-data">
<div class="row">
        <div class="col-md-5">
            <input type="text" placeholder="Rubrik" value='<?php echo $heading; ?>' name="heading" class="form-control mb-3">
        </div>
</div>
<div class="row">
        <div class="col-md-5">
            <textarea name="post" placeholder="Skriv ett inlägg (max 5000 tecken)" cols="10" rows="8" class="form-control mb-3"><?php echo $post;?></textarea>
           
        </div>
        <div class="col-md-6">
        <label for="image">Ladda upp en bild:</label><br>
        <input type="file" name="image" class="form-control mb-4">

        <?php echo $msg; ?>
        <br>
        <label for="link">Lägg till en inbäddad länk:</label><br>
        <input type="text" name="link" value='<?php echo $link; ?>' class="form-control mb-4">
</div>
</div>
<div class="row">
        <div class="col-md-2">
            <input type="submit" value="Uppdatera" class="btn btn-outline-success mb-4">
        </div>
</div>
</div>
<input type="hidden" name="id" value="<?php echo $id ?>"> 
</form>
<?php 
if (!$imageold === false){
    echo "<img src='../images/$imageold' width='200px' class='mb-4'><br>
     <a href='delete-img.php?id=$id' class='btn btn-danger'>Ta bort bild</a>";
}
?>


<?php  require_once 'footer-admin.php'; ?>