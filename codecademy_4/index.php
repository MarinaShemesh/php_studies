<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codecademy_4</title>
</head>
<body>
    
<h1>This is my fourth Codecademy php page</h1>

<h3>The "while" loop</h3>

<p>The first PHP loop that we will cover is the while loop. This type of loop continues to iterate as long as its conditional is true.</p>

<?php
$count = 0;
while ($count < 7)
{
  echo "The count is: " . $count . "<br>";
  $count += 1;
}

echo"<br>";
echo"<br>";
$count = 1;
while ($count < 100)
{
 if($count % 33 === 0) {echo  $count . " is divisible by 33" . "<br>";
 }
  $count += 1;

}

// $count = 1;
// while ($count <= 100)
// {
//   if ($count % 33 === 0) {
//     echo $count . " is divisible by 33\n";
//   }
//   $count += 1;
// }
?>

<h3>do while</h3>

<p>A do…while loop is very similar to a while loop. The main difference is that the code block will execute once without the conditional being checked. After the first iteration, it behaves the same as a while loop.<br>

The syntax is slightly different, and the conditional goes at the end of the code block.</p>

<P>Unlike the other loop types, the do…while loop requires a semicolon at the end.<br>

In practice, only use this type of loop when you always need the code block to execute at least one time.</P>


<?php
$count = 1;
do {
  echo "The number is: " . $count . "<br>";
  $count += 1;
} while ($count < 5);

echo "<br>";


$plant_height = 22;
do {
  echo "The plant height is now: " . $plant_height  . "<br>";

  if($plant_height >= 25){
      echo "And can now produce fruit";
  }
  $plant_height += 1;
} while ($plant_height < 26);

?>

<h3>for loop</h3>

<p>A for loop is commonly used to execute a code block a specific number of times.</p>
<p>The for loop syntax includes 3 expressions:

<ol>
<li>
The first is evaluated only one time before the first iteration.</li>
<li>
The second is evaluated before each iteration. If it is TRUE, the code block is executed. Otherwise, the loop terminates.</li>
<li>
The third is evaluated after each iteration. Note that expressions 1 and 2 have semicolons after them.</li></ol></p>

<?php
for ($count = 2; $count < 8; $count++)
{
  echo "The count is: " . $count . "<br>";
}

///this is how you loop backwards
echo "<br>";
for ($i = 2020; $i >=2015 ; $i--)
{
    
    echo $i ."<br>";
} 
echo "<br>";
for ($i = 5; $i >= 0; $i--){
    if($i === 2){
      echo "Ready! <br>";
   }
   elseif($i === 1){
    echo "Set! <br>";
 }

 elseif($i === 0){
    echo "Go! <br>";
 }
 else{
    echo  $i . "<br>";
  }

}
?>
<h3>foreach</h3>

<p>The foreach loop is used for iterating over an array. The code block is executed for every element in the array and the value of that element is available for use in the code block.</p>

<?php
$counting_array = [1, 2, 3, 4, 5];
foreach ($counting_array as $count) {
  echo "The count is: " . $count . "<br>";
}

echo "<br>";
echo "<br>";
///this gives the key values, and not the keys
$details_array = ["color" => "blue", "shape" => "square"];
foreach ($details_array as $detail) {
  echo "The detail is: " . $detail . "<br>";
}

echo "<br>";

///this gives the key values, AND the keys

$details_array = ["color" => "red", "shape" => "round"];
foreach ($details_array as $attribute => $detail) {
  echo "The " . $attribute . " is: " . $detail . "<br>";
}

echo "<br>";
echo "<br>";

$scores = [
    "Alice" => 99,
    "Bob" => 95,
    "Charlie" => 98,
    "Destiny" => 91,
    "Edward" => 88
  ];
  
  
  foreach ($scores as $score) {
    echo "Someone received a score of " . $score . "<br>";
  }


