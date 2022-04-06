<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 1 - 16/03/2022</h1>
	<p><strong>Exercício 4</strong></p>
	<?php
	$pdp = 1000; //Preço do Produto
	$pav = $pdp - ($pdp*0.1); //Pagamento à Vistac com Desconto de 10%
	$psj = $pdp / 5; //Parcelas Sem Juro
	$pcj = ($pdp + ($pdp*0.2))/10 ; //parcelas Com Juro de 20%

	echo "Preço do Produto: ", $pdp, " reais <br>";
	echo "Caso pagamento à vista, 10% de Desconto: ", $pav, " reais <br>";
	echo "Caso pagamento à prazo em 5x sem juro, parcelas de: ", $psj, " reais <br>";
	echo "Caso pagamento à prazo em 10x com juro de 20%, parcelas de: ", $pcj, " reais";
	?>
</body>
</html>