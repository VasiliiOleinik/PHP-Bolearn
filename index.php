<?php
echo "BOOLEAN <br/>";
echo "<hr>";

//Boolean 1
echo "Boolean 1. Дано целое число А. Проверить истинность высказывания: Число А является положительным <br/><br/>";

$a = 1769;
echo "Дано число :$a<br/>";
if ($a > 0) {
	echo "Число $a положительное";
} else {
	echo "Число $a отрицательное";
}
echo "<hr>";

//Boolean 2-3
echo "Boolean 2-3. Дано целое число А. Проверить истинность высказываний: <br/>
1. Число А является нечетным<br/>
2. Число А является четным <br/><br/>";

$a = 31;
echo "Дано число :$a<br/>";
if ($a % 2 != 0) {
	echo "Число $a нечетное";
} else {
	echo "Число $a четное";
}
echo "<hr>";

//Boolean 4
echo "Boolean 4. Даны 2 челых числа А и В. Проверить истинность высказывания: Справедливы равенства А > 2 и B <= 3  <br/><br/>";

$a = 90;
$b = 48;
echo "Даны числа :$a и $b<br/>";
if ($a > 2 ) {
	echo "Равенство А > 2 справедливо<br/>";
}  else {
	echo "Равенство А > 2 несправедливо<br/>";
} 
if ($b <= 3 ) {
	echo "Равенство B <= 3 справедливо<br/>";
}  else {
	echo "Равенство B <= 3 несправедливо<br/>";
} 
echo "<hr>";

//Boolean 5
echo "Boolean 5. Даны 2 челых числа А и В. Проверить истинность высказывания: Справедливы равенства А >= 0 или B < -2  <br/><br/>";

$a = 11;
$b = -51;
echo "Даны числа :$a и $b<br/>";
if (($a >= 0 ) || ($b < -2 )){
	echo "Справедливы равенства А >= 0 или B < -3<br/>";
}  else {
	echo "Равенство  несправедливо<br/>";
} 
echo "<hr>";

//Boolean 6
echo "Boolean 6. Даны три целых числа А, В и С. Проверить истинность высказывания: Справедливо двойное неравенство А < B < C  <br/><br/>";

$a = 10;
$b = 100;
$c = 200;
echo "Даны числа :$a, $b и $c<br/>";
if (($a < $b) && ($b < $c)) {
	echo "Двойное неравенство А < B < C справедливо<br/>";
}  else {
	echo "Неравенство А < B < C несправедливо<br/>";
} 
echo "<hr>";

//Boolean 7
echo "Boolean 7. Даны три целых числа А, В и С. Проверить истинность высказывания: Число В находится между числами А и С  <br/><br/>";

$a = 50;
$b = 60;
$c = 120;
echo "Даны числа :$a, $b и $c<br/>";
if (($b < $a) && ($b > $c)) {
	echo "Число В находится между числами А и С<br/>";
} elseif (($b > $a) && ($b < $c)) {
	echo "Число В находится между числами А и С<br/>";
}  
else {
	echo "Число В не находмтся между числами А и С<br/>";
} 
echo "<hr>";

//Boolean 8
echo "Boolean 8. Даны три целых числа А и В. Проверить истинность высказывания: Каждое из чисел А и В нечетное <br/><br/>";

$a = 80;
$b = 100;
echo "Даны числа :$a и $b<br/>";
if ($a % 2 != 0 && $b % 2 != 0) {
	echo "Число $a и $b нечетное";
} else {
	echo "Число $a и $b четное";
}
echo "<hr>";

//Boolean 9
echo "Boolean 9. Даны три целых числа А и В. Проверить истинность высказывания: Хотя бы одно из чисел А и В нечетное <br/><br/>";

$a = 80;
$b = 100;
echo "Даны числа :$a и $b<br/>";
if ($a % 2 != 0 && $b % 2 != 0) {
	echo "Число $a и $b нечетное";
} else {
	echo "Число $a и $b четное";
}
echo "<hr>";