echo "<br>";
  
  foreach($scores as $name => $score){
   echo $name . " received a score of " . $score . ".<br>";
  }
  
?>

<h3>break and continue</h3>

<p>Similar to switch statements, the break keyword can be used to terminate any of the loop types early. In our counting example of a while loop, if we add a conditional and a break statement:</p>

<p>The continue keyword is similar to break except it only ends the current iteration early, not the entire loop. We could use this in our example to skip counting the number 5:</p>


<?php

$num = 1;
while($num < 10) {
    echo "The number is " . $num . "<br>";
    if( $num === 5){
     break;
    }
    $num += 1;
}

echo "<br>";


$count = 1;
while ($count < 10){
 
    if ($count === 5){
        $count += 1; ///REMEMBEr to add this so that you will not get an infinite loop
        continue;
    }
    echo " the count is " . $count . "<br>";
  
    $count += 1;
}

echo "<br>";
echo "<br>";
for ($i = 10; $i >= 0; $i--) {
  if ($i === 2) {
    echo "Ready! <br>";
  } elseif ($i === 1) {
    echo "Set! <br>";
    break; //the loop stops here so we do not go to 0 nor see Go!
  } elseif ($i === 0) {
    echo "Go! <br>";
  } elseif ($i===6) { // you don’t need to add a line to decrement $i since this process takes place outside of the code block
    continue;
  } else{
    echo $i . "<br>";
  }
}
?>

<h3>Loop examples</h3>
<?php
#while

 echo "Count down! <br>";

 $count = 5;
 while ($count > 0){
   echo $count . "<br>";
   $count --;
 }

 echo "Blast off!";

 echo "<br>";
 echo "<br>";

 #do...while

 $lights = "off";
do {
  echo "The lights are " . $lights . "<br>";
  if ($lights === "off") {
    $lights = "on";
  } else {
    $lights = "off";
  }
} while ($lights === "on");
echo "<br>";


# for
$names = ["Ann", "Bob", "Cassidy", "Dave", "Ed"];
for ($index = 0; $index < count($names); $index+=2){
  echo $names[$index] . "<br>";
}
echo "<br>";


$shopping = ["bread", "apples", "tehina", "pears","nuts", "celery"];
//echo count($shopping);

for ($i = 0; $i < count($shopping); $i++){
  echo $i + 1 . " " .$shopping[$i] . "<br>";
}

echo "<br>";
# foreach
$weather = [
  "temperature" => "cold",
  "weather" => "rainy",
  "sky" => "gray"
              ];
foreach ($weather as $detail) {
  echo "the values are $detail. <br>";
  
}

echo "<br>";
echo "<br>";
$properties = [
  "temperature" => "cold",
  "weather" => "rainy",
  "sky" => "gray"
              ];
foreach ($properties as $key=>$value) {
  echo "The $key is $value. <br>";
}
echo "<br>";

$properties = [
  "temperature" => "cold",
  "weather" => "rainy",
  "sky" => "gray"
              ];
foreach ($properties as $value) {
  echo "The $value. <br>";
}

echo "<br>";
# break and continue
# this skips printing Ann and will
# stop execution after printing
# Garry
$names = ["Ann", "Bob", "Cassidy", "Dave", "Ed", "Fohn", "Garry", "Ham", "india"];
for ($index = 0; $index < count($names); $index+=1){
  if ($names[$index] == "Bob") {
    continue;
  }
  echo $names[$index] . "<br>";
  if ($names[$index] == "Garry") {
    break;
  }
}
 ?>


 <h3>Loops in HTML</h3>


<?php
for ($i = 0; $i < 5; $i++) {
?>
<p>We sell shoes</p>
<?php
}
?>


<ul>
<?php
for ($i = 0; $i < 4; $i++) {
?>
<li>Duck</li>
<?php
}
?>
<li>Goose</li>
</ul>

