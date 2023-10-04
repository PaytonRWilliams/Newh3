<?php

require_once("util-db.php");
require_once("model-books-by-author.php");



$pageTitle="Positions by Book";
include "view-header.php";
$positions = selectPositionsByBook($_POST['bid']);
include "view-positions-by-book.php";
include "view-footer.php";
?>
