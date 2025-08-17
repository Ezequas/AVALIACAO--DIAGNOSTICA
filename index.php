<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<h1> Questão 1 </h1>

<?php

$temp1 = 31;
$temp2 = 14;
$temp3 = 22;
$temp4 = 44;
$temp5 = 32;


if ($temp1 > 30) {

echo " Temperatura 1: " .$temp1. " °C - Alerta Temperatuura Alta !<br>";

}

elseif ($temp1 < 15 ) {

echo " Temperatura 1: " .$temp1. " °C - Alerta Temperatura Baixa !<br>";

}

else {

echo " Temperatura 1: " .$temp1. " °C - Temperatura Normal <br>";

}

if ($temp2 > 30) {

echo " Temperatura 2: " .$temp2. " °C - Alerta Temperatura Alta! <br>";

}

elseif ($temp2 < 15 ) {

echo " Temperatura 2: " .$temp2. " °C - Alerta Temperatuura Baixa !<br>";

}

else {

echo " Temperatura 2: " .$temp2. " °C - Temperatuura Normal <br>";

}


if ($temp3 > 30) {

echo " Temperatura 3: " .$temp3. " °C - Alerta Temperatuura Alta !<br>";

}

elseif ($temp3 < 15 ) {

echo " Temperatura 3: " .$temp3. " °C - Alerta Temperatuura Baixa !<br>";

}

else {

echo " Temperatura 3: " .$temp3. " °C - Temperatura Normal !<br>";

}


if ($temp4 > 30) {

echo " Temperatura 4: " .$temp4. " °C - Alerta Temperatura Alta !<br>";


}

elseif ($temp4 < 15 ) {

echo " Temperatura 4: " .$temp4. " °C - Alerta Temperatura Baixa !<br>";

}

else {

echo " Temperatura 4: " .$temp4. " °C - Temperatura Normal !<br>";

}


if ($temp5 > 30) {

echo " Temperatura 5: " .$temp5. " °C - Alerta Temperatura Alta !<br>";

}

elseif ($temp5 < 15 ) {

echo " Temperatura 5: " .$temp5. " °C - Alerta Temperatura Baixa !<br>";

}

else {

echo " Temperatura 5: " .$temp5. " °C - Temperatura Normal !<br>";

}

$media = ($temp1 + $temp2 +$temp3 + $temp4 + $temp5) / 5;



echo "<br> A Media da Temperatura e de: " .$media. "°C";

?>

<h1> Questão 2 </h1>

<?php  

$tabuada = 7;
$i = 1;

  

while ($i <= 10) {

$resultado = $tabuada * $i;

    if ($resultado % 2 == 0) {

echo " $tabuada x $i = " .$resultado. " (Par) <br> ";

} else {

echo"$tabuada x $i = " .$resultado. " (impar) <br>";

}

$i++;

}

?>

<h1>Questão 3 </h1>

<?php  

$arroz = 40;
$feijao = 50;
$bola = 80;
$biscoito = 20;
$sorvete = 80;

$valortotal = ($arroz + $feijao + $bola + $biscoito + $sorvete);

if ($valortotal > 200) {

$desconto = ($valortotal * 10) / 100; 

$resultado = $valortotal - $desconto;

echo "Valor Total da Compras R$: " .$valortotal. "<br>";

echo "<br> Desconto de 10% Aplicado R$: " .$resultado. "<br>";

} else {

echo "Valor da Compras R$: " .$valortotal;

}

?>

<h1> Questão 4 </h1>


<?php   

$idade1 = 15;
$idade2 = 25;
$idade3 = 60;
$idade4 = 10;
$idade5 = 19;

$idades = [$idade1, $idade2, $idade3, $idade4, $idade5];


$qtdCrianca = 0;
$qtdAdolescente = 0;
$qtdAdulto = 0;
$qtdIdoso = 0;

foreach ($idades as $chave => $idade) {

    $pessoa = $chave + 1;

    if ($idade < 12) {

        $categoria = "Criança";
        $qtdCrianca++;

    } elseif ($idade <= 19) {

        $categoria = "Adolescente";
        $qtdAdolescente++;

    } elseif ($idade <= 59) {

        $categoria = "Adulto";
        $qtdAdulto++;

    } else {

        $categoria = "Idoso";
        $qtdIdoso++;
    }

    echo "Pessoa $pessoa (idade $idade): $categoria <br>";
}


echo "<hr>";
echo "Total de Crianças: $qtdCrianca <br>";
echo "Total de Adolescentes: $qtdAdolescente <br>";
echo "Total de Adultos: $qtdAdulto <br>";
echo "Total de Idosos: $qtdIdoso <br>";

?>


</body>
</html>