<p>Luckily, PHP offers an alternate syntax which is especially useful when working with HTML. <br>Instead of using an opening bracket ({), we use a colon (:) and instead of using a closing bracket (}), we use a closing keyword and semicolon (;). <br>For the for loop, the closing keyword is endfor. Our duck, duck, goose example becomes:</p>

<p>The only difference is the closing keywords. For a while loop, the closing keyword is endwhile, and for the foreach loop, the closing keyword is endforeach.</p>

<ul>
<?php
for ($i = 0; $i < 2; $i++):
?>
<li>Duck</li>
<?php
endfor;
?>
<li>Goose</li>
</ul>

<p>In the other types of loops the only difference is the closing keywords. For a while loop, the closing keyword is endwhile, and for the foreach loop, the closing keyword is endforeach.</p>

<h4>The veggie shop</h4>
<?php
$i = 0;
$repeats = [0, 1];
while ($i < 2):
?>
<p>We sell vegetables</p>
  <?php
  foreach ($repeats as $value):
  ?>
  <p>(and also fruit)</p>
  <?php
  endforeach;
  ?>
<?php
  $i++;
endwhile;
?>

<p>it’s important to remember to re-enter PHP mode before using PHP variables. This can be done using the php opening and closing tags. If you are going to simply be printing the variable using echo, you can also use the echo shorthand opening tag.</p>

<h4>Shoe Shop</h4>
<?php
$footwear = [
  "sandals" => 4,
  "sneakers" => 7,
	"boots" => 3
];
?>
<p>Our footwear:</p>
<?php
foreach ($footwear as $type => $brands):
?>
<p>We sell <?=$brands?> brands of <?=$type?>.</p>
<?php
endforeach;
?>

<h3>Loop examples</h3>
<?php
$footwear = [
  "sandals" => 4,
  "sneakers" => 7,
	"boots" => 3
];
?>
<p>Our footwear:</p>
<h4>foreach</h4>
<?php
foreach ($footwear as $type => $brands):
?>
<p>We sell <?=$brands?> brands of <?=$type?></p>
<?php
endforeach;
?>
<h4>for</h4>
<?php
$types = [
  "sandals",
  "sneakers",
	"boots"
];
$quantities = [
  4,
  7,
	3
];
for ($i=0; $i<count($types); $i++):
?>
<p>We sell <?=$quantities[$i]?> brands of <?=$types[$i]?></p>
<?php
endfor;
?>
<h4>while</h4>
<?php
$types = [
  "sandals",
  "sneakers",
	"boots"
];
$quantities = [
  4,
  7,
	3
];
$i = 0;
while ($i<count($types)):
?>
<p>We sell <?=$quantities[$i]?> brands of <?=$types[$i]?></p>
<?php
$i++;
endwhile;
?>


<h1>Welcome To This Form</h1>
    <form action="" method="POST">
          <label for="text">You can enter text here:</label>
    			<input type="text" name="text">
        <hr>
          <label for="num">You can enter a number here:</label>
          <input type="number" name="num">
        <hr>
          <label for="slider">You can slide this:</label>
          <br>
          <span>Left</span>
          <input type="range" name="slider" value="3" min="1" max="5">
          <span>Right</span>
        <hr>
       <label for="boxes">You can check these:</label>
          <input type="checkbox" name="boxes" value="first">
          <label for="first">First</label>
          <input type="checkbox" name="boxes"  value="second">
          <label for="second">Second</label>
          <input type="checkbox" name="boxes" value="third">
          <label for="third">Third</label>
        <hr>
      <label for="radio">You can select one of these:</label>
          <input type="radio" name="radio" value="true">
          <label for="true">TRUE</label>
          <input type="radio" name="radio" value="false">
          <label for="false">FALSE</label>
        <hr>
          <label for="dropdown">You can select one of these</label>
          <select name="dropdown">
            <option value="first">First</option>
            <option value="second">Second</option>
            <option value="third">Third</option>
          </select>
        <hr>
          <input type="submit" value="Submit to Reset">
      </form>

<hr>
      <h1>Basic HTML Validation</h1>
    <form action="" method="POST">
      <label for="text">Enter your name here:</label>
    	<input id="name" name="name" type="text" required minlength="3" maxlength="100">
      <br><br>
      <label for="number">Enter your age here:</label>
      <input type="number" name="age" id="age" required min="1" max="123">
      <br><br>
        <label for="code">Best place to learn to code: (hint: starts with a "C")</label>
  <input id="code" name="code" type="text" required pattern="[cC]odecademy">
      <br><br>
      <input type="submit" value="Submit">
    </form>
<hr>
    <form method="post" action="">
			Your name:
			<br>
  		<input type="text" name="name">
 			<br><br>
  		What is the best thing about learning to code:
  		<br>
  		<input type="text" name="best">
  		<br><br> 
  		<input type="submit" value="Submit Answers">
		</form>
		<a href="index.php">Reset</a>
    <div id="form-output">
    <p id="name">Hello, <?= $_POST["name"]?></p>
    <p id="best"> <?= $_POST["best"]?></p>

    </div>

    <hr>
   
    <?php
function checkWord($input, $letter){
   if ($_SERVER["REQUEST_METHOD"] === "POST" && strtolower($input[0]) !== $letter) {
    return "* This word must start with the letter ${letter}!";
   } else {
     return "";
   }
}
?>
  
<h1>Time to Practice our ABCs</h1>
<form method="post" action="">
    Enter a word that starts with the letter "a":
    <br>
    <input type="text" name="a-word" id="a-word" value=<?= $_POST["a-word"];?>>
    <br>
    <p class="error" id="a-error"><?= checkWord($_POST["a-word"], "a");?></p>
    <br>
      
    Enter a word that starts with the letter "b":
    <br>
    <input type="text" id="b-word" name="b-word" value=<?= $_POST["b-word"];?>>
    <br>
    <p class="error" id="b-error"><?= checkWord($_POST["b-word"], "b");?></p>
    <br>
    Enter a word that starts with the letter "c":
    <br>
    <input type="text" id="c-word" name="c-word" value=<?= $_POST["c-word"];?>>
    <br>
    <p class="error" id="c-error"><?= checkWord($_POST["c-word"], "c");?></p>
    <br>
    <input type="submit" value="Submit Words">
</form>
<div>
    <h3>"a" is for: <?= $_POST["a-word"];?><h3>
    <h3>"b" is for: <?= $_POST["b-word"];?><h3>
    <h3>"c" is for: <?= $_POST["c-word"];?><h3>    
</div>  

<h2>Basic Data Sanitizing</h2>


<p>
When we want to display the user’s input within our own HTML, we should first run it through htmlspecialchars(). This built-in function transforms HTML elements into HTML entities (characters that represent HTML elements but won’t display as HTML), so that the PHP interpreter doesn’t recognize them as HTML. This prevents, for example, a man-in-the-middle attack in which malicious HTML is injected into a user’s view of our site.</p>



<?php
$data = "<a href=\"https://www.evil-spam.biz/html/\">Your account has been compromised! Click here to get technical support!!</a>";

echo htmlspecialchars($data);
///this removes the html tags and prints them as through they are plain strings
?>

<hr>
<?php
$validation_error = "";
$user_answer = "";
$submission_response = "";

// Write your code here:
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$user_answer = filter_var($_POST["answer"], FILTER_SANITIZE_NUMBER_INT);
  	if ($user_answer != "-5"){
    	$validation_error = "* Wrong answer. Try again.";
  	} else {
      $submission_response = "Correct!";
    }
	}



