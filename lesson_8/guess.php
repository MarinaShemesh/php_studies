<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quessing game</title>
</head>


<body>
<?php
//ternary operation
$oldguess = isset($_POST['guess']) ? $_POST['guess'] : 'Start guessing';
//If there is a super global post with the nale of guess, use the global post with the name of guess or write "start quessing
?>


<p>Guessing game...</p>
<form method="post">
   <p><label for="guess">Input Guess</label>
   <input type="text" name="guess" id="guess" size="40" value="<?= htmlentities($oldguess) ?>"/>
   <input type="submit">
</form>

<!-- We have to show the user what he has used because maybe it is wrong -->
<p>Previous guess:
<?= $oldguess ?></p>
<br>




</body>
</html>
