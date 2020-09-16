<html>
<body>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 8</title>
</head>

<body>
    
<br>
<h1>This is lesson 8 of the PHP coursera course</h1>
<p>14 September 2020</p>

<h2>HTML forms</h2>

<h4>Quessing game</h4>

<form>
 <p><label for="guess">Input guess</label> 
 <input type="text" name = "guess" id = "guess"/> </p>
 <input type="submit"/>

</form>

<pre>
$_GET:

<?php
print_r($_GET);
?>
</pre>

<hr>

<h4>Using POST with forms</h4>
<p>If you use a POST verb, it will not show up in the URL</p>

<form method = "post">
 <p><label for="guess">Input guess</label> 
 <input type="text" name = "guess" id = "guess"/> </p>
 <input type="submit"/>

</form>

<pre>
$_GET:

<?php
print_r($_GET);

?>
<br>

$_POST:
<?php
print_r($_POST);


?>
</pre>

<hr>

<h4>bunch of form types</h4>
<p>Many field types...</p>
<form method="post" action="lesson_8.php">
   <p><label for="inp01">Account:</label>
   <input type="text" name="account" id="inp01" size="40"></p>

   <p><label for="inp02">Password:</label>
   <input type="password" name="pw" id="inp02" size="40"></p>

   <p><label for="inp03">Nick Name:</label>
   <input type="text" name="nick" id="inp03" size="40"></p>

   <p>Preferred Time:<br>
    <input type="radio" name="when" value="am">AM<br>
    <input type="radio" name="when" value="pm" checked="">PM</p>

   <p>Classes taken:<br>
    <input type="checkbox" name="class1" value="si502" checked="">
        SI502 - Networked Tech<br>
    <input type="checkbox" name="class2" value="si539">
        SI539 - App Engine<br>
    <input type="checkbox" name="class3">
        SI543 - Java<br>
   </p>

   <p><label for="inp06">Which soda:
    <select name="soda" id="inp06">
    <option value="0">-- Please Select --</option>
    <option value="1">Coke</option>
    <option value="2">Pepsi</option>
    <option value="3">Mountain Dew</option>
    <option value="4">Orange Juice</option>
    <option value="5">Lemonade</option>
    </select>

   </label></p>
   <p><label for="inp07">Which snack:
    <select name="snack" id="inp07">
    <option value="">-- Please Select --</option>
    <option value="chips">Chips</option>
    <option value="peanuts" selected="">Peanuts</option>
    <option value="cookie">Cookie</option>
    </select>
   </label></p>

   <p><label for="inp08">Tell us about yourself:<br>
    <textarea rows="10" cols="40" id="inp08" name="about">I love building web sites in PHP and MySQL.
    </textarea></label></p>

   <p><label for="inp09">Which are awesome?<br>
<select multiple="multiple" name="code[]" id="inp09">
  <option value="python">Python</option>
  <option value="css">CSS</option>
  <option value="html">HTML</option>
  <option value="php">PHP</option>
</select>
</label></p><p>
   <input type="submit" name="dopost" value="Submit">
   <input type="button" onclick="location.href='http://www.wa4e.com/'; return false;" value="Escape">
   </p>
</form>
<pre>$_POST:

<?php
print_r($_POST);
?>
</pre>
<hr>

<h4>HTML input types</h4>

<form method="post" action="lesson_8.php">

<p>Select your favourite color:
<input type="color" name="favcolor" value ="0000ff"><br/><br/>
Birthday: 
<input type="date" name ="bday" value = "09-05-1969"><br/><br/>
Email: 
<input type="email" name ="email"><br/><br/>
Quantity (between 1 and 5):
<input type="number" name ="quantity"><br/><br/>
min="1" max="5"<br/>
Add your homepage:
<input type="url" name ="homepage"><br/><br/>
Transportation:
<input type="flyinh" name ="saucer"><br/> <!-- even weird things will work -->
<input type="submit" name="dopost" value="Submit">
</form>

</p>

<pre>$_POST:

<?php
print_r($_POST);
?>
</pre>
<hr>

<h4>Always use htmlentities() when you work with data filled in by the user</h4>

<h4>Model - view - controller</h4>
<p>Place your php code at the top and the html at the bottom</p>


</body>
</html>

