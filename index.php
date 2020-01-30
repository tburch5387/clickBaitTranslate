<?php
    define("TITLE", "PHP Variables & Constants"); 
?>

<!DOCTYPE html>

<html>
    <head>
        <title><?php echo (TITLE) ?></title>
    </head>
    
    <body>
        
       <!--general syntax (remove brackets around ? to turn code on)
          <[?]php     
            echo ("Hello World"); 
            //single line comment
            /*multi
              line
              comment
            */
            ECHO ("Hello World");
            //keywords are not case sensitive, variables are
            $name = "Travis";
        
            echo ("Hello "); $name; 
        
            echo ("Hello "); $Name; //doesn't work as Name doesn't exist    
         ?>
         <[?]php
        -->
            <?php 
        //PHP Variables
         
            //boolean: true/false
            $loggenIn = true;
            //integer: and whole number
            $myAge = 32;
            //floating point: decimal number
            $totalPrice = 123.45;
            //string: simple text
            $fullName = "Travis Burch";
            
            //display variables
            echo "Hello, my name is $fullName and I am $myAge years old!";
            
            //constants: case sensitive non-variable assignments ALLCAPS
            echo "<br>";
            echo nl2br(TITLE);
            
        ?>
        
    </body>
</html>

