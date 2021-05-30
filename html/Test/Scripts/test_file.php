<?php
    $fh = fopen("testfile.txt", 'w') or die("Failed to access file");
    $text = "This should be written in the text file\n";
    $info = $_POST["fname"] . " " . $_POST["lname"] . "\n";

    fwrite($fh, $text) or die("Could not write to file");
    fwrite($fh, $info) or die("Could not write to file");
    fclose($fh);
    echo "file written successfully"
?>