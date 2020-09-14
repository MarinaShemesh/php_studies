<html>
<body>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 7</title>
</head>

<body>
    
<br>
<h1>This is lesson 7 of the PHP coursera course</h1>
<p>13 September 2020</p>

<h2>Functions</h2>

<?php

$string = "Hello world!";
echo $string;

echo "<br/>";

$a = 56; 
$b = 12;
$c = $a / $b;
echo "C: $c\n";


echo "<br/>";
echo strrev($string);
echo "<br/>";
echo str_repeat("Marina ",2);
echo "<br/>";
echo strtoupper("yell");
echo "<br/>";
echo strlen("Bezuidenhout");
echo "<br/>";
echo "<br/>";


function greet(){
    print "My name is Don Juan de Marco.";
}

greet();
echo "<br/>";
greet();
echo "<br/>";
echo "<br/>";


function slang ($language){
    if($language == 'es') return "Hola";
    if($language == 'fr') return "Bonjour";
    //return 'Hello';
}


print slang('es') . " Marina";
echo "<br/>";
print slang('fr') . " Marina";
echo "<br/>";

///here we make use of call by value. The function use a COPY of the argument
//to preserve the original value

function double($alias){
    $alias = $alias * 2;
    return $alias;
}

echo double(5);
echo "<br/>";
echo double(31);
echo "<br/>";
$val = 10;
$dval = double($val); 
echo "Value = $val Doubled = $dval";
echo "<br/>";

//this is how you call by reference by using a $
//this is because we want the function to change one of its arguments

function triple(&$realthing){ //note the ampersand now
    $realthing = $realthing * 3;

 }

$value = 10;
triple($value);

echo "Triple = $value";


?>

<h2>Variable Scope</h2>

<?php

function tryzap (){
 $val = 100;
}

$val = 10;
tryzap();
echo "<br/>";
echo "TryZap = $val";

echo "<br/>";
echo "<br/>";

//avoid global variables at all costs
//if you HAVE to use a global variable, use one with a long and unique name $LastOAuthBodyString
function dozap (){
   global $value;
   $value = 100;
   }

$value = 10;
dozap();
echo "DoZap = $value";

//this will give you the version of php you have and all the info about it
//phpinfo();


?>

<h2>Modularity</h2>

<p> Modularity is really just the idea of capturing something once, and reusing it over and over. </p>
<p>For example top.php, nav.php and footer.php</p>

<?php

?>



</body>
</html>

