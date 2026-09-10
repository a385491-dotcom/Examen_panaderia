<?php
$concha = $_POST['concha'];
$marranito = $_POST['marranito'];
$yoyo = $_POST['yoyo'];
$librito = $_POST['librito'];
$rayada = $_POST['rayada'];

$prConcha = 15;
$prMarranito = 18;
$prYoyo = 20;
$prLibrito = 8;
$prRayada = 25;

$totalConcha = $concha * $prConcha;
$totalMarranito = $marranito * $prMarranito;
$totalYoyo = $yoyo * $prYoyo;
$totalLibrito = $librito * $prLibrito;
$totalRayada = $rayada * $prRayada;

$total = $totalConcha + $totalMarranito + $totalYoyo + $totalLibrito + $totalRayada;


if ($concha > 0) 
	{
        	echo "Concha: " . $concha . " x $" . $precioConcha . " = $" . $totalConcha . "<br>";
	}

    if ($dona > 0)
	{
        	echo "Dona: " . $dona . " x $" . $precioDona . " = $" . $totalDona . "<br>";
	}

    if ($cuernito > 0)
	{
        	echo "Cuernito: " . $cuernito . " x $" . $precioCuernito . " = $" . $totalCuernito . "<br>";
	}

    if ($bolillo > 0)
	{
        	echo "Bolillo: " . $bolillo . " x $" . $precioBolillo . " = $" . $totalBolillo . "<br>";
	}

    if ($chocolate > 0)
	{
        	echo "Pan de chocolate: " . $chocolate . " x $" . $precioChocolate . " = $" . $totalChocolate . "<br>";
	}

echo "Total a pagar: $total<br><br>";
?>
