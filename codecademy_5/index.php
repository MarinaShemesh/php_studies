<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codecademy_5</title>
</head>
<body>
    <h1>This is my fifth Codecademy page</h1>

    <h3>What are Classes?</h3>

    <p>To define a class, we use the class keyword followed by the class name (typically title cased in PHP) and curly brackets.<br>Within the curly brackets, we can add properties, which define the data each object of the class will contain</p>

    <?php
    class Beverage {
        public $color, $opacity, $temperature;//this is the class with three added properties
      }
    ?>

    <p>Since objects are specific instances of a class, the process of creating them is called instantiation.

     In PHP, objects are instantiated using the new keyword followed by the class name and parentheses.</p>

    <p>We interact with an object’s properties using the object operator (->) followed by the name of the property (without the dollar sign, $). We can use this syntax to assign values to object properties</p>


<?php
 
      $tea = new Beverage();//this is an object

      $tea->temperature= "hot";//here we assign a value to the temperature property

      echo $tea->temperature;//Use the syntax to access the existing value of object properties.
      echo "<br>";
      print_r($tea);
      echo "<br>";
      $tea->color= "brown";
      echo "<br>";
      print_r($tea);

    ?>

    <h3>Methods</h3>
    <p>Methods are functions each object can contain. Methods are frequently used to interact with an object’s properties in a defined manner.

Methods are defined with the same syntax we use when declaring functions (except they are defined within the curly brackets of a class).</p>

<p>The $this variable refers to the current object; when we invoke this method, $this refers to the specific object that called the method.</p>

<p>Methods are accessed in a similar fashion to properties, using the object operator (->), but in order to invoke them, use parentheses at the end.</p>

<?php

$soda = new Beverage();
$soda->color = "black";
$soda->temperature = "cold";

echo "<br>";
print_r($soda);

///I used the class Drink instead of Beverage because Iwna to use a class with a method and do
//not yet know how to add a methid to an existing class

?>

<h3>Constructor Method</h3>

<p>A constructor method is one of several magic methods provided by PHP. This method is automatically called when an object is instantiated. A constructor method is defined with the special method name __construct.</p>

<p>Constructors can also have parameters. These correspond to arguments passed in when using the new keyword. </p>

<?php
class Drink {
    public $temperature, $color, $opacity;
     function getInfo() {
      return "This drink is " .$this->temperature . " and " . $this->color;
    }

    function __construct($temperature, $color) {/// the constructor functions allows us to quickly add new objects
        $this->temperature = $temperature;
         $this->color= $color;
     }
     
  }
  
//this is before the constructor function
//   $soda = new Drink();
//   $soda->color = "black";
//   $soda->temperature = "cold";


//this is after the constructor function
$soda = new Drink ("cold", "black");
$coffee = new Drink("warm", "with milk");
$water = new Drink("cool", "transparent");
  
  echo "<br>";
  echo $soda->getInfo();
  echo "<br>";
  echo $coffee->getInfo();
  echo "<br>";
  echo $water->getInfo();
  echo "<br>";

?>

<h3>Inheritance</h3>

<p>Imagine we wanted a Dog class in our program. This class would have all the properties of the more general Pet class, but it would have a few more properties and methods specific to only dogs. Rather than having to manually duplicate the things the two classes have in common, we can create a new class which extends the other. The original class can be thought of as the parent and the new class can be thought of as the child class. In object oriented programming, we call this process inheritance since the child class inherits properties and methods from its parent class. A child class is also referred to as a subclass in PHP.</p>

<p>To define a class that inherits from another, we use the keyword extends.</p>

<?php

//added a new subclass to the parent class of Drink
class Milk extends Drink {
    function __construct() {
      $this->temperature = "cold";
    }
    function getInfo(){
      return parent::getInfo() . " I like my milk this way.";
    }
    
  }

  //we used the method from the parent class "getInfo()' but changed it a bit in the subclass
  $milk = new Milk();
  echo $milk->getInfo();

?>


<h3>Visibility - Private Members</h3>

<p>To understand visibility we need to think about how classes will be used in complex programs—in large applications, a class might be used in diverse situations (passed around inside functions and used in code written by numerous developers). When we think about our classes being used in many situations, we’ll want to consider restricting access to certain member data.
<br>
Up to this point, we’ve been using public visibility for properties. This is also the default visibility for methods. A public visibility means members can be accessed from within the object or from outside it. But sometimes we’ll want a member to only be accessible from within the object. To do this, we can declare this member private.</p>


<?
class Pet {
  //private $healthScore = 0; 
  //public $healthScore = 0; 
  protected $healthScore = 0; 
  function exercise(){
    $this->healthScore++;
  }
  function feed(){
    $this->healthScore++;
  }
  function healthCheck(){
    if ($this->healthScore >= 2){
      echo "This is a healthy pet!";
    } else {
      echo "This is an unhealthy pet";
    }
  }
}

$dog = new Pet();
echo $dog->healthCheck();
echo "<br>";


$dog->exercise(); //if the $healthScore is private, this will throw an error. USe 'Protected' to make it safer.
$dog->exercise(); 
echo $dog->healthCheck();
echo "<br>";

?>


<p>A class’s private members can only be accessed using methods within that class itself. This isn’t usually the desired effect when we have subclasses. For example, the following code will throw a Fatal Error, since healthScore is private to the Pet class and can’t be accessed from the Horse class</p>

<p>To allow members to be accessed from within child classes, we can set the visibility within the parent class to protected rather than private. This enables child classes to access these properties and methods internally while still preventing them from being accessed externally</p>

<?
class Horse extends Pet {
  function brushTeeth(){
    $this->healthScore++; 
  }
}

echo "<br>";

$my_pet = new Horse();
$my_pet->brushTeeth(); 
echo $my_pet->healthCheck();
$my_pet->brushTeeth(); 
echo "<br>";
echo $my_pet->healthCheck();

?>


<h3>Getters and Setters</h3>

<p>The concept of only accessing properties through methods is commonly referred to as using getters and setters.</p>
</body>
</html>