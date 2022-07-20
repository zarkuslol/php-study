<?php

require("post.php");

$author = filter_input(INPUT_POST, 'author', FILTER_SANITIZE_SPECIAL_CHARS);

$post1 = new Post();
$post1->setAuthor($author);

echo "Nome do autor: " . $post1->getAuthor();

?>

<br>
<a href="index.php">Voltar</a>
