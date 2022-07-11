<form action="receiver.php" method="POST">
    <label>
        Novo Nome: <br>
        <input type="text" name="nome">
        <input type="submit" value="Adicionar">
    </label>
</form>

<br>

<h1>Lista de Nomes</h1>
<ul>
    <?php

    $file = file_get_contents("nome.txt");
    $array = explode("\n", $file);

    foreach($array as $item) {
        if($item !== "")
            echo "<li>$item</li>";
    }

    ?>
</ul>
