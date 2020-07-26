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

<?php

?>

</body>
</html>

