<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codecademy_3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>This is my third Codecademy php page</h1>


    <h2>Associative Arrays (objects)</h2>

    <p>You cannot use implode to print associative arrays because you will only get the values, so you have to use print_r</p>
<?php

$grades = [
    "Jane" => 98,
    "Lily" => 74,
    "Dan" => 88,
];

echo implode(", ", $grades); 

echo"<br>";
print_r($grades); 

?>

<p>We access the value a given key points to using square brackets ([]):</p>
<p>To add new elements to an associative array, we use the assignment operator (=):</p>
<?php

$assignment_one = ["Alex"=> 87, "Kenny"=> 91, "Natalia"=> 91, "Lily"=> 67, "Dan"=> 81, "Kat"=> 77, "Sara" => 65];

$assignment_two = ["Alex"=> 91, "Kenny"=> 99, "Natalia"=> 100, "Lily"=> 61, "Dan"=> 88, "Kat"=> 90];

$assignment_three = ["Alex"=> 78, "Kenny"=> 92, "Natalia"=> 94, "Lily"=> 79, "Dan"=> 73, "Sara" => 61];


// Write your code below:
$assignment_two["Sara"]= 65;
$assignment_three["Kat"]= 97;



print_r($assignment_two); 
echo"<br>";
print_r($assignment_three); 

$dans_grades = [
    $assignment_one["Dan"],
    $assignment_two["Dan"],
    $assignment_three["Dan"],
  ];
  echo"<br>";
  print_r($dans_grades);

  echo"<br>";
  $student_name = "Alex";
  echo $assignment_two[$student_name];
?>

<h3>Changing and Removing Elements</h3>

<p>The same syntax that adds new array elements can be used to change existing elements:</p>

<?php
$new_arr = ["first" => "I am first!", "second" => "I am second!"]; 

$new_arr["third"] = "I am third!";

echo $new_arr["third"]; // Prints: I am third!

$new_arr["third"] = "I am the *NEW* third!";
echo"<br>";
echo $new_arr["third"]; // Prints: I am the *NEW* third!

?>
<h3>unset()</h3>
<p>We can remove a key=>value pair entirely using the PHP unset() function. Note: if the key used doesn’t exist in the array, then nothing happens.</p>

<?php
$my_car = [
  "oil" => "black and clumpy",
  "brakes" => "new",
  "tires" => "old with worn treads",
  "filth" => "bird droppings", 
  "wiper fluid" => "full", 
  "headlights" => "bright"
];
print_r($my_car);
echo"<br>";

$my_car["oil"]= "new and premium";
print_r($my_car);
echo"<br>";
$my_car["tires"]= "new with deep treads";

unset($my_car["filth"]);///removes the filthy parts

print_r($my_car);

$num_array = [1000 => "one thousand", 100 => "one hundred", 600 => "six hundred"];
$num_array[] = "New Element in \$num_array";

echo"<br>";
echo"<br>";
echo $num_array[1001];
echo"<br>";
echo"<br>";
$hybrid_array = ["bird", "cat", "dog", "fish"];

$hybrid_array[8] = "five more";

print_r($hybrid_array);

array_push($hybrid_array, rand());
echo"<br>";
echo $hybrid_array[9];

?>

<h3>Joining arrays</h3>

<p>PHP also lets us combine arrays. The union (+) operator takes two array operands and returns a new array with any unique keys from the second array appended to the first array.</p>

<?php
$giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];

$impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];

$rat_foods = ["dip"=>"mashed earth worms", "entree"=>"trash pizza", "dessert"=>"sugar cubes", "drink"=>"lemon water"];


$potluck = $giraffe_foods + $impala_foods + $rat_foods;
print_r($potluck);


$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];

$bad_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "A very fat cat looks happy."];
echo"<br>";
echo"<br>";

//The function should change the value of "top_text" to "Much PHP" and the "bottom_text" to "Very programming. Wow."
function createMeme($meme){
 $meme["top_text"] = "Much PHP";
 $meme["bottom_text"] = "Very programming. Wow.";
 return $meme;
}

$php_doge = createMeme($doge_meme);

print_r($php_doge);
echo"<br>";
 print_r($doge_meme);//note that the original $doge_meme did not change
//the arrays are being passed by value

function fixMeme(&$meme){//note the use of &
    $meme["top_text"] = "Javascript rules";
    $meme["bottom_text"] = "EVERY SINGLE day!";
    return $meme;
   }
   
   $lame_meme = fixMeme($bad_meme);
   echo"<br>";
   print_r($lame_meme);
   echo"<br>";
    print_r($bad_meme);//this array changed too
   //the arrray was passed by reference
   

?>

<h3>HTML form handling</h3>


<?php
function makeHeaderGreeting ($name){
  return "<h2>Hello, ${name}!</h2>";
}

echo makeHeaderGreeting("Marina");

