<?php 
function print_EvenNumbers_With_ForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
         
        echo $i . ' ';
    }

}

print_EvenNumbers_With_ForLoop(2, 20, 2);
echo "<br>";










?>