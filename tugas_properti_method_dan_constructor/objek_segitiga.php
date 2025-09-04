<?php
require_once "class_segitiga.php";

$segitiga1 = new Segitiga(10, 8, 6, 8, 6);
echo $segitiga1->tampilkanInfo();

$segitiga2 = new Segitiga(5, 4.33, 5, 5, 5);
echo $segitiga2->tampilkanInfo();
?>