<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>   


        <link href="css/style.css" rel="stylesheet"> 
        
        <link href="css/bootstrap-social.css" rel="stylesheet">

        <link href="css/font-awesome.css" rel="stylesheet"> 

        <link rel="shortcut icon" href="img/web_icon.ico" type="image/x-icon" /> 



    <title> Ristorante Con Fusion </title>
</head>

<body>

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
              <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" height=30 width=41></a>
                </div>
               <div id="navbar" class="navbar-collapse collapse"> 
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"
                         aria-hidden="true"></span>Home</a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                         role="button" aria-haspopup="true" aria-expanded="false">
                         Menu <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                            <li><a href="#">Appetizers</a></li>
                            <li><a href="#">Main Courses</a></li>
                            <li><a href="#">Desserts</a></li>
                            <li><a href="#">Drinks</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Specials</li>
                            <li><a href="#">Lunch Buffet</a></li>
                            <li><a href="#">Weekend Brunch</a></li>
                        </ul>
                     </li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    
                    </ul>

                     

                    <ul class="nav navbar-nav navbar-right">
                
                    <?php
                         if(isset($_SESSION['name']))
                         {
                             echo $_SESSION['name'];
                             echo '<a href="logout.php">Logout</a>';
                         }

                         else
                         {

                            echo  "<li><a data-toggle='modal' data-target='#loginModal'>";
                              echo "<span class='glyphicon glyphicon-log-in'></span> Login</a>";
                              echo "</li>";

                         }   
                   
                    ?>
                   
                </ul>
               </div> 
            </div>
    </nav>   
