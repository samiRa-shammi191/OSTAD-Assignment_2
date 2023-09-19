<?php

$first = 0;
$second = 1;

echo "The first 10 Fibonacci numbers are:\n";

for ($i = 0; $i < 10; $i++) {
  $next = $first + $second;

  if ($next > 100) {
    break;
  }

  echo $next . "\n";

  $first = $second;
  $second = $next;
}

?>
