<h1>Authors with Books</h1>
<div class="card-group">
 





<?php
while ($author= $authors->fetch_assoc()) {

?>

  <div class="card">
 
    <div class="card-body">
      <h5 class="card-title"><?php echo $author['author_name']; ?></h5>
      <p class="card-text">
       <ul class="list-group">
<?php
   $books = selectBooksByAuthor($author['author_id']);
  while ($book = $books->fetch_assoc()) {
    ?>

         <li class="list-group-item"><?php echo $book['book_title']; ?> - <?php echo $book['book_genre']; ?> - <?php echo $book['position']; ?> </li>
   
   
      <?php
        
  }
    
    ?>

    </ul>
        
      </p>
      <p class="card-text"><small class="text-body-secondary">Gender: <?php echo $author['author_gender']; ?> </small></p>
    </div>
  </div>




      
<?php

}


?>
</div>
