<?php
$question = array("2 * 2"=> 4, "6 * 3"=>18, "10 / 5"=> 2);
echo $question["2 * 2"];
echo $question["6 * 3"];
echo $question["10 / 5"];

?>






<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="style.css" rel="stylesheet">
<title>Marina's math trainer</title>

</head>
<body>
<div class="container">
<h1>Let's play</h1>

<div class="container">
<form>
<label for="nam">2 * 2</label>
<input type="text" id="pin" name="one" maxlength="4" size="4"><br><br>

<?php
if($question["2 * 2"] == $_GET["one"]){
    echo "that is correct!";
} else {
    echo "that is npt correct";
  
}

?>
<br><br>

<label for="nam">6 * 3</label>
<input type="text" id="pin" name="two"><br><br>


<label for="nam">10 / 5</label>
<input type="text" id="pin" name="three"><br><br>
<input type="submit" value="Submit">

<pre>
$_GET:

<?php
print_r($_GET);
?>
</pre>


</form>

</div>
</body>

<!-- https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_input_size -->
