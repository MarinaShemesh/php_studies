<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marina Shemesh PHP</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css" />
   
</head>
<body>

<h1>Marina Shemesh - Lesson 5 PHP assignment</h1>

<p>The SHA256 hash of "Marina Shemesh" is:</p> 
<?php
print hash('sha256', 'Marina Shemesh');

?>
<pre>
ASCII ART:

<div class="letter">


.----------------. 
| .--------------. |
| | ____    ____ | |
| ||_   \  /   _|| |
| |  |   \/   |  | |
| |  | |\  /| |  | |
| | _| |_\/_| |_ | |
| ||_____||_____|| |
| |              | |
| '--------------' |
 '----------------' 

 </div>

</pre>

<a href="fail.php">Click here to cause a traceback</a>
<br>
<br>
 <a href="check.php">Click here to check the error setting</a>

</body>
</html>