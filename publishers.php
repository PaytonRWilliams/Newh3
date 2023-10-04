<?php

require_once("util-db.php");
require_once("model-publishers.php");



$pageTitle="Publishers";
include "view-header.php";
$authors = selectPublishers();
include "view-publishers.php";
include "view-footer.php";
?>