$about_me = [
    "name" => "Aisle Nevertell",
    "birth_year" => 1902,
    "favorite_food" => "pizza"
  ];
  

function calculateAge ($person_arr){
    $current_year = date("Y");
    $age = $current_year - $person_arr["birth_year"];
    return $age;
  }

  echo calculateAge($about_me);//age = 118

 echo "<h3>Hello! I'm {$about_me["name"]}!</h3>";

  echo "<p> I am " . calculateAge($about_me). " years old.</p>";

  echo "<div>My favourite food is {$about_me["favorite_food"]} </div>"


?>

<h3>php echo example</h3>
<p>This HTML will get delivered as is</p>
<?php echo "<p>PHP interprets this and turns it into HTML</p>";?>
<p>This HTML will get delivered as is</p>

<p>This example uses the PHP opening  and closing (?>) tags to insert PHP code. It uses echo to add text to the HTML. This practice is so common that PHP provides a shorthand syntax. You can simply use "<"?="</p>

<?= "<p>This is the shortcut example.</p>";?>

<h3>HTML form handling in PHP - Request Superglobals</h3>

<p>Since PHP was built with web development as a primary use case, it has functionality to ease processing of HTML requests. When the front end client makes a request to a backend PHP server, several superglobals related to the request are available to the PHP script. Superglobals are automatic global variables which are available in all scopes throughout a script.

The list of superglobals in PHP includes the following:

<ul> <li>$GLOBALS</li>
<li>$_SERVER</li>
<li>$_GET</li>
<li>$_POST</li>
<li>$_FILES</li>
<li>$_COOKIE</li>
<li>$_SESSION</li>
<li>$_REQUEST</li>
<li>$_ENV</ul></p>

<p>$_GET - this contains an associative array of variables passed to the current script using query parameters in the URL<br>
$_POST - this contains an associative array of variables passed to the current script using a form submitted using the “POST” method<br>
$_REQUEST - this contains the contents of $_GET, $_POST, and $_COOKIE</p>


$_REQUEST:
<?php print_r($_REQUEST);?>
<br>
$_GET:
<?php print_r($_GET);?>
<br>
$_POST:
<?php print_r($_POST);?>
<form method="get">
GET Form: <input type="text" name="get_name">
<input type="submit" value="Submit GET">
</form>
<br>
<form method="post">
POST Form: <input type="text" name="post_name">
<input type="submit" value="Submit POST">
</form>
<a href="index.php">Reset</a>

<hr>
<br>
<form method="get">
First name: <input type="text" name="first">
<br>
<br>
Last name: <input type="text" name="last">
<br>
<input type="submit" value="Submit Name">
</form>
<?php print_r($_GET);?>
<hr>
<h3>The default method is get - but still make sure to always write it</h3>
<form method="get">
Country:
 <input type="text" name="country"><!--"name" will create the key of the objects -->
<br>
Language:
<input type="text" name="language">
<br>
<input type="submit" value="Submit">
</form>

<br>
<p>Your language is: <?=$_GET['language'];?></p>
<!-- //note the PHP shortcut -->
<p>Your country is: <?=$_GET['country'];?></p>
<a href="index.php">Reset</a>

<hr>
<h3>POST Form Handling</h3>
<p>In HTML, setting a form’s method attribute to "post" specifies that you would like the form to be submitted using the POST method. <br>When using POST to submit forms, you will not see the URL change. The form data is sent using the headers of the HTTP request instead of URL parameters.<br>

To use the data from the form in PHP, each input needs to have a unique name attribute.<br>

When the form is submitted, the input data is available in the $_POST superglobal. Similar to GET, it is also available in $_REQUEST.</p>

<h3>Using the "action" Attribute</h3>

<p>Until now, we’ve been handling the response to the form submission on the same page as the form itself. Often times there is no need to present a user with the same form over and over again. It might make sense to move them to a new page or thank them for their submission.
<br>
This is where the action form attribute comes into play. Since we have not specified an action yet, HTML defaults to submitting the form data back to the same script that defined the form.
<br>
If you would like to have the user navigate to a new URL and handle the form input there, you can specify the URL in the form’s action attribute. Since the action attribute specifies a relative URL, you can also enter the name of a PHP file in the same directory as the current on</p>
<hr>
<form method="get" action="greet_user.php">
First Name:
<input type="text" name="first">
<br><br>
Last Name:
<input type="text" name="last">
<br>
<input type="submit" value="Submit">
</form>

<a href="index.php">Reset</a>

<h3>Conditionals </h3>

<?php


function chooseCheckoutLane($num){
  if ($num <= 12){
    return "express lane";
  } else {
   return "regular lane";
  } 
}

function canIVote($age){
  if ($age >= 18) {
    return "yes";
  } else {
    return "no";
  }
}

print_r(chooseCheckoutLane(12));
echo"<br>";
print_r(chooseCheckoutLane(14));
echo"<br>";
print_r(canIVote(12));
echo"<br>";
print_r(canIVote(100));
echo"<br>";
print_r(date("F"));
echo"<br>";

