<?php 
    define( "TITLE", "PHP Arrays");
?>

<!DOCTYPE html>

<html>
    <head>
        <title><?php echo Title; ?></title>
        <!--bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!--[if lt IE 9]>
	   <script     src="bower_components/html5shiv/dist/html5shiv.js"> </script>
       <script src= "https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            
            <?php 
                //VARIABLES
                $username   = "johndoe";
                $fullName   = "John Doe";
                $age        = 32;
                $gender     ="male";
                $country    ="Mexico";
            //assign in array instead of variable
                $user   = array(
                            "johndoe",  //0
                            "John Doe", //1
                            32,         //2
                            "male",     //3
                            "Mexico"    //4
                        );
            //ECHO VALUES
                echo $user[0]."<br>";
                echo $user[1]."<br>";
                echo $user[2]."<br>";
                echo $user[3]."<br>";
                echo $user[4]."<br>";
            //ASSOCIATIVE ARRAYS
                $people = array(
                            "username"  => "janedoe",
                            "fullName"  => "Jane Doe",
                            "age"       => "32",
                            "gender"    => "female",
                            "country"   => "Mexico"
                        );
            //echo array
                echo $people["username"]. "<br>";
                echo $people["fullName"]. "<br>";
                echo $people["age"]. "<br>";
                echo $people["gender"]. "<br>";
                echo $people["county"]. "<br>";
            //multidimensional array
                $employees = array(
                
                                array( //index = 0 (whole array)
                                    "username"  => "janedoe",
                                    "fullName"  => "Jane Doe",
                                    "age"       => "32",
                                    "gender"    => "female",
                                    "country"   => "Mexico"
                                
                                ),
                                array( //index = 1
                                    "username"  => "jondoe",
                                    "fullName"  => "Jon Doe",
                                    "age"       => "32",
                                    "gender"    => "male",
                                    "country"   => "Canada"
                                
                                ),
                
                    );
                echo "<hr><br>";
                //echo values of multi-array
                echo $employees[0]["fullName"]."<br>";
                echo $employees[1]["fullName"];
            
            ?>
        </div>
        
        
        <!--bootstrap scripts-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>
