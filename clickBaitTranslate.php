<?php 
define("TITLE", "Honest Click Bait Headlines") ;

if(isset($_POST["fix_submit"])) {
    //grab value from textarea in $_POST collection
    //make text lowercase (strtolower() function)
    //store in a variable
    $clickBait = strtolower($_POST["clickbait_headline"]);
    
    //store an array of clickbaity words/phrases
    $a = array(
        "scientists",
        "doctors",
        "hate",
        "stupid",
        "wierd",
        "simple",
        "trick",
        "shocked me",
        "you'll never believe",
        "hack",
        "epic",
        "unbelievable",
        );
    //store an array of replacement phrases, in the same order as the original list
    
    $b = array(
        "so-called scientists",
        "doctor spokespeople",
        "aren't threatened by",
        "average",
        "completely normal",
        "ineffective",
        "method",
        "underwhelmed me",
        "you won't really be surprised by",
        "slightly improve",
        "boring",
        "normal"
        );
    //juse the str_replace() function to replace the words
    //uppercase first letter using ucwords() function
    //store in a variable
    
    $honestSwap = ucwords(str_replace($a,$b, $clickBait));

}


?>
<!DOCTYPE html>

<html>
<head>
    <title><?php echo Title; ?></title>
    <!--bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
   <script     src="bower_components/html5shiv/dist/html5shiv.js"> </script>
   <script src= "https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <h1><?php echo TITLE; ?></h1>
        <p>Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program!</p>
        
        <!--inline PHP (not best practice-->
        <div class="row">
            <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea>
                <br>
                <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make Honest!</button>
            </form>
        </div>
        <br>
        <hr>
        <?php
        //echo uppercase (ucwords()) version of original string
        if (isset($_POST["fix_submit"])){
            echo "<strong class='text-danger'>Original Headline</strong><h4> ".ucwords($clickBait)."</h4>";
        
            "<br>";
        //echo new string
              echo "<strong class='text-success'>Honest Headline</strong><h4> $honestSwap</h4>";
        }
        ?>
    </div>
    <!--bootstrap scripts-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>