<h1>Book Author By Book</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
           <th>ID</th>
          <th>Title</th>
          <th>Genre</th>
          <th>Position</th>
      </tr>
       

    </thead>
    <tbody>
<?php
while ($book_author= $book_authors->fetch_assoc()) {

?>
 <tr>

    <td> <?php echo $book_author['book_id']; ?></td>
    
    <td><?php echo $book_author['book_title']; ?></td>
    <td><?php echo $book_author['book_genre']; ?></td>
    <td><?php echo $book_author['position']; ?></td>
   
   
 </tr> 


      
<?php

}


?>

 </tbody>
  </table>
</div>
