<?php

if (file_exists("test.txt")) {
    $file = "test.txt";
    $contents = file_get_contents($file);
    
    $file_lines = file($file);
    $contents_from_file_array = implode("", $file_lines);
    
} else {
    $newfile = fopen("test.txt", "w");
    header("Refresh:0");
}

?>

<form action="test_run.php" method="post">
    <textarea name="comments">
    </textarea>
    <input type="submit">
</form>