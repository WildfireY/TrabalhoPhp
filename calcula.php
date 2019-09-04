<!DOCTYPE html>
<html>
<head>
<style>
  .abaixo {
	  color: blue;
  }
  .normal {
	  color: green;
  }
  .acima {
	  color: red;
  }
</style>
</head>
<body>
<?php

$altura = $_POST['altura']/100;
$peso = $_POST['peso'];

$imc = $peso / ($altura * $altura);

if ($imc < 18) {
	echo "<h1 class='abaixo'>O seu IMC é <b>$imc</b> e está abaixo do peso.</h1>";
} else if ($imc >= 18 && $imc <= 23) {
	echo "<h1 class='normal'>O seu IMC é <b>$imc</b> e está peso OK.</h1>";
} else {
	echo "<h1 class='acima'>O seu IMC é <b>$imc</b> e está acima do peso.</h1>";
}


// < 18 - abaixo do peso - AZUL
// => 18 e =< 23 - peso normal - VERDE
// > 23 - acima do peso - VERMELHO

?>
</body>
</html>