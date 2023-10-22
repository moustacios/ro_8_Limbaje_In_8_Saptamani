<?php
/* program_structuri.php */

# If (expresie) { execută cod }
if (PHP_MAJOR_VERSION > 7) {
    print "You have the latest PHP version";
}

# If (expresie) { execută cod } Else { execută alt cod }
if (PHP_MAJOR_VERSION > 7) {
    print "You have the latest PHP version";
}
else {
    print "Please upgrade PHP to the latest version.";
}

$fruits      = ["orange", "banana", "peach", "plum", "apple"];
$fruitsILike = ["banana", "apple"];

# Foreach( listă ca item ) { execută cod }
foreach ($fruits as $fruit) {
    # Dacă (item se găsește în listă) { print ... }
    if (in_array($fruit, $fruitsILike)) {
        print "I like {$fruit}.";
    }
    # Altfel { print ... }
    else {
        print "I don't like {$fruit}.";
    }
}

$holidayDays   = [1, 2, 24, 25, 30];
$daysThisMonth = date('t');
$monthName     = date('F');

# For (index = start; index < max; index ++) { execută cod }
for ($i=1; $i<$daysThisMonth; $i++) {
    if (in_array($i, $holidayDays)) {
        print "{$monthName} {$i}, is a Holiday.";
    }
}