function checkRenewalMonth($renewalMonth) {
    $currentMonth = date("F");
    if ($renewalMonth !== $currentMonth){
      return "Welcome!";
    } else {
      return "Time to renew";
    }
  
  }

  print_r(checkRenewalMonth("January"));

  ?>

  <h3>Switch Statement</h3>
  <p>We often want to compare a value, expression, or variable against many different possible values and run different code depending on which it matches. <br>We can use a series of if/elseif statements which use the identical operator (===) or we can use a switch statement—an alternate syntax.</p>

  <?php
 
 function testGrade($letter_grade){
    switch ($letter_grade){
        case "A":
          echo "Terrific";
          break;
        case "B":
          echo "Good";
          break;
        case "C":
          echo "Fair";
          break;
        case "D":
          echo "Needs Improvement";
          break;
        case "F":
          echo "See me!";
          break;
        default:
          echo "Invalid grade"; 
      }
 }

 print_r(testGrade("C"));
 echo"<br>";
 print_r(testGrade("A"));
 echo"<br>";
 print_r(testGrade("X"));

 
function airQuality($color){
    switch ($color){
      case "green":
      echo "good";
      break;
      case "yellow":
      echo "moderate";
      break;
      case "orange":
      echo "unhealthy for sensitive groups";
      break;
      case "red":
      echo "unhealthy";
      break;
      case "purple":
      echo "very unhealthy";
      break;
      case "maroon":
      echo "hazardous";
      break;
      default:
      echo "invalid color";
    }
  }
  echo"<br>";
  echo"<br>";
  print_r(airQuality("blue")); echo"<br>";
  print_r(airQuality("maroon")); echo"<br>";
  print_r(airQuality("red"));

  ?>
  <p>Use the keyword break after the block for each case. Without the keyword break, not only will the first matching case’s block run, but so will all the code in the subsequent cases! This is known as <i>fall through</i>. <br>The keyword break tells the computer to break out of the switch statement, without it, it will fall through the rest of the switch executing all the code until it reaches a break, a return, or the end of the statement</p>

  <p> Fall through may seem like a drag, but it can be useful when we want multiple cases to execute the same code</p>

  <?php


function returnSeason($month){
  switch ($month) {
    case "December":
    case "January":
    case "February":  
      return "winter";
    case "March":
    case "April":
    case "May":  
      return "spring";
    case "June":
    case "July":
    case "August":  
      return "summer";
    case "September":
    case "October":
    case "November":  
      return "fall";   
	} 
}
  
echo returnSeason("February");
echo "\n\n";  
echo returnSeason("April");
echo "\n\n";
echo returnSeason("August");
echo "\n\n";
echo returnSeason("October");  

?>

<h3>Ternary Operator</h3>
<p>PHP offers a short-hand syntax to conditionally return a value.</p>
  
<p>It takes three operands and returns a value:<br>

The first operand is a condition to check. This is followed by a question mark ?<br>
The second operand is an expression to return if the condition is TRUE. This is followed by a colon (:).<br>
The third operand is an expression to return if the condition is FALSE.<br>
Let’s see our previous example refactored with the ternary operator:<br>

<br>
$link_color = $isClicked ? "purple" : "blue"</p>

<?php
function ternaryCheckout($num){
 return $num <= 12 ? "express lane" : "regular lane";
}

echo ternaryCheckout(17);
?>

<h3>Truthy and Falsy</h3>

<p> We sometimes refer to code that will be converted to TRUE as truthy and code that will be converted to FALSE as falsy<br> since they aren’t actually equivalent to those boolean values, but they will be treated as such in certain contexts.<br> Most values and expressions are treated as truthy, so we’ll focus on those that are falsy:</p>

<ul>
    <li>Empty strings</li>
    <li>null</li>
    <li>an undefined or undeclared variable</li>
    <li>an empty array</li>
    <li>the number 0</li>
    <li>the string "0"</li>
</ul>

<?php
echo"<br>";
    if ("") {
  echo "this will not print";
} elseif (null) {
  echo "this will not print";
} elseif ([]) {
  echo "this will not print";
} elseif (0) {
  echo "this will not print";
} elseif ("0") {
  echo "this will not print";
} else {
  echo "Finally!";
}

function truthyOrFalsy ($value)
{
  return $value ? "True" : "False";
}

echo"<br>";
echo truthyOrFalsy(0);
echo"<br>";
echo truthyOrFalsy(null);
echo"<br>";
echo truthyOrFalsy("cat");
?>

<h3>User Input: readline()</h3>

<p>The built-in readline() function takes a string with which to prompt the user. It waits for the user to enter text into the terminal and returns that value as a string.</p>

<?php

echo "Hi, I'm Aisle Nevertell. What's your name?\n";
$name = readline(">> ");
echo "\nNice to meet you, $name";
?>

</ul>
</body>
</html>

