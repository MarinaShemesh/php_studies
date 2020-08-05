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
# Dave
$names = ["Ann", "Bob", "Cassidy", "Dave", "Ed", "Fohn", "Garry", "Ham"];
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

</body>
</html>