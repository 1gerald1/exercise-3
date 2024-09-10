<?php
$comment = $_POST["comments"];
$file = "test.txt";
file_put_contents($file, $comment);
echo $comment;
?>

