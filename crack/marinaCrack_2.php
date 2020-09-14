<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Four character password cracking </title>
</head>
<body>

<h1>Three character password cracking</h1>

<?php

$goodtext = "Not found";


//here we get the code from the filled in form:
if ( isset($_GET['code']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['code'];


    // This is our alphabet:
    $text = "abcdefghijklmnopqrstuvwxyz";
    $show = 15;

    //now we start looping through the entire alphabet to get our first character
    for( $i = 0; $i < strlen($text); $i++){
        $ch1 = $text[$i];

  //the loop to get the second character
        for($j=0; $j<strlen($text); $j++ ) {
            $ch2 = $text[$j];  

  //the loop for the third character      
            for($k=0; $k<strlen($text); $k++ ) {
                $ch3 = $text[$k];  

             // Concatenate the two characters together to 
            // form the "possible" pre-hash text
            $try = $ch1.$ch2.$ch3;

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
<input type="text" name="code" size="60" />
<input type="submit" value="Crack the code"/>
</form>
</p>
<p><p>Original Text: <?= htmlentities($goodtext); ?></p></p>
<p>
<a href="marinaCrack.php">Reset</a>

</p>
    
</body>
</html>