?>
<h2>Time for a math quiz!</h2>
<form method="post" action="">
<h4>Question 1:</h4>  
<p>What is 6 - 11?</p> 
<input type="text" name="answer" id="answer" value="<?= $user_answer;?>">
<br>
<span class="error" id="error"><?= $validation_error;?></span> 
<br> 
<input type="submit" value="Submit Your Answer">
</form>
<div>
  <p id="answer-display">Your answer was: <?= $user_answer;?></p>
  <p id="submission-response"><?= $submission_response;?></p>
</div>

<h3>Basic Validation with filter_var()</h3>

<p>We haven’t yet introduced the most powerful PHP function for sanitizing data: filter_var(). This function operates on a variable and passes it through a “filter” that produces the desired outcome.</p>
<p>
As its first argument, filter_var() takes a variable. As its second, it takes an ID representing the type of filtering that should be performed. </p>
<p>
There are several filters for sanitizing common input types, including FILTER_SANITIZE_EMAIL. The function will return either the sanitized version of the input or FALSE if it was unable to perform the sanitization.The FILTER_SANITIZE_NUMBER_INT filter removes all illegal characters from a number</p>

<hr>
<?php

$bad_email = 'fake - at - prank dot com';
if (filter_var($bad_email, FILTER_VALIDATE_EMAIL)){
  echo "Valid email!";
} else {
  echo "Invalid email!";
}

echo "<br>";
$bad_email = 'marina.shemesh@yahoo.com';
if (filter_var($bad_email, FILTER_VALIDATE_EMAIL)){
  echo "Valid email!";
} else {
  echo "Invalid email!";
}

?>

<?php
$validation_error = "";
$user_url = "";
$form_message = "";

// Write your code here:

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$user_url = $_POST["url"];
if (!filter_var($user_url, FILTER_VALIDATE_URL)) {
 $validation_error = "* This is an invalid URL.";
 $form_message = "Please retry and submit your form again.";
} else {
$form_message = "Thank you for your submission.";
} 

}


?>
<hr>

<form method="post" action="">
Your Favorite Website: 
<br>
<input type="text" name="url" value="<?php echo $user_url;?>">
<span class="error"><?= $validation_error;?></span>
<br>
<input type="submit" value="Submit">
</form>
<p> <?= $form_message;?> </p> 
    
<hr>
<h3>Using Options with filter_var()</h3>
<p>The filter_var() function accepts an optional third argument that allows us to fine-tune the operation of a given filter. This argument, often called $options, takes the form of a nested associative array.</p>
<p>
For example, the $options argument can help us validate that an integer is within a specified range when using the integer validation filter FILTER_VALIDATE_INT. To do this, we set $options to a nested array containing the"min_range" and "max_range" keys in a specific format, shown in the following example:</p>

<?php

function validateAdult ($age){
  $options = ["options" => ["min_range" => 18, "max_range" => 124]];  
  if (filter_var($age, FILTER_VALIDATE_INT, $options)) {
    echo("You are ${age} years old.");
  } else {
    echo("That is not a valid age.");
  }
}

validateAdult(18); // Prints: You are 18 years old.
echo "<br>";
validateAdult(124); // Prints: You are 124 years old.
echo "<br>";
validateAdult(8); // Prints: That is not a valid age.
echo "<br>";
validateAdult(200); // Prints: That is not a valid age. 

?>

<hr>
<?php
$message = "";
$month_error = "";
$day_error = "";
$year_error = "";
  
// Create your variables here:

$month_options = ["options" => ["min_range" => 1, "max_range" => 12]]; 

$day_options = ["options" => ["min_range" => 1, "max_range" => 31]]; 

$year_options = ["options" => ["min_range" => 1903, "max_range" => 2020]]; 


// Define your function here:
function validateInput($type, &$error, $options_arr){
  if (!filter_var($_POST[$type], FILTER_VALIDATE_INT, $options_arr)) {
 $error = $error = "* Invalid ${type}";
return FALSE;
  } else {
 return TRUE;
  } 
}





  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Uncomment the code below:
    $test_month = validateInput("month", $month_error, $month_options);
    $test_day = validateInput("day", $day_error, $day_options);
    $test_year = validateInput("year", $year_error, $year_options);    
    if ($test_month && $test_day && $test_year){
      $message = "Your birthday is: {$_POST["month"]}/{$_POST["day"]}/{$_POST["year"]}";
    }  
  }

?>

<form method="post" action="">
	Enter your birthday:
	<br>
	Month: <input type="number" name="month" value="<?= $_POST["month"];?>">
	<span class="error"><?= $month_error;?>		</span>
  <br>
	Day: <input type="number" name="day" value="<?= $_POST["day"];?>">
  <span class="error"><?= $day_error;?>		</span>
	<br>  
	Year: <input type="number" name="year" value="<?= $_POST["year"];?>">  
	<span class="error"><?= $year_error;?>		</span>
	<br>
	<input type="submit" value="Submit">
</form>
    <p><?= $message;?></p>

<?php
 $name = "Aisle Nevertell";
$length = strlen($name);
echo strlen($name);
echo "<br>";
if ($length > 2 && $length < 100){
  echo "That seems like a reasonable name to me...";
} 
?>

<hr>
<?php
$feedback = "";
$success_message = "Thank you for your donation!";
$error_message = "* There was an error with your card. Please try again.";

$card_type = "";
$card_num = "";
$donation_amount = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_type = $_POST["credit"];
    $card_num = $_POST["card-num"];
    $donation_amount = $_POST["amount"];

// Write your code here:

if (strlen($card_num)<100){
  if ($card_type === "mastercard"){
    if (preg_match("/5[1-5][0-9]{14}/", $card_num) === 1){
      $feedback = $success_message;
    } else {
      $feedback = $error_message;
    }
  } else if ($card_type === "visa") {
    if (preg_match("/4[0-9]{12}([0-9]{3})?([0-9]{3})?/", $card_num) === 1){
      $feedback = $success_message;
    } else {
      $feedback = $error_message;
   }
}
} else {
  $feedback = $error_message;
}
}
?>
<form action="" method="POST">
  <h1>Make a donation</h1>
    <label for="amount">Donation amount?</label>
      <input type="number" name="amount" value="<?= $donation_amount;?>">
      <br><br>
    <label for="credit">Credit card type?</label>
      <select name="credit" value="<?= $card_type;?>">
        <option value="mastercard">Mastercard</option>
        <option value="visa">Visa</option>
      </select>
      <br><br>
      <label for="card-num">Card number?</label>
      <input type="number" name="card-num" value="<?= $card_num;?>">
      <br><br>   
      <input type="submit" value="Submit">
</form>
<span class="feedback"><?= $feedback;?></span>

<!-- Mastercard
----------
Pattern: "/5[1-5][0-9]{14}/"
Examples:
5111111111111111
5522111111111111

Visa
----------
Pattern: "/4[0-9]{12}([0-9]{3})?([0-9]{3})?/"
Examples:
4004571528446170
4500040443327765 -->
<?php

echo "<br>";
echo "<br>";
  $users = ["coolBro123" => "password123!", "coderKid" => "pa55w0rd*", "dogWalker" => "ais1eofdog$"];

function isUsernameAvailable ($username){
  global $users;
  if (isset($users[$username])){//isset checks if the variable has been set
    echo $users[$username];//this gets the value
  } else {
    echo "${username} is available.";//this gets the key
  }
}

isUsernameAvailable("coolBro123");
echo "<br>";

isUsernameAvailable("aisleOfPHP");

?>
<hr>
<h3>Validating Against Back-end Data</h3>

<?php
$users = ["coolBro123" => "password123!", "coderKid" => "pa55w0rd*", "dogWalker" => "ais1eofdog$"];  
  
  
$feedback = "";
$message = "You're logged in!";
$validation_error = "* Incorrect username or password.";
$username = "";

// Write your code here:

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
  
    if (isset($users[$username]) && $password === $users[$username]) {
    $feedback = $message ;
  } else {
    $feedback = $validation_error;
  }
}




?>
  
<h3>Welcome back!</h3>
<form method="post" action="">
Username:<input type="text" name="username" value="<?php echo $username;?>">
<br>
Password:<input type="text" name="password" value="">
<br>
<input type="submit" value="Log in">
</form>
<span class="feedback"><?= $feedback;?></span>

<br>
<hr>

<h3>preg_replace()</h3>
<p>To sanitize data formatting, we can use the built-in preg_replace() function. The preg_replace() takes a regular expression, some replacement text, and a subject string; First, It searches through the subject string for instances that match the regular expression. Then, it outputs a copy of the subject string that has the matched instances replaced by the replacement string:</p>

<?php

$one = "codeacademy";
$two = "CodeAcademy";
$three = "code academy";
$four = "Code Academy";

$pattern = "/[cC]ode\s*[aA]cademy/";
$codecademy = "Codecademy";

echo preg_replace($pattern, $codecademy, $one);
// Prints: Codecademy
echo "<br>";
echo preg_replace($pattern, $codecademy, $two);
// Prints: Codecademy
echo "<br>";
echo preg_replace($pattern, $codecademy, $three);
// Prints: Codecademy
echo "<br>";
echo preg_replace($pattern, $codecademy, $four);

?>

<p>The pattern "/[^0-9]/" matches any character that isn’t the numbers 0 through 9. Using preg_replace(), we’ll replace all of those matched characters with an empty string—thus removing them. This will leave us with only the number characters remaining (stripping away all parentheses, hyphens, spaces, period, etc). Let’s look at some examples of how this works:</p>

<?php
echo preg_replace("/[^0-9]/", "", "123 - 989 - 1234");
// Prints: 1239891234
echo "<br>";
echo preg_replace("/[^0-9]/", "", "123.989.1234");
// Prints: 1239891234
echo "<br>";
echo preg_replace("/[^0-9]/", "", "(123) 989 - 1234");
// Prints: 1239891234
echo "<br>";
?>


<?php
$contacts = ["Susan" => "5551236666", "Alex" => "7779991717", "Lily" => "8181117777"];  
$message = "";
$validation_error = "* Please enter a 10-digit phone number.";
$name = "";
$number = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $number  = $_POST["number"];
   // Write your code here:
   if (strlen($number)<30){
     $formatted_number = preg_replace("/[^0-9]/", "", $number);
     if (strlen($formatted_number)===10){
       $contacts[$name] = $formatted_number;//here we add it to the contacts array
       $message = "Thanks ${name}, we'll be in touch.";
     } else {
       $message = $validation_error;
     } 
   } else {
     $message = $validation_error;
   }
};


?>
<html>
	<body>
  <h3>Contact Form:</h3>
		<form method="post" action="">
			Name:
			<br>
  		<input type="text" name="name" value="<?= $name;?>">
 			<br><br>
  		Phone Number:
  		<br>
  		<input type="text" name="number" value="<?= $number;?>">
  		<br><br> 
  		<input type="submit" value="Submit">
		</form>
		<div id="form-output">
			<p id="response"><?= $message?></p>
    </div>

    <hr>

<p>This is the contacts array:</p>

<?php
    print_r($contacts);
?>

<h3>header()</h3>

<p>We can use the PHP header() function to perform redirects. We call the header() function on a string that begins with "Location: ", followed by the URL we want to redirect the user to. For example: "Location: https://www.best-puppy-pix.com/". After invoking the header() function we’ll want to use the language construct exit to terminate the current script.</p>
<p>
To work properly, the header() function needs to be run before anything is output by the script—this includes HTML. So we’ll include it in our PHP script before our file outputs any HTML:</p>

<p>Navigate to http://localhost/codecademy_4/header.php to check this out.</p>
</body>
</html>