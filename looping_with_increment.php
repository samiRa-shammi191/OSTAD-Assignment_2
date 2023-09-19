<?php 
function print_EvenNumbers_With_ForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
         
        echo $i . ' ';
    }

}

print_EvenNumbers_With_ForLoop(2, 20, 2);
echo "<br>";


function print_EvenNumbers_With_WhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i . ' ';
        $i += $step;
    }
}

print_EvenNumbers_With_WhileLoop(2, 20, 2);
echo "<br>";













?>