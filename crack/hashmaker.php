<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HAsh maker</title>
</head>
<body>

<?php
////////SIDE NOTE
///this is how you make a hash, a long string, from a short piece of code

$string = '5501';

$codeString = hash('md5', $string);
echo $codeString;

////////THIS IS THE END OF THE SIDE NOTE

?>
    
</body>
</html>




