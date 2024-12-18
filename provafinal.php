<?php
//1ºQUESTÃO
echo "digite o raio do círculo: ";
$raio = (float) fgets(STDIN);
$perimetro = 2 * M_PI * $raio;
$area = M_PI * pow($raio, 2);
echo "perímetro do círculo: " . number_format($perimetro, 2) . "\n";
echo "area do círculo: " . number_format($area, 2) . "\n";
?>

<?php
//2º QUESTÃO
echo "digite a primeira nota: ";
$nota1 = (float) fgets(STDIN);
echo "digite a segunda nota: ";
$nota2 = (float) fgets(STDIN);
echo "digite a terceira nota: ";
$nota3 = (float) fgets(STDIN);
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média do aluno é: " . number_format($media, 2) . "\n";
?>

<?php
//3ºQUESTÃO
echo "Digite a temperatura em Fahrenheit: ";
$fahrenheit = (float) fgets(STDIN);
$celsius = 5 * ($fahrenheit - 32) / 9;
echo "A temperatura em Celsius é: " . number_format($celsius, 2) . "°C\n";
?>

<?php
//4º QUESTÃO
echo "Digite a temperatura em Celsius: ";
$celsius = (float) fgets(STDIN);
$fahrenheit = ($celsius * 9 / 5) + 32;
echo "A temperatura em Fahrenheit é: " . number_format($fahrenheit, 2) . "°F\n";
?>