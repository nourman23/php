<?php

//FUNCTIONS 

//Q1


/*
Write a PHP script to check if the inserted number is a prime number 
 
Sample Input:  3
Expected Output: 3 is a prime number 

*/
$num = 3;
echo isPrime($num);

function isPrime($n)
{
    $dividedNums = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0)
            $dividedNums++;
    }

    if ($dividedNums > 2)
        return "$n isn't a prime number";
    else
        return "$n is a prime number";
}

echo "<br><br>";
// =====================================================

//Q2

/*
Write a PHP script to reverse a string 
 
Sample Input:  remove
Expected Output: evomer

*/

$str = "remove";

echo reverse_str($str);

function reverse_str($str)
{
    $revStr = "";
    $index = 0;
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $revStr[$index] = $str[$i];
        $index++;
    }

    return $revStr;
}

echo "<br><br>";
// =====================================================

//Q3

/*
 Write a PHP script to check if the all string characters are lower cases
 
Sample Input:  remove
Expected Output: Your String is Ok 
*/

$string = "remove";
echo isLower($string);

function isLower($str)
{
    $ChkStr = "";
    for ($i = 0; $i < strlen($str); $i++) {
        if (!(ord($str[$i]) >= 97 && ord($str[$i]) <= 122)) {
            $ChkStr = "Your String isn't Ok";
            return $ChkStr;
        } else
            $ChkStr = "Your String is Ok";
    }

    return  $ChkStr;
}


echo "<br><br>";
// =====================================================

//Q4

/*
 
Write a PHP function to swap to variables?
 
Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10 


*/

$x = 12;
$y = 10;

echo "x = $x , y = $y <br>";
swap($x, $y);
echo "x = $x , y = $y";
function swap(&$n1, &$n2)
{
    $sw = $n1;
    $n1 = $n2;
    $n2 = $sw;
}

echo "<br><br>";
// =====================================================

//Q6

/*
Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.
 
Sample Input:  407
Expected Output: 407 is Armstrong Number 
*/

$number = 407;

echo isArmstrongNum($number);

function isArmstrongNum($num)
{
    $sum = 0;
    $x = $num;
    while ($x != 0) {
        $rem = (int)$x % 10;
        $sum = $sum + $rem * $rem * $rem;
        $x = $x / 10;
    }
    if ($num == $sum)
        return "$num is Armstrong Number ";

    return "$num isn't Armstrong Number ";
}


echo "<br><br>";
// =====================================================

//Q7

/*

Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input:  Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome 

*/


// PHP code to check for Palindrome string in PHP
// Using strrev()
function Palindrome($string)
{
    $newStr = "";
    $index = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (ord($string[$i]) >= 97 && ord($string[$i]) <= 122 || ord($string[$i]) >= 65 && ord($string[$i]) <= 90) {
            $newStr[$index] = strtolower($string[$i]);

            $index++;
        }
    }

    echo $newStr . "<br>";
    if (strrev($newStr) == $newStr) {
        return 1;
    } else {
        return 0;
    }
}

// Driver Code
$original = "Eva, can I see bees in a cave?";
if (Palindrome($original)) {
    echo "Yes it is a palindrome ";
} else {
    echo "No it isn't a palindrome ";
}

echo "<br><br>";
// =====================================================

//Q8

/*
Write a PHP function to remove duplicates from an array ?
 
Sample Input:  

$array1 = array(2, 4, 7, 4, 8, 4);
 
Expected Output:

$array1 = array(2, 4, 7, 8);
*/


$arr = array(2, 4, 7, 4, 8, 4);
echo "<pre>";
print_r($arr);
echo "</pre>";
removeDuplicates($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

function removeDuplicates(&$array)
{
    for ($i = 0; $i <= count($array); $i++) {
        for ($j = $i + 1; $j <= count($array); $j++) {
            if (!isset($array[$j]) || !isset($array[$i]))
                continue;
            elseif ($array[$j] == $array[$i])
                unset($array[$j]);
        }
    }

    return $array;
}