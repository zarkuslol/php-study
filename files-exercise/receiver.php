<?php

$name = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$file = file_get_contents("nome.txt");

$file .= "$name\n";

file_put_contents("nome.txt", $file);

header("Location: index.php");
exit();
