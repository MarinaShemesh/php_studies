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
?>


</body>



</html>