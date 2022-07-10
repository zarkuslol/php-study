<?php

$input = filter_input(INPUT_POST, "input");

if (isset($input)) {
    $expiration = time() + (86400 * 30);
    setcookie("input", $input, $expiration);

    echo "Nome digitado anteriormente: $input<br><br>";
}
else {
    $_SESSION["warning"] = "Preencha todos os dados como foi pedido";

    header("Location: index.php");
    exit();
}

?>

<a href="index.php">Voltar</a>
