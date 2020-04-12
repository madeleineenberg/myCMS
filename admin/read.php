<?php

require_once '../db.php';

$sql = "SELECT * FROM posts";
$stmt = $db->prepare($sql);
$stmt->execute();



$list = '<ul class="list-group mt-5">';
$listArchive = '<ul class="list-group mt-5">';



while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    $id = htmlspecialchars($row['id']);
    $post = htmlspecialchars($row['post']);
    $heading = htmlspecialchars($row['heading']);
    $date = htmlspecialchars($row['date']);
    $published = htmlspecialchars($row['published']);
    if($row['published'] == 1){

        $list .= "<div class='list-group>
            <div class='list-group-item list-group-item-action align-items-start'>
            <p class='mb-1 text-secondary'>$heading</hp>    
            <div class='d-flex w-100 justify-content-between'>
            <!---<p class='mb-1 font-italic text-secondary'> $post</p>--->
            <p class='badge '> $date </p>
            <div class='button-container'>
            <a href='hide.php?id=$id' class='btn btn-primary'>Arkivera</a>
            <a href='update.php?id=$id' class='btn btn-info'>Uppdatera</a>
            <a href='delete.php?id=$id' onclick='return myFunction()' class='btn btn-danger' id='delete'>Radera</a></div>
            </div></div>";
    }else{

        $listArchive .= "<div class='list-group>
            <div class='list-group-item list-group-item-action align-items-start'>
            <p class='mb-1 text-secondary'>$heading</hp>    
            <div class='d-flex w-100 justify-content-between'>
            <!---<p class='mb-1 font-italic text-secondary'> $post</p>--->
            <p class='badge '> $date </p>
            <div class='button-container'>
            <a href='hide.php?id=$id' class='btn btn-primary'>Publicera</a>
            <a href='update.php?id=$id' class='btn btn-info'>Uppdatera</a>
            <a href='delete.php?id=$id' onclick='return myFunction()'class='btn btn-danger' id='delete'>Radera</a></div>
            </div></div>";

            

    }

};

$list .= '</ul>';
$listArchive .= '</ul>';
 
?>

<h3>Publicerade inlägg:</h3>
<?php echo $list;?>
<hr>
<h3>Arkiverade inlägg:</h3>
<?php echo $listArchive;?>

<script>
function myFunction() {
let remove = confirm("Är du säker på att du vill radera inlägget?");
if (remove == false) {
   return false;
} 

}
</script>