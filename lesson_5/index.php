<h1>Hello from Marina's HTML Page</h1>
<p>
<?php
   echo "Hi there.\n";
   $answer = 6 * 7;
   echo "The answer is $answer, what was the question again?\n";
?>
</p>
<p>Yes another paragraph.</p>

<p>
<?php
$x = "15" + 27;
echo $x, "\n";
print $x;
//this is my comment
echo "<br/>";        
//this is my comment
echo "<br/>";   

$z = 12;
$y = 15 + $z;
$z = $z + 1;
echo "z is $z and y is $y \n";

echo "<br/>";        
//this is my comment
echo "<br/>";   

$a = 'Hello ' . 'World!';
echo $a . "\n";

echo "<br/>";        
//this is my comment
echo "<br/>";   

//ternary operator is like a 'if then else'

$www = 123;
$msg = $www > 100 ? "Large" : "Small";
echo "First: $msg \n";

echo "<br/>";        
echo "<br/>";   

$www = 99;
$msg = $www > 100 ? "Large" : "Small";
echo "Last: $msg \n";

echo "<br/>";        
echo "<br/>";

$abc = 80;
$txt= ( $abc % 2 === 0) ? "Even" : "Odd";
echo "Second: $txt \n";

echo "<br/>";        
echo "<br/>";

// side-effect assignments use sparingly
echo "<br/>";
$out = "Hello";
$out = $out . " "; 
$out .=  "World!"; 
echo "$out\n";
echo "<br/>";
$count = 0;
$count += 1;

echo "Count: $count\n";


?>

<p>Here is some php math:</p>

<?php
//header('Content-type: text/plain');
$a = 56; 
$b = 12;
$c = $a / $b;
echo "C: $c\n";
//echo "<br/>";
$d = "100" + 36.25 + TRUE;
//TRUE turns into a 1
echo "<br/>";
echo "D: " . $d ."\n";
echo "<br/>";
echo "D2: " . (string) $d . "\n";
echo "<br/>";
$e = (int) 9.9 - 1;
//the (int) turns it into a real number,9
echo "E: $e\n";
echo "<br/>";

$f = "sam" + 25;
//"sam" turns into 0 here, this is not good code
echo "F: $f\n";

echo "<br/>";
$g = "sam" . 25;
echo "GF: $g\n";

//the . treats the 25 as a string

////Casting
//false becomes nothing and true becomes 1;
echo "<br/>";
echo "<br/>";
echo "A".FALSE."B\n";
echo "<br/>";
echo "X".TRUE."Y\n";

//Equality vs Identity
//watch the == php is very indicriminate
?>
<p>The equals are weird in php</p>

<?php
if ( 123 == "123") print ("Equal 1\n");
echo "<br/>";
if ( 123 == "100" + 23) print ("Equal 2\n");
echo "<br/>";

//remember that false is 0
if ( FALSE == "0") print ("Equal 3\n");
echo "<br/>";
if ( 5 < 6 == "2" - "1") print ("Equal 4\n");
echo "<br/>";

//remember that TRUE equals 1
if ( 5 < 6 == "2" - "1") print ("Equal 5\n");
echo "<br/>";
if ( 5 < 6 === TRUE) print ("Equal 6\n");

?>

<p>Working with strings</p>
<?php

$vv = "Hello World!";
echo "First: " .strpos($vv, "Wo"). "th position";
echo "<br/>";
echo "Second: " .strpos($vv, "H"). "th position";
echo "<br/>";
echo "Third: " .strpos($vv, "Zz"). "th position";
echo "<br/>";

if (strpos($vv, "He") == False ) echo "Wrong A";
echo "<br/>";
//always use 3 === because line 149 will look s though it is true;
if (strpos($vv, "He") === False ) echo "Wrong A.5";
echo "<br/>";

if (strpos($vv, "ZZ") == False ) echo "Right B";
echo "<br/>";

if (strpos($vv, "He") !== False ) echo "Right C";
echo "<br/>";

if (strpos($vv, "ZZ") === False ) echo "Right D";
echo "<br/>";

print_r(FALSE); print(FALSE);
echo("Where were they?");

?>


<p>Control Structures</p>
<?php

$ans = 42;
if ( $ans = 42){
   print "Hello World!";
} else {
   print "Wrong answer";
}

echo "<br/>";
//Multiway

$x = 11;

if ( $x < 2) {
   print "Small";
} elseif ( $x < 10){
   print "Medium";
} else {
   print "Large";
}
echo "<br/>";
print "All done";

echo "<br/>";
//while loop

$fuel = 10;

while($fuel > 1) {
   print "Vroom vroom";
   echo "<br/>";
   $fuel = $fuel - 1;

}
echo "<br/>";
//for loop

for ($count = 1; $count <= 6; $count++) {
   echo "$count times 6 is ". $count * 6;
   echo "<br/>";
}

echo "<br/>";
//breaking out loop 
// the break statement ends the current loop and jumps to the statement following the loop
for ($count = 1; $count <= 600; $count++) {
   if ($count == 5) break;
   echo "Count: $count\n";
   echo "<br/>";
   
}
echo "Done";

//continue
//continue ends the current iteration, jumps to the top of the loop and starts the next iteration

echo "<br/>";
echo "<br/>";

for ($count = 0; $count < 10; $count++) {

   if (($count % 2) == 0) continue;
   echo "Count: ". $count * 1;
   echo "<br/>";
}
echo "Done";
?>
