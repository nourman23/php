<?php

//=========================================================

//Q1

/*
 Write a program that will count the "r" characters in a string
*/

//way1
$text = "ramajaradatrrr";
$search_char = "r";
$count = "0";
for ($x = "0"; $x < strlen($text); $x++) {
    if (substr($text, $x, 1) == $search_char) {
        $count = $count + 1;
    }
}
echo $count . "\n";
echo "<br><br><br>";

//===============
//way2
$string = "ramajaradatrrr";
echo 'output is : ' . substr_count($string, "r");

echo "<br><br><br>";

$count1 = "0";
for ($x = "0"; $x < strlen($text); $x++) {
    if ($text[$x] == $search_char) {
        $count1 = $count1 + 1;
    }
}

echo $count1 . "\n";
echo "<br><br><br>";
//=========================================================


?>


<?php

//Q2 
/*
 Write a PHP function that checks whether a string is all lowercase
*/
function is_str_lowercase($str1)
{
    for ($sc = 0; $sc < strlen($str1); $sc++) {
        if (
            ord($str1[$sc]) >= ord('A') &&
            ord($str1[$sc]) <= ord('Z')
        ) {
            return false;
        }
    }
    return true;
}
var_dump(is_str_lowercase('abc def ghi'));
var_dump(is_str_lowercase('abc dEf ghi'));

echo "<br><br><br>";

//=====================================================

//Q3

echo "<table border=\"1\" style='border-collapse: collapse'>";
for ($row = 1; $row <= 10; $row++) {
    echo "<tr> \n";
    for ($col = 1; $col <= 10; $col++) {
        $p = $col * $row;
        echo "<td>$p</td> \n";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br><br><br>";


//========================================================

//Q4

/*
Write a PHP script to extract text (within square brackets ) from a string. 
Sample strings: 'The quick brown [fox].'
Expected Output: 'fox'

*/

$my_text = 'The quick brown [fox].';
//way1
preg_match('#\[(.*?)\]#', $my_text, $match);
print $match[1] . "\n";
echo "<br><br><br>";

//way2

extractString($my_text);

function extractString($str)
{
    $opBracket = 0;
    $clBracket = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (ord($str[$i]) == 91) {
            $opBracket = $i;
            continue;
        } elseif (ord($str[$i]) == 93) {
            $clBracket = $i;
            break;
        }
    }

    for ($i = $opBracket + 1; $i < $clBracket; $i++) {
        echo $str[$i];
    }
}

echo "<br><br><br>";
//=====================================================

//Q4

/*
Write a PHP Calculator class that will accept two values as arguments,
 then add them, subtract them, multiply them together, or divide them on request. For example :
$mycalc = new MyCalculator( 12, 6);
echo $mycalc- > add(); // Displays 18
echo $mycalc- > multiply(); // Displays 72

*/

class MyCalculator
{
    private $n1, $n2;

    function __construct($first, $second)
    {
        $this->n1 = $first;
        $this->n2 = $second;
    }

    function add()
    {
        return  $this->n1 + $this->n2;
    }
    function subtract()
    {
        return  $this->n1 - $this->n2;
    }
    function multiply()
    {
        return  $this->n1 * $this->n2;
    }
    function divide()
    {
        return  $this->n1 / $this->n2;
    }
}

$mycalc = new MyCalculator(12, 6);
echo $mycalc->add() . "<br>";
echo $mycalc->multiply() . "<br>";