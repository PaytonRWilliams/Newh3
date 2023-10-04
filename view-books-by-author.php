<h1>Books by Author</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
           <th>Book ID</th>
          <th>Author ID</th>
          <th>Position</th>
      </tr>
       

    </thead>
    <tbody>
<?php
while ($book= $books->fetch_assoc()) {

?>
 <tr>

    <td> <?php echo $book['book_id']; ?></td>
    
    <td><?php echo $book['author_id']; ?></td>
    <td><?php echo $book['position']; ?></td>
   
   
 </tr> 


      
<?php

}


?>

 </tbody>
  </table>
</div>
