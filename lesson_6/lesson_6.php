<h1>PHP Arrays</h1>

<?php

$stuff = array("Hi", "there", "you");
echo $stuff[2];

echo "<br/>"; 

$bar = array ("my", "name", "is", "marina");
echo $bar[3];
echo "<br/>"; 
$bar2 = array (1, 2, 3, 4);
echo $bar2[3];
?>

<p>We can also write arrays as key/value pairs</p>

<?php
$stuff = array("name" => "Marina", 
              "surname" => "Shemesh" , 
              "sun_sign" => "Taurus",
               "sex" => "Female");
echo $stuff["sun_sign"];

echo "<br/>"; 
$Israel = array("name" => "Israel", 
              "surname" => "Shemesh" , 
              "sun_sign" => "Aries",
              "sex" => "male");

echo $Israel ["sex"];

$Israel["age"] = 54;
$Israel["divorced"] = FALSE;


echo("<pre>\n");
print_r($Israel);
echo("\n</pre>\n");

echo "<br/>";  

echo("<pre>\n");
var_dump($Israel);
echo("\n</pre>\n");

?>
<p>The function print_r() shows PHP data, it is very usefull for debugging because it shows the false</p>

<?php

echo("<pre>\n");
print_r($stuff);
echo("\n</pre>\n");

?>

<p>Var_dump gives more info than print_r()</p>

<?php

echo("<pre>\n");
var_dump($stuff);
echo("\n</pre>\n");

?>

<p>Var_dump allows you to print false</p>

<?php

$thing = FALSE;
echo("One\n");
print_r($thing);
//fasle does not appear
echo "<br/>";  
echo("Two\n");
echo "<br/>";  
var_dump($thing);
//false does appear

?>

<p>Add new items to an array with []</p>

<?php

$va = array();
$va[] = "Hello";
$va[] ="World!";

echo("<pre>\n");
print_r($va);
echo("\n</pre>\n");
$va[] = "Suckers!";

echo("<pre>\n");
print_r($va);
echo("\n</pre>\n");


?>



<p>Add new items to an array using a key</p>

<?php

$foo = array();
$foo["name"] = "Charles";
$foo["surname"] = "Dickens";
$foo["ship"] = "Beadle";
$foo["job"] = "Evolusionist";

echo("<pre>\n");
print_r($foo);
echo("\n</pre>\n");


?>
<p>Looping through a key/value array</p>

<?php

foreach($foo as $k => $v){
    echo "Key: ", $k, " Val: ", $v;
    echo "<br/>";  
}

echo "<br/>";  

foreach($Israel as $m => $n){
    echo "Key: ", $m, " Val: ", $n;
    echo "<br/>";
}

?>
<p>This is how a linear array loop will look like:</p>

<?php

//added another value to the $va array:
$va[]= "all of you!";

foreach($va as $k => $v){
    echo "Key: ", $k, " Val: ", $v;
    echo "<br/>";  
}




echo("<pre>\n");
print_r($va);
echo("\n</pre>\n");


$numbers = array(1,2,3,4,5,6,7,8,9,10);

foreach($numbers as $i => $v){
    echo "Index: ", $i, " Val: ", $v;
    echo "<br/>";  
}

?>


<h3>Array functions:</h3>
<p>Use the ternary operator to check if a key exists in an array</p>
<?php

$teacher= array();
$teacher["name"] = "Chuck";
$teacher["course"] = "WA4E";

//echo("<pre>");
//print_r($teacher);
//echo("</pre");

//note the single quotations

echo isset ($teacher['name']) ? "name is set\n" : "name is not set\n" ;
echo "<br/>";  
echo isset ($teacher['address']) ? "address exists" : "adress does not exists\n";

?>






