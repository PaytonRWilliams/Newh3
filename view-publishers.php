<h1>Publishers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
           <th>ID</th>
          <th>Name</th>
          <th>City</th>
      </tr>
       

    </thead>
    <tbody>
<?php
while ($publisher= $publishers->fetch_assoc()) {

?>
 <tr>

    <td> <?php echo $publisher['publisher_id']; ?></td>
    
    <td><?php echo $publisher['publisher_name']; ?></td>
    <td><?php echo $publisher['publisher_city']; ?></td>
   
   
 </tr> 


      
<?php

}


?>
