<?php
    define("TITLE", "If, Else &amp; Elseif Statements and LOOOOPS");
?>


<!DOCTYPE html>

<html>

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo TITLE; ?></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            
            
            <?php
            //IF expression is TRUE, do something
            //IF expression is FALSE, don't do anything
                $foo = 99;
                $bar = 102;
                if ($foo > $bar) {
                    //code to execute if TRUE
                    echo "$foo is greater than $bar";
                
                }
            //add ELSEIF
                elseif ($foo == $bar) {
                   echo "Bruh! $foo and $bar are the same number!!"; 
                }
            //add ELSE statement
                else {
                    //execute if false
                    echo "nah fool, $bar is " .($bar-$foo). " more than $foo";
                }
            ?>
        </div>
        <br>
        <hr>
        <div class="container">
            <?php
                $startingNum = 50;
                 while ($startingNum <= 60){
                     //do the things while condition is true
                     echo "$startingNum <br>";
                     $startingNum ++;
                 };
            
                //for loop
                for ($startVal = 30;     $startVal <= 40; $startVal++) {
                    echo "Number $startVal <br>";
                }
            
                //Foreach Loop
                
                $friends = array("Jim", "Sandra", "Kyle", "Cassandra");
                foreach ($friends as $friend) {
                    //output each value
                    echo "$friend is my friend! <br>";
                }
            
                //Do While loop
                $foo = 10;
            
                do {
                    //code
                    echo "Numero $foo <br>";
                    //increment
                    $foo++;
                    
                } while ($foo <= 13);
                    
            ?>
        
        </div>
        
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    </body>
</html>