<?php

require_once("util-db.php");
require_once("model-publishers.php");



$pageTitle="Publishers";
include "view-header.php";



if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']){

  case "Add":
  if (insertPublishers($_POST['pName'], $_POST['pcity'])) {
      echo '<div class="alert alert-success" role="alert">Author added.</div>';
  } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
  }
  break;

case "Edit":
  if (updateAuthors($_POST['aName'], $_POST['aGender'], $_POST['aid'])) {
      echo '<div class="alert alert-success" role="alert">Author edited.</div>';
  } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
  }
  break;




        
 case "Delete":
  if (deleteAuthors($_POST['aid'])) {
      echo '<div class="alert alert-success" role="alert">Author deleted.</div>';
  } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
  }
  break;
        

  }
  }












$authors = selectAuthors();
include "view-authors.php";
include "view-footer.php";
?>
