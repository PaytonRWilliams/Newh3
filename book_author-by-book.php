<?php

require_once("util-db.php");
require_once("model-book_author-by-book.php");



$pageTitle="Book Author by Book";
include "view-header.php";
$book_author = selectBook_AuthorByBook($_POST['baid']);
include "view-book_author-by-book.php";
include "view-footer.php";
?>
