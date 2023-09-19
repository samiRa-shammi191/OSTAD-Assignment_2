<?php
function print_fibonacci_series($n) {
  $first = 0;
  $second = 1;

  echo "The first $n Fibonacci numbers are:\n";

  for ($i = 0; $i < $n; $i++) {
    $next = $first + $second;

    echo $next . "\n";

    $first = $second;
    $second = $next;
  }
}

print_fibonacci_series(15);
?>
