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


?>


</body>
</html>