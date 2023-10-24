<?php

require_once("util-db.php");
require_once("model-books.php");



$pageTitle="Books";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']){

  case "Add":
  if (insertBooks($_POST['bTitle'], $_POST['bGenre'])) {
      echo '<div class="alert alert-success" role="alert">Book added.</div>';
  } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
  }
  break;

  }
  }



$books = selectBooks();
include "view-books.php";
include "view-footer.php";
?>
