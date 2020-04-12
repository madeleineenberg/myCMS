<?php


//Filnamn: read.php
//
//
//Filen hämtar en tabell från databasen 


$sql = "SELECT * FROM posts WHERE published=1 ORDER BY `posts`.`date` DESC";
$stmt = $db->prepare($sql);

$stmt->execute();




$output = "<div class='container_posts'>";


while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    
  
    $heading= htmlspecialchars($row['heading']);
    $post = htmlspecialchars($row['post']);  
    $date = htmlspecialchars($row['date']); 
    $image = htmlspecialchars($row['image']);
    $link = $row['link'];
    $message = explode("\n",$post);
   
    $output .= "<div class='blog_post-container'>";
    $output .= "<div class='blog_post'><h2 class='post-title'>  $heading </h2>";
    $output .= "<h6 class='post-subtitle'> $date </h6>";
    if(!$image === false){
        $output .= "<div class='img-container'><img class='blog-img' src=./images/". $image ."></div>";
    }
    if (!$link === false){
        $output .= "<div class='link-container'>$link</div>";
    }
    foreach ($message as $value) {
        $output .= "<p class='blog_post-text'> $value </p>";
    }
    $output .= "</div>";
    $output .= "</div>";
    
    
}

$output .= "</div>";

echo $output;
