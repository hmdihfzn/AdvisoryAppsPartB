<?php
function answer($n) {
    $primes = '2357111317192329'; 
    return substr($primes, $n, 5);
}

// Test cases
echo answer(0) . PHP_EOL; 
echo answer(1) . PHP_EOL;
?>