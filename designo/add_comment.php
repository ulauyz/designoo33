<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $file = 'comments.txt';
    $currentContent = file_get_contents($file);
    if (strpos($currentContent, $name . ": " . $comment) === false) {
        $currentContent .= $name . ": " . $comment . "\n";
        file_put_contents($file, $currentContent);

    echo nl2br($currentContent); 
    exit();
}

$allComments = file_get_contents('comments.txt');
echo nl2br($allComments);
}
?>