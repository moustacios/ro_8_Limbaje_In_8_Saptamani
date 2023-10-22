<?php
/* primul_program.php */

# Acesta este un comentariu;
# Putem scrie orice în comentarii, interpreterul ignoră aceste linii;

# Constantă, definită și asociată cu o valoare
const PHP_LAUNCH_YEAR = 1995;

# Variabile
$name = "Rasmus L.";
$action = "Learning PHP " . PHP_VERSION;

# Transferă data curentă, în format zi, Lună An în variabila $today
$today = date("j, M Y");

# Stochează diferența dintre cele două valori
$yrsOld = (date('Y') - PHP_LAUNCH_YEAR);

# Instrucțiuni
print "Hello I'm {$name}\n";
print "Today {$today}, I started {$action}\n";
print "PHP was launched in 1995, so it's {$yrsOld} years old.\n";

# Printează rezultatul funcției str_repeat() cu parametrii "-" și 120
# concatenat cu constanta PHP_EOL;
print str_repeat("-", 120) . PHP_EOL;
