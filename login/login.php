<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
   
    <link rel="stylesheet" type = "text/css" href="style.css"/>
</head>

<div id="form">
 <form action="process.php" method="POST">
 <p>
  <label>Username:</label>
  <input type="text" id="user" name="user"/>
 </p>

 <p>
  <label>Password:</label>
  <input type="password" id="password" name="password"/>
 </p>
 
 <p>
  <input type="submit" id="button" value="Log in"/>
 </p>
 
 </form>


</div>
</body>
</html>