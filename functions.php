<?php
    //functions.php

function checkForClickBait () {
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

    //return an array of the variables so we can access them globally
    //called in if isset in clickBaitv2
    return array($clickBait, $honestSwap);
}

//requires two parameters
//values of the parameters will be the values retuened in the prior function
function displayHonestSwap ($x, $y) {
    echo "<strong class='text-danger'>Original Headline</strong><h4> ".ucwords($x)."</h4>";

    "<br>";
//echo new string
      echo "<strong class='text-success'>Honest Headline</strong><h4> $y</h4>";

}

?>