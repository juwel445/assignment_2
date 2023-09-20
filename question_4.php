<?php 
/*
Task 4: Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.
*/

// 
function fifteenFibonacci($n) {
    $first = 0;
    $second = 1;
    
    echo "$first ". "<br>". "$second" . "<br>";   
    
    for ($i = 2; $i < $n; $i++) {
        $next = $first + $second;     
        echo $next . "<br>"; 
        $first = $second; 
        $second = $next; 
    }
}

// Call the function
fifteenFibonacci(15);








?>