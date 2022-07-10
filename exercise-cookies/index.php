<?php

require("header.php");

session_start();

if (isset($_SESSION["warning"])) {
    echo $_SESSION["warning"];
    $_SESSION["warning"] = "";
}

?>

<form action="receiver.php" method="POST">
    <label>
        Qual o seu nome? <br>
        <input type="text" name="input"><br>
    </label>
    <br>

    <input type="submit" value="Salvar">

    <a href="delete.php">Apagar Cookie</a>
</form>
