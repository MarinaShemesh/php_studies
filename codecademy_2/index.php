<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codecademy_2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>This is my second Codecademy php page</h1>


    <h2>Built-in functions</h2>

    <h3>gettype()</h3>
    <p>This built-in function shows up the type of variable we are working with.</p>

<?php
    $first = "Welcome to the magical world of built-in functions.";
  
   $second = 82137012983; 

   echo gettype($first);//string

    echo "<br/>"; 
   echo gettype($second);//double
   echo "<br/>"; 
   echo gettype(123);//integer
?>

<h3>vardump()</h3>
    <p>Prints the type as well as the content of the variable</p>

    <?php
  
   echo var_dump($first);
   
    echo "<br/>"; 
   echo var_dump($second)
?>

<h3>strrev(), strtolower, str_repeat</h3>
    <p>Various string manipulations
    </p>

    <?php
    echo strrev("Hello, World!");
    echo "<br/>"; 

    echo strtolower("HeLLo");
    echo "<br/>"; 
    echo str_repeat("hi", 10);
    ?>

<h3>Working with Substrings</h3>
    <p>The substr_count() function returns the number of instances of a substring within a string. It takes two arguments, the string to search through—sometimes called the haystack— and the string to search for—sometimes called the needle.
    </p>

    <?php

    
$essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different though.";
  
$essay_two = "Obviously this is a really good book. You obviously would not have made us read it if it wasn't. I felt like the ending was too obvious though. It was so obvious who did it right away. I think the thing with the light was obviously a metaphor for life. It would have been better if the characters were less obvious about their secrets.";  

// Write your code below:
echo substr_count($essay_one, "really");//6
echo "<br/>"; 
echo substr_count($essay_two, "obvious");//5

?>

<h3>Number functions</h3>
    <p>The abs() function returns the absolute value of its number argument:
    </p>

    <?php
    echo abs(-10.99); // Prints: 10.99
    echo "<br/>"; 
    echo abs(127); // Prints: 127
    echo "<br/>"; 
    ?>
    <p>The round() function returns the nearest integer to its number argument:</p>
    <?php
    echo round(1.2); // Prints 1
    echo "<br/>"; 
echo round(1.5); //Prints 2
echo "<br/>"; 
echo round(1298736.821763876); // Prints: 1298737


echo "<br/>"; 
function calculateDistance($num1,$num2)
{
return abs($num1 - $num2);

}
echo calculateDistance(-1,4);

echo "<br/>"; 
echo "<br/>"; 

function calculateTip($param){

    return round($param/100 * 18) + $param;
  }

echo calculateTip(100);
echo "<br/>"; 
echo calculateTip(35);
echo "<br/>"; 
echo calculateTip(88.77)
?>

<h3>Number functions</h3>

<p>The rand() function returns a random integer.</p>

<?php
echo rand();//random number
echo "<br/>"; 
echo rand(1, 2); // Prints either 1 or 2
echo "<br/>"; 
echo rand(5, 10); // Prints a number between 5 and 10 (inclusive!)
echo "<br/>"; 
echo rand(1, 100); // Prints a number between 1 and 100 (inclusive!)
 ?>

<h3>str_pad()</h3>

<p>str_pad — Pad a string to a certain length with another string</p>
<?php

$input = "marina";
$input2 = "shemesh";
$input3 = 13;

echo str_pad($input,10);
echo "<br/>";
echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
echo "<br/>";
echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
echo "<br/>";
echo str_pad($input,  7, "___");               // produces "Alien_"
echo "<br/>";
echo str_pad($input,  3, "*");                 // produces "Alien"
echo "<br/>";
echo str_pad($input,  $input3, $input2); 
echo "<br/>";

$a = 29;
$b = "You did it!";
$c = STR_PAD_BOTH;
$d = "*~*";

echo "<br/>";

echo str_pad($b, $a, $d, $c);
//*~**~**~*You did it!*~**~**~*
 ?>


<h3>strtoupper()< turns string in capital letters</h3>

<?php
function convertToShout($string){
 return strtoupper($string)."!";

}

echo convertToShout("woah there, buddy");

echo "<br/>";
function tipGenerously($cost){
    return ceil($cost * 1.2);
  }

echo tipGenerously(100);
echo "<br/>";
echo tipGenerously(982.27)
?>

<h3>Area of a circle</h3>

<p>The formula for the area of a circle is πr^2. The radius is half of the diameter</p>

<?php
 function calculateCircleArea($diameter){
     return pi() * ($diameter/2)**2;
 }

 echo calculateCircleArea(25)
?>

<h3>Ordered arrays and how to print them</h3>

<?php
$number_array = [0, 1, 2];


print_r($number_array);

?>

<p>If we merely want to print the elements in the array listed, we can convert the array into a string using the built-in implode() function. The implode() function takes two arguments: a string to use between each element (the $glue), and the array to be joined together (the $pieces):
</p>
<?php

echo implode(",", $number_array);
echo "<br/>";
$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];

$winners = [$round_one[2], $round_two[0], $round_three[4]];

print_r($winners);
?>

<h3>Adding and Changing Elements</h3>

<?php

$string_array = ["first element", "second element"];

$string_array[] = "third element";

echo implode(", ", $string_array); 
// Prints: first element, second element, third element 

$string_array = ["first element", "second element", "third element"];

$string_array[0] = "NEW! different first element";
echo "<br/>";

echo $string_array[0]; // Prints: NEW! different first element"

?>

<p>The array_pop() function takes an array as its argument. It removes the last element of an array and returns the removed element.</p>

<?php

$stack = ["wild success", "failure", "struggle"];
// Write your code below:

array_push($stack, "blocker", "impediment");

echo implode(", ", $stack);

array_pop($stack); 
print_r($stack);
echo "<br/>";

array_pop($stack); 
print_r($stack);
echo "<br/>";

array_pop($stack); 
print_r($stack);
echo "<br/>";

array_pop($stack); 
print_r($stack);

?>

<p>The array_shift() function removes the first element of an array and returns that value. Each of the elements in the array will be shifted down an index. For example, the element that was previously at the 3rd index will now be located at the 2nd</p>

<p>The array_unshift() function takes an array as its first argument. The arguments that follow are elements to be added to the beginning of the array. It returns the new number of elements in the array.</p>

<?php

// $record_holders = [];
// // Write your code below:
// $arr_len = array_unshift($record_holders,  "Tim Montgomery", "Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis") ;

// echo $arr_len;
// echo "<br/>";
// print_r ($record_holders);

$record_holders = [];
// Write your code below:
array_unshift($record_holders,  "Tim Montgomery", "Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis") ;


echo "<br/>";
print_r ($record_holders);

array_shift($record_holders);
echo "<br/>";
print_r ($record_holders);

?>

<h3>Nested Arrays</h3>
<?php

$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];
  
// Write your code below:
$layer_one = $treasure_hunt[3];

print_r ($layer_one);
echo "<br/>";



$layer_two = $layer_one[4];
print_r ($layer_two);
echo "<br/>";

$layer_three = $layer_two[2];
print_r ($layer_three);
echo "<br/>";

$treasure = $layer_three[0];

echo $treasure;

?>

</body>
</html>

