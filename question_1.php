<?php 

//Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print. Also do the same using while loop and do-while loop also.




// Function to print even numbers with a specified start, end, and step
//  evenStart using 1 not showed any output that's reasons i need to use 2.
function printEvenNumbers($evenStart, $evenEnd, $evenStep){
    for($i=$evenStart; $i<=$evenEnd;  $i=$i+$evenStep){
        if($i%2==0){
            echo $i . "<br>";
        }
        
    }
};

printEvenNumbers(2,20,2);

echo PHP_EOL;
// while loop
$i = 2;
while($i<=20){
    echo $i ."<br>";
    $i = $i+2;
    
}

echo PHP_EOL;
// do while loop
$n = 2;
do{
    echo $n . "<br>";
    $n = $n+2;
}while($n <=20);








?>