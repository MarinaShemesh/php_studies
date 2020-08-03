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

$count = 1;
while ($count <= 100)
{
  if ($count % 33 === 0) {
    echo $count . " is divisible by 33\n";
  }
  $count += 1;
}
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
for ($i = 10; $i >= 0; $i--){
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

</body>
</html>