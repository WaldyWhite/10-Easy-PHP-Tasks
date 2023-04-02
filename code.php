 <?php
/*-------------------------------------------------------------
| Task 13.8.1 Program to find maximum of two numbers (if-else) |
 -------------------------------------------------------------*/

/* $firstNumber = readline("Enter the first number: ");
$secondNumber = readline("Enter the second number: ");
if($firstNumber > $secondNumber) {
    $maxNumber = $firstNumber;
} else {
    $maxNumber = $secondNumber;
};

echo 'Maximum value: '.$maxNumber; */

//--------------------------------------------------------------

/*------------------------------------------------------------
| Task 13.8.2 Program to check profit or loss (if-elseif-else)|
 ------------------------------------------------------------*/

/* $inOne = readline("Enter the first number: ");
$inTwo = readline("Enter the second number: ");

if($inOne > $inTwo) {
    echo 'Profit: '.($inOne - $inTwo);
} elseif($inOne < $inTwo) {
    echo 'loss: '.($inOne - $inTwo).PHP_EOL;
} else {
    echo 'There is no profit or loss';
} */

//-------------------------------------------------------------


/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------
| Task 13.8.3 Program to display the name of the day of the week by number, using 'switch'. Will throw an error if the entered number is less than 1 or greater than 7. |
 ----------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/* $i = readline('Enter the day nummmber: ');
switch($i) {
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    case 3:
        echo 'Wednesday';
        break;
    case 4:
        echo 'Thursday';
        break;
    case 5:
        echo 'Friday';
        break;
    case 6:
        echo 'Saturday';
        break;
    case 7:
        echo 'Sunday';
        break;
    default:
        throw new Exception('Error! You cannot enter a number less than 0 and greater than 8');
    }; */

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------

/*------------------------------------------------------------
| Task 13.8.4 Program to find maximum of two numbers (switch) |
 ------------------------------------------------------------*/

/* $int1 = readline("Enter the first number: ");
$int2 = readline("Enter the second number: ");
switch ($int1 > $int2) {
    case true:
        $max = $int1;
        break;
    case false:
        $max = $int2;
        break;
}
echo $max; */

//------------------------------------------------------------

/*---------------------------------------------------------------------------------
| Task 13.8.5 Program that prints all integers from 1 to  << n >> using (for). N:1 |
 ---------------------------------------------------------------------------------*/

/*  $n = readline('Enter the nummmber: ');
 for($i = 1; $i <= $n; $i++) {
    if($i == $n) {
        echo $i;
    } else { echo $i.', ';
        }
 } */

//---------------------------------------------------------------------------------

/*---------------------------------------------------------------------------------
| Task 13.8.6 Program that prints all integers from 1 to  << n >> using (for). N:2 |
 ---------------------------------------------------------------------------------*/

/*  $n = readline('Enter the nummmber: ');
 for($i = 1; $i <= $n; $i++) {
    if($i % 2 == 0) {
        echo "$i \n";
    }
 } */

//---------------------------------------------------------------------------------

/*---------------------------------------------------------------------------------------------------------
| Task 13.8.7 a Program that determines the age of majority from the entered age, using a ternary operator.|
 ---------------------------------------------------------------------------------------------------------*/

/* $age = readline('Enter your age: ');

    echo ($age >= 18)? 'You are of legal age': 'You are underage'; */

//---------------------------------------------------------------------------------------------------------

/*-----------------------------------------------------------------------------------------------------------------------------------------
| Task 13.8.8 a Program that divides the number 10 by n and stops the program with the message "No way!" on division error using try-catch.|
 -----------------------------------------------------------------------------------------------------------------------------------------*/

/* $digit1 = readline("Enter the first number: ");
 $digit2 = readline("Enter the second number: ");
try {
    echo intdiv($digit1, $digit2).PHP_EOL;
} catch (DivisionByZeroError $error) {
    throw new Exception("Error ! division by zero");
}
echo 'Program completed successfully.'; */

//-----------------------------------------------------------------------------------------------------------------------------------------

/*-----------------------------------------------------------------------------------------
| Task 13.8.9 a Program for calculating the sum of numbers from 1 to <<n>> using recursion.|
 -----------------------------------------------------------------------------------------*/

/* function sum($num) {
if($num == 1) {
        return 1;
    }
    $count = $num + sum($num -1);
    return $count;
}
echo sum(readline("Enter the number: ")); */

//-----------------------------------------------------------------------------------------

/*----------------------------------------------------------------------
| Task 13.8.10 a Program to print the first 20 integers using recursion.|
 ----------------------------------------------------------------------*/

/* function numbers($n1,$n2) {
    
     if ($n1 <= $n2) {
         echo $n1 . "\n";
         numbers($n1+1, $n2);
     }   
 }
numbers(5,20); */

//-----------------------------------------------------------------------