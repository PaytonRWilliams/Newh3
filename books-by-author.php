<?php
require_once("util-db.php");
require_once("model-books-by-authors.php");

$pageTitle = "Books by Authors";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertBook_Author($_POST['aid'], $_POST['bid'], $_POST['position'])) {
        echo '<div class="alert alert-success" role="alert">Section added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateBook_Author($_POST['aid'], $_POST['bid'], $_POST['position'], $_POST['baid'])) {
        echo '<div class="alert alert-success" role="alert">Section edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteBook_Author($_POST['baid'])) {
        echo '<div class="alert alert-success" role="alert">Section deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$authors = selectAuthors();
include "view-books-by-author.php";
include "view-footer.php";
?>
