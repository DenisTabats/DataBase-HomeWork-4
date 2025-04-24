<?php
include "functions.php";
addInfo($_POST['fio'], $_POST['passport'], $_POST['visa'], $_POST['status'], $_POST['dateVisa']);
header("Location:index.php");
?>