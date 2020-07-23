<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>This is my test page</h1>


    <h3>Return Values</h3>


    <?php

    function announceRunning()
{
  echo "The first function is running!\n";
  return "This is the return value of the first function\n.";
}

$first_result = announceRunning();
echo $first_result;


echo "<br/>"; 
echo "<br/>"; 
///note that the echo does not print because return exists the function
function announceRunning2()
{
  return "This is the return value of the second function.";
  echo "P.S., I love you";
}

$second_result = announceRunning2();
echo $second_result;
?>

    <h3>NULL is weird</h3>

    <?php

function returnNothing() 
{
  echo "I'm running! I'm running!\n";
}

$result = returnNothing(); // Prints: I'm running! I'm running!

echo $result; // Nothing is printed because the returnNothing function does not have a reurn
?>

<h3>Functions with parameters</h3>

<?php

function sayCustomHello($name)
{
echo "Hello, $name!";
};

sayCustomHello("Aisle Nevertell"); // Prints: Hello, Aisle Nevertell!
echo "<br/>"; 

sayCustomHello("Codecademy learner");
echo "<br/>"; 


function increaseEnthusiasm($greeting){
    return $greeting. "!";
  };
  
  echo increaseEnthusiasm("hi");

  echo "<br/>"; 
  
  function repeatThreeTimes($thing){
    return $thing. $thing . $thing;
  }
  echo "<br/>"; 
  echo repeatThreeTimes("hello");

  echo "<br/>"; 
  echo "<br/>"; 


?>

<h3>Functions with parameters</h3>

<?php

function divide($num1, $num2){
    return $num1/$num2;
}

echo divide(21, 7);

echo "<br/>"; 
echo "<br/>"; 
function calculateArea($height, $width){
    return $height * $width;
   };
   
   
   echo calculateArea(12, 24);

   echo "<br/>";   echo "<br/>"; 
   
   function calculateVolume($height, $width, $depth){
    return $height * $width * $depth;
   };
   
   
   
   echo calculateVolume(12, 24, 20);

?>

<h3>Default Parameters</h3>
<p> 
    If you do not pass in a parameter, the function will error out. Unless you use a default parameter that
    will be used if no regular parameter was used.
</p>


<?php

function helloFriend($name="old chum"){
    echo "Hello, $name!";
}

helloFriend("Marina");
echo "<br/>"; 
helloFriend();


function calculateTip($total, $tip = 20)
{
  //return $total * (1 + $tip/100);
  return $total + $tip;
}

echo "<br/>"; 
echo "<br/>"; 

echo calculateTip(100, 25);
echo "<br/>"; 
echo calculateTip(100); 
echo "<br/>"; 
echo calculateTip(65, 15); 

?>
<h3>Pass By Reference</h3>

<p>
We can invoke functions with variables or with values directly. When we invoke a function with a variable as its argument, it’s as if we’re assigning the value held by that variable to the function’s parameter. We assign a copy of the value held by the argument variable. The variable argument and the parameter are distinct entities; changes made inside the function to the parameter will not affect the variable that was passed in:<br>
<pre>
function addX ($param)
{
  $param = $param . "X";
  echo $param;
};
$word = "Hello";>
addX($word); // Prints: HelloX
echo $word; // Prints: Hello
</pre>
</p>

<p>
If we do want to make permanent changes to a variable within a function, we can prepend the parameter name with the reference sign (&). In this way, we assign the parameter to be an alias for the argument variable. Both will refer to the same spot in memory, and changes to the parameter within the function will permanently affect the argument variable.
</p>

<?php

function addXPermanently(&$param){
    $param = $param . "X";
  echo $param;
}


echo "<br/>"; 
$word = "Hello";
addXPermanently($word);
echo "<br/>"; 
echo $word;
echo "<br/>"; 


$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

// Write your code below:


function convertToQuestion(&$string){
  $string = "Do you think $string?\n";
  echo $string;
}

$example = "I'm nice";
echo "<br/>"; 

convertToQuestion($example);echo "<br/>"; 
convertToQuestion($string_one);echo "<br/>"; 
convertToQuestion($string_two);echo "<br/>"; 
convertToQuestion($string_three);echo "<br/>"; echo "<br/>"; echo "<br/>"; 


echo $string_one;echo "<br/>"; 
echo $string_two;echo "<br/>"; 
echo $string_three;echo "<br/>"; 
?>

</body>



</html>