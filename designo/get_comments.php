<?php
$file = 'comments.txt';

if (file_exists($file)) {
   $comments = file_get_contents($file);
   echo nl2br($comments);
} else {
   echo 'No comments yet.';
}
?>