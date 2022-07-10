<?php

if (isset($_COOKIE["input"])) {
    $newExp = time() - 86400;
    setcookie("input", "", $newExp);

    header("Location: index.php");
    exit();
}
