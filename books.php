<?php

require_once("util-db.php");
require_once("model-books.php");



$pageTitle="Books";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']){

  case "Add";
  insertBook($_POST['bTitle'], $_POST['bGenre']);
  break;

  }
  }



$books = selectBooks();
include "view-books.php";
include "view-footer.php";
?>
