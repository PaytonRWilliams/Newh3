<?php

require_once("util-db.php");
require_once("model/authors-chart-db.php");



$pageTitle="Authors chart";
include "view-header.php";
$authors = selectAuthors();
include "view/authors-chart/page.php";
include "view-footer.php";
?>
