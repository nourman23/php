<?php
#Array 

//Q1
/*
Write a script to generate the following paragraph 
 
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn,
 the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"

The words 'red', 'green' and 'white' should come from $colors array.
$colors = array('white', 'green', 'red') 
 

*/
$colors = array('white', 'green', 'red');
echo "
The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[2] carpet,
 the $colors[1] lawn, the $colors[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";


// =====================================================

//Q2

/*
Write a PHP script that will display the colors as unordered list :
Expected Output:  
green
red
white

*/
echo "<ul>
<li>green</li>
<li>red</li>
<li>white</li>
</ul>";

// =====================================================

//Q3

/*
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", 
"France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
"Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
 
Create a PHP script to displays the capital and country name from the
 above array $cities. Sort the list by the capital of the country. 
Expected Output:
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin 

*/

$cities = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki",
    "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid"
);
asort($cities);
foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital <br><br>";
}

// =====================================================

//Q4

/*
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
 
Write a PHP script to display the first element of the above array. 
Expected Output:  white

*/

$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo $color[4];
echo "<br><br>";

// =====================================================

//Q5

/*
 
Write a PHP script that inserts a specific new item in an array in any position.
 
Sample Input:
 
Array 1 2 3 4 5   
Location: 4
New Item: $
 
Expected Output: 1 2 3 $ 4 5


*/

$arr = array(1, 2, 3, 4, 5);

array_splice($arr, 3, 0, "$");

echo "array =";
foreach ($arr as $v) {
    echo "$v ";
}

echo "<br><br>";


// =====================================================

//Q6

/*

Write a PHP script to sort the following associative array depending on the key value [asc] : 
 
Sample Input: 
 
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");


Expected Output:
 
c = apple
b = banana
d = lemon
a = orange


*/
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);

foreach ($fruits as $k => $v) {
    echo "$k   =   $v <br>";
}

echo "<br><br>";


// =====================================================

//Q7

/*
 
Write a PHP script to calculate and display the average temperature for the
 recorded reads, also the script should display the list of the five lowest and the five highest temperatures 
 
Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 
62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
 
Expected Output:
Average Temperature is: 70.6 
List of five lowest temperatures: 60, 62, 63, 63, 64, 
List of five highest temperatures: 76, 78, 79, 81, 85,

*/

$Temperature = array(
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68,
    62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
);

$sum = 0;
$avg;
for ($i = 0; $i < count($Temperature); $i++) {
    $sum += $Temperature[$i];
}

function Highest_Lowest5($arr)
{
    sort($arr);
    $high = array();
    $low = array();
    for ($i = 0; $i < count($arr); $i++) {
        if ($i < 5)
            $high[$i] = $arr[$i];
        else if ($i > count($arr) - 5)
            $low[$i] = $arr[$i];
    }


    echo "List of five lowest temperatures : ";
    foreach ($low as $v)
        echo $v . "  ";
    echo "<br>";
    echo "List of five highest temperatures : ";
    foreach ($high as $v)
        echo $v . "  ";
    echo "<br>";
}


$avg = $sum / count($Temperature);
echo "Average Temperature is: $avg ";
echo "<br>";
Highest_Lowest5($Temperature);


// =====================================================

//Q8

/*
Write a PHP program to merge the following two arrays. 
 
Sample Input: 
 
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
 
Expected Output:
 
Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
)

*/
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$merged = array_merge($array1, $array2);

echo "<pre>";
print_r($merged);
echo "</pre>";

echo "<br><br>";

// =====================================================

//Q9

/*
Write a PHP function to change the following array's and convert all the strings to upper case. 
 
Sample Input:
 
$colors = array("red","blue", "white","yellow");
 
Expected Output :
 
Array
(
    RED
    BLUE
    WHITE
    YELLOW
 
)

*/


// strtoupper
$colors = array("red", "blue", "white", "yellow");
echo "<pre>";
print_r(toUpper($colors));
echo "</pre>";


function toUpper($array)
{

    foreach ($array as $k => $v) {
        $array[$k] = strtoupper($v);
    }
    return $array;
}
echo "<br><br>";
// =====================================================

//Q10

/*
Write a PHP function to change the following array's and convert all the strings to lower case. 
 
Sample Input:
 
$colors = array("RED","BLUE", "WHITE","YELLOW");
 
Expected Output :
 
Array
(
    red
    blue
    white
    yellow
 
)

*/

$colors2 = array("RED", "BLUE", "WHITE", "YELLOW");
echo "<pre>";
print_r(toLower($colors2));
echo "</pre>";


function toLower($array)
{

    foreach ($array as $k => $v) {
        $array[$k] = strtolower($v);
    }
    return $array;
}

echo "<br><br>";
// =====================================================

//Q11

/*
 
 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 
 
Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248

*/
$betw = "";
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0)
        $betw .= $i . " , ";
}
echo substr($betw, 0, -2);
echo "<br><br>";
// =====================================================

//Q12

/*
Write a PHP script to get the shortest/longest string length from an array. 
 
Sample Input:
 
 $words =  array("abcd","abc","de","hjjj","g","wer")
 
Expected Output : 
 
The shortest array length is 1. The longest array length is 4.

*/

$words =  array("abcd", "abc", "de", "hjjj", "g", "wer");

$shortest = strlen($words[0]);
$longest = strlen($words[0]);

foreach ($words as $k => $v) {
    if (strlen($v) < $shortest)
        $shortest = strlen($v);

    else if (strlen($v) > $longest)
        $longest = strlen($v);
}

echo "The shortest array length is $shortest <br>";
echo "The longest array length is $longest ";

echo "<br><br>";
// =====================================================

//Q13

/*
Write a PHP script to generate unique random 10 numbers within a specific range. 
 
Sample Input: (11, 20)
Sample Output: 17 16 13 20 14 19 18 15 11 12


*/


for ($i = 0; $i < 10; $i++)
    echo rand(11, 20) . "  ";

echo "<br><br>";
// =====================================================

//Q14

/*
Write a PHP script that returns the lowest integer in the array  that is not 0. 
 
Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
Sample Output:  2  
*/

$array1 = array(2, 0, 10, 12, 6);
$lowInt = $array1[0];
foreach ($array1 as $v) {
    if ($v < $lowInt && $v != 0)
        $lowInt = $v;
}

echo $lowInt;