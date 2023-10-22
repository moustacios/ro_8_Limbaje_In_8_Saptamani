<?php
/* program_operatori.php */
/* Pagina 1 */

$a = 20;
$b = -10;
$c = 5;
$d = 2;
$e = "PHP";
$h = "5";

// Folosim aceste variabile pentru formatarea textului afișat pe ecran
$separator = "\n";
$i         = 0;

// 1) Afișează rezultatul 20 + (-10)
print ++$i . ') ';
print ("{$a} + {$b} = ") . ($a + $b);
print $separator;

// 2) Afișează rezultatul 5 * 2
print ++$i . ') ';
print ("{$c} * {$d} = ") . ($c * $d);
print $separator;

// 3) Afișează rezultatul 5 ** 2 (5 la puterea 2)
print ++$i . ') ';
print ("{$c} ** {$d} = ") . ($c ** $d);
print $separator;

// 4) Afișează rezultatul -10 / 2
print ++$i . ') ';
print ("{$b} / {$d} = ") . ($b / $d);
print $separator;

/* program_operatori.php */
/* Pagina 2 */

// 5) Afișează rezultatul 5 % 2 (restul împărțirii 5 la 2)
print ++$i . ') ';
print ("{$c} % {$d} = ") . ($c % $d);
print $separator;

// 6) - 10 este mai mare decât 2?
print ++$i . ') ';
if ($b > $d) {
    print "$b is greater than $d.\n";
}
else {
    print "$d is greater than $b.\n";
}

// 7) 5*2 este mai mare decât 20/2?
print ++$i . ') ';
if ($c*$d > $a/2) {
    print "The result of the division is larger than {$a}/2.\n";
}
else {
    print "The result of the division is smaller than, or equal to {$a}/2.\n";
}

/* program_operatori.php */
/* Pagina 3 */

// 8) Compară două valori de tip string
print ++$i . ') ';
if ('PHP' == $e) {
    print "The variable is the word PHP.\n";
}

// 8) Compară o valoare string cu o valoare întreagă
print ++$i . ') ';
if ($h == $c) {
    print "The string variable h is equal to integer variable c.\n";
}

// 8) Compară o valoare string cu o valoare întreagă, fără conversie de tip
print ++$i . ') ';
if ($h === $c) {
    print "The string variable h is equal to integer variable c.\n";
}
else {
    print "The string variable h is not equal to variable c.\n";
    print "When using `===` the variable type is taken into account too.";
}
