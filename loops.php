<?php
//LOOPS

//Q1 

/*
Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. 
There will be no dash (-) at the start and end position. 
Expected Output: 1-2-3-4-5-6-7-8-9-10
*/

$dis = "";
for ($i = 1; $i <= 10; $i++) {
    $dis .= $i . "-";
}
echo substr($dis, 0, -1);

echo "<br><br>";
// =====================================================

//Q2

/*
Create a script using a for loop to add all the integers between 0 and 30 and display the total. 
 
Expected Output:  total as a number 

*/

$total = 0;
for ($i = 0; $i <= 30; $i++)
    $total = $total + $i;

echo $total;

echo "<br><br>";
// =====================================================

//Q3

/*
Create a script to generate the following pattern, using the nested for loop. 
 
Expected Output:
 
A A A A A 
A A A B B 
A A C C C 
A D D D D 
E E E E E

*/

$chars = range('A', 'E');

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($j < (4 - $i)) {
            echo $chars[0] . "&nbsp ";
        } else
            echo $chars[$i] . "&nbsp ";
    }
    echo "<br>";
}

echo "<br><br>";
// =====================================================

//Q4

/*
Create a script to generate the following pattern, using the nested for loop. 
 
Expected Output:
 
1 1 1 1 1 
1 1 1 2 2 
1 1 3 3 3 
1 4 4 4 4 
5 5 5 5 5

*/

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($j < (4 - $i)) {
            echo 1 . "&nbsp ";
        } else
            echo $i + 1 . "&nbsp ";
    }
    echo "<br>";
}

echo "<br><br>";
// =====================================================

//Q5

/*

Create a script to generate the following pattern, using the nested for loop. 
 
Expected Output:
 
1 0 0 0 0 
0 2 0 0 0 
0 0 3 0 0 
0 0 0 4 0 
0 0 0 0 5

  */

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j == $i) {
            echo $i . "&nbsp ";
        } else
            echo 0 . "&nbsp ";
    }
    echo "<br>";
}

echo "<br><br>";
// =====================================================

//Q6

/*
Write a program to calculate and print the factorial of a number using a for loop.
 The factorial of a number is the product of all integers up to and including that number.
 
Sample Input: 5
Expected Output: 120

*/


$fact = 1;
$num = 5;
for ($i = 1; $i <= $num; $i++) {
    $fact = $fact * $i;
}

echo $fact;

echo "<br><br>";
// =====================================================

//Q7

/*
Write a program to calculate and print the Fibonacci sequence using a for loop.
Fibonacci is a series of numbers where a number is the sum of previous two numbers.
 Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 
 
Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, …

*/
$fibo = array();
for ($i = 0; $i < 9; $i++) {
    if ($i < 2)
        $fibo[$i] = $i;
    else
        $fibo[$i] = ($fibo[$i - 1]) + ($fibo[$i - 2]);
}

foreach ($fibo as $v) {
    echo $v . " ";
}

echo "<br><br>";
// =====================================================

//Q8

/*
Write a program which will count the "c" characters in the text "Orange Coding Academy". 
 
Sample Input: Orange Coding Academy
Expected Output: 2

*/

$text = "Orange Coding Academy";
$count = "0";
for ($x = 0; $x < strlen($text); $x++) {
    if (substr($text, $x, 1) == "c" || substr($text, $x, 1) == "C") {
        $count = $count + 1;
    }
}
echo $count;


echo "<br><br>";
// =====================================================

//Q9

/*
Write a PHP script that creates the following table using for loops. 
Add cellpadding="3px" and cell spacing="0px" to the table tag. 
*/

echo "<table border=\"1\" cellpadding=\"3px\" cellspacing=\"0px\" style='border-collapse: collapse'>";

for ($row = 1; $row <= 6; $row++) {
    echo "<tr> \n";
    for ($col = 1; $col <= 5; $col++) {
        $oper = " $row * $col = ";
        echo "<td>$oper" . $row * $col . "</td> \n";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br><br>";

// =====================================================

//Q10

/*
Write a PHP program that repeats integers from 1 to 50. 
For multiples of three, print "Fizz" instead of the number,
 and for multiples of five print "Buzz". For numbers that are multiples
  of both three and five, print "FizzBuzz".

Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz …….

*/

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0)
        echo "FizzBuzz" . "&nbsp";
    else if ($i % 3 == 0)
        echo "Fizz" . "&nbsp";
    else if ($i % 5 == 0)
        echo "Buzz" . "&nbsp";
    else
        echo $i . "&nbsp";
}

echo "<br><br>";

// =====================================================

//Q11

/*
According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers,
 used in computer science education. It is named after Robert Floyd.
  It is defined by filling the rows of the triangle with consecutive numbers, starting with a 1 in the top left corner:
 
Sample output:
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15

*/
$num = range(1, 15);
$index = 0;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num[$index] . "&nbsp ";
        $index++;
    }
    echo "<br>";
}

echo "<br><br>";

// =====================================================

//Q12

/*

Write a PHP program to print the following pattern. 
   
Expected Output:

     A 
    A B 
   A B C 
  A B C D 
 A B C D E 
  A B C D 
   A B C 
    A B 
     A
*/

// $charsPat = range("A", "E");
// $index = 1;
// $index = 0;

$charsPat = range('A', 'E');

for ($i = 0; $i <= 4; $i++) {
    for ($j = 4; $j > $i; $j--)
        echo "&nbsp;&nbsp;";
    for ($k = 0; $k <= $i; $k++)
        echo  $charsPat[$k] . "&nbsp;&nbsp;";
    echo "<br>";
}
for ($i = 0; $i <= 4; $i++) {
    for ($j = -1; $j < $i; $j++)
        echo "&nbsp;&nbsp;";
    for ($k = 0; $k <= 3 - $i; $k++)
        echo   $charsPat[$k] . "&nbsp;&nbsp;";
    echo "<br>";
}

echo "<br><br>";