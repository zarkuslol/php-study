<?php

require("header2.php");

$weight = $_POST['weight'];
$height = $_POST['height'];	
$imc = ($weight / (pow($height / 100, 2)));

echo "Seu IMC é de " . round($imc, 2) . "<br><br>";

switch ($imc) {
	case ($imc >= 18.5 && $imc < 25):
		echo "NORMAL<br><br>";
		break;
	case ($imc >= 25 && $imc < 30):
		echo "SOBREPESO<br><br>";
		break;
	case ($imc >= 30 && $imc <= 40):
		echo "OBESIDADE<br><br>";
		break;
	case ($imc > 40):
		echo "OBESIDADE GRAVE<br><br>";
		break;
}

?>

<a href="main.php">Voltar</a>
