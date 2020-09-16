
<?php
//this is the model part. Together the model and the view is called the controller
$oldguess = '';
$message = false;
if(isset($_POST['guess']) ){

    $oldguess = $_POST['guess'] + 0;
    if($oldguess == 42) {
        $message = "That is correct!";
    } else if ($oldguess < 42){
        $message = "Too low";  
    } else {
        $message = "Too high";  
    }
}

?>

<!-- This is the view part -->

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quessing game</title>
</head>


<body>
<h1>Guessing game</h1>
<form method="post">
   <p><label for="guess">Guess a number under 100</label><br><br>
   <input type="text" name="guess" id="guess" size="10" value="<?= htmlentities($oldguess) ?>"/>
   <input type="submit">
</form>

<h2>
<?= $message ?></h2>
<br>

</body>
</html>
