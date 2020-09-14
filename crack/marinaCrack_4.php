<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Four character password cracking </title>
</head>
<body>

<h1>Four number password cracking</h1>

<?php

$goodtext = "Not found";


//here we get the code from the filled in form:
if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];


    // This is our alphabet:
    $num = "1234567890";
    $show = 15;

    //now we start looping through the entire alphabet to get our first character
    for( $i = 0; $i < strlen($num); $i++){
        $ch1 = $num[$i];

  //the loop to get the second character
        for($j=0; $j<strlen($num); $j++ ) {
            $ch2 = $num[$j];  

  //the loop for the third character      
            for($k=0; $k<strlen($num); $k++ ) {
                $ch3 = $num[$k];  

  //the loop for the fourht character
            for($l=0; $l<strlen($num); $l++ ) {
                $ch4 = $num[$l];  


             // Concatenate the two characters together to 
            // form the "possible" pre-hash text
            $try = $ch1.$ch2.$ch3.$ch4;

                 // Run the hash and then check to see if we match
                 $check = hash('md5', $try);
                 if ( $check == $md5 ) {
                     $goodtext = $try;
                     break;   // Exit the inner loop
                 }
     
                 // Debug output until $show hits 0
                 if ( $show > 0 ) {
                     print "$check $try <br>";
                     $show = $show - 1;
                 }

                  } //end of the fourth loop
            
                } //end of the third loop

        }//end of the second loop

    } //end of first loop
    echo "<br>";
   
    $time_post = microtime(true);
    print "Elapsed time: ";
    print $time_post-$time_pre;
    print "\n";

} //end of algo



?>

<p>
<form>
<input type="text" name="md5" size="60" />
<input type="submit" value="Crack the code"/>
</form>
</p>
<p>PIN: <?= htmlentities($goodtext); ?></p>
<p>
<a href="marinaCrack_4.php">Reset</a>

</p>
    
</body>
</html>