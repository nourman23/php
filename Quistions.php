<?php

# Q1
$my_year = 1900;

if (($my_year % 100 != 0 && $my_year % 4 == 0) || $my_year % 400 == 0)
    print("It is a leap year");
else
    print("It is not a leap year");

echo "<br><br>";

// =====================================================


# Q2

$temp = 27;

if ($temp > 20)
    print "It is summer time";
else
    print "It is winter time";
echo "<br><br>";
// =====================================================

# Q3

/*

Write a PHP script to calculate the sum of the two integers. If the two values ​​are the same, then calculate the triple of their sum.
Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
Sample Output: ( 2 + 2 ) * 3 = 12
Sample Output: ‘It is summertime!’

*/

$n1 = 7;
$n2 = 3;

if ($n1 == $n2)
    print ($n1 + $n2) * 3;
else
    print $n1 + $n2;
echo "<br><br>";
// =====================================================

# Q4


/*
    Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’

    */

$num1 = 7;
$num2 = 3;

$sum = $num1 + $num2;

if ($sum == 30)
    print $sum;
else
    print "false";
echo "<br><br>";
// =====================================================

# Q5

/*
Write in PHP script to check if the given positive number is a multiple of 3.
Sample Input: number = 20
Sample Output: ‘false’

*/

$number = 20;

if ($number % 3 == 0)
    print "True";
else
    print "False";
echo "<br><br>";

// =====================================================

# Q6

/*

Write a PHP script to check if the integer value ​​is in the range of [20-50] inclusive.
Sample Input: number = 50
Sample Output: ‘true’

*/

$val = 50;

if ($val >= 20 && $val <= 50)
    print "true";
else
    print "false";
echo "<br><br>";
// =====================================================

# Q7

/*
Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9

*/
$inputs = array(1, 5, 9);
$max = 0;

foreach ($inputs as $v) {
    if ($v > $max)
        $max = $v;
}

print $max;
echo "<br><br>";

// =====================================================

# Q8

/*
Write PHP script to calculate the monthly electricity bill according to these rules

For first 50 units – 2.50 JOD/Unit
For next 100 units – 5.00 JOD/Unit
For next 100 units – 6.20 JOD/Unit
For units above 250 – 7.50 JOD/Unit

*/
$unit = 145;
$pill = 0;

if ($unit <= 50) {
    echo $pill = $unit * 2.50;
} elseif ($unit <= 150) {
    echo $pill = $unit * 5;
} elseif ($unit <= 250) {
    echo   $pill = $unit * 6.20;
} else {
    echo  $pill = $unit * 7.50;
}




// =====================================================

# Q9

/*
 Write php script to make a calculator, the calculator should contain the four main operations 

Addition
Subtraction
Multiplication
Division

*/

$num1 = 3;
$num2  = 9;

$op = '+';

switch ($op) {
    case '+':
        print $num1 + $num2;
        break;
    case '-':
        print $num1 - $num2;
        break;
    case '*':
        print $num1 * $num2;
        break;
    case '/':
        print $num1 / $num2;
        break;
}
echo "<br><br>";


// =====================================================

# Q10

/*
Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

Sample Input: 15
Sample Output: ‘is no eligible to vote’
*/

$age = 15;
if ($age < 18)
    print "is not eligible to vote";
else
    print "eligible to vote";

echo "<br><br>";


// =====================================================

# Q11

/*
    Write php script  to check whether a number is positive, negative or zero

Sample Input: -60
Sample Output: ‘Negative’

    */

$posORneg = -60;
if ($posORneg < 0)
    print "Negative";
elseif ($posORneg > 0)
    print "Positive";
else
    print "zero";

echo "<br><br>";

// =====================================================

# Q12

/*
    
Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’


    */

$marks = array(60, 86, 95, 63, 55, 74, 79, 62, 50);

$sum = 0;

foreach ($marks as $val) {
    $sum += $val;
}
$avg = $sum / count($marks);
if ($avg < 60)
    print "F";
elseif ($avg < 70)
    print "D";
elseif ($avg < 80)
    print "C";
elseif ($avg < 90)
    print "B";
elseif ($avg < 100)
    print "A";
echo "<br><br>";

// =====================================================