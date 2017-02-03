<!--<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->
         <!--

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
-->
<?php require('C:\xampp\htdocs\Bootstrap\views\header.php');  ?>


<!--


 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
              <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo.png" height=30 width=41></a>
                </div>
               <div id="navbar" class="navbar-collapse collapse"> 
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"
                         aria-hidden="true"></span>Home</a></li>
                    <li><a href="aboutus.html">About</a></li>
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
                    <li><a href="#">Gallery</a></li>
                    
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                
                   
                    <li><a data-toggle="modal" data-target="#loginModal">
                    <span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
            
                   
                </ul>
               </div> 
            </div>
    </nav>   
-->
  

   
       <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login </h4>
            </div>
            <div class="modal-body">

              <form  action="C:\xampp\htdocs\Bootstrap\login_verifier.php"  class="form-inline">
                    
                        <div class="form-group">

                       <label for="name">Email</label>

                       <input type="text" class="form-control" placeholder="Enter ur Name" name="Email">

                       </div>

                       <div class="form-group">

                       <label for="password">Password</label>

                       <input type="password" id="password">

                       </div>

                       <button type="button" class="btn btn-primary">SignIn</button>

              </form>

                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>     

            </div>
        </div>
        </div>
    </div>


    <div id="ReservationModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Reservation Form</h4>
            </div>
            <div class="modal-body">
           
           
           
            
 
            
 
              <h3 align=center> Reserve your table</h3>
             
            

             
  
            <div class="btn-group" id="radio-grp" role="group" aria-label="...">
          
            <p style="padding:10px;"></p>

             <input type="radio">1</input>

             <input type="radio">2</input>

             <input type="radio">3</input>

             <input type="radio">4</input>

            </div>

            <p style="padding:5px;"></p> 

            <div class="input-group">
             
             <span>time <span>

             <input type="text" placeholder="time">  
  
            </div>
              
             <p style="padding:5px;"></p>  
              
             <div>
 
             <input type="button" value="Reserve">
             </div>

              

                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>     

            </div>
        </div>
        </div>
    </div>






    <header class="jumbotron row-header">

        <!-- Main component for a primary marketing message or call to action -->

        <div class="container">
         
                <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <h1>Ristorante con Fusion</h1>
                    <p style="padding:40px;"></p>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding:20px;"></p>
                    <img src="img/logo.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-2">
                     <p style="padding-left:10px;padding-top:65px;"></p>
                     <a type="button" class="btn btn-default" data-toggle="modal" data-target="#ReservationModal">Reserve a Table</a>  
                </div>
            </div>
            
        </div>
    </header>

    <div class="container">

    <div class="row row-content">



    <div id="mycarousel" class="carousel slide" data-ride="carousel">

          <div class="btn-group" id="carouselButtons">
                    <button class="btn btn-danger btn-sm" id="carousel-pause">
                      <span class="fa fa-pause" aria-hidden="true"></span>
                    </button>
                    <button class="btn btn-danger btn-sm" id="carousel-play">
                      <span class="fa fa-play" aria-hidden="true"></span>
                    </button>
                </div>

              <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
                </ol>

                <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>



              <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive" src="img/uthappizza.png" alt="Uthappizza">
                        <div class="carousel-caption">
                      <  <h2>Uthappizza  <span class="label label-danger">Hot</span> <span class="badge">$4.99</span></h2>
                      Adithya
                        <p>A unique combination of Indian Uthappam (pancake) and
                          Italian pizza, topped with Cerignola olives, ripe vine
                          cherry tomatoes, Vidalia onion, Guntur chillies and
                          Buffalo Paneer.</p>
                          
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="img/buffet.png" alt="Uthappizza">
                        <div class="carousel-caption">
                        <h2>Weekend Grand Buffet <span class="label label-danger label-xs">New</span></h2>
                        <p>A unique combination of Indian Uthappam (pancake) and
                          Italian pizza, topped with Cerignola olives, ripe vine
                          cherry tomatoes, Vidalia onion, Guntur chillies and
                          Buffalo Paneer.</p>
                         
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="img/uthappizza.png" alt="Uthappizza">
                        <div class="carousel-caption">
                         <p>A unique combination of Indian Uthappam (pancake) and
                          Italian pizza, topped with Cerignola olives, ripe vine
                          cherry tomatoes, Vidalia onion, Guntur chillies and
                          Buffalo Paneer.</p>
                        </div>
                    </div>
                </div>

              </div>

            </div>
               </div>


    
        <div class="row row-content">
            <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
                <h3 align=center>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col-xs-12 col-sm-9">
            <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/uthappizza.png" alt="Uthappizza">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading"> <span class="label label-danger">Hot</span><span class="badge">$4.99</span>Uthappizza</h2>
                        <p>A unique combination of Indian Uthappam (pancake) and
                          Italian pizza, topped with Cerignola olives, ripe vine
                          cherry tomatoes, Vidalia onion, Guntur chillies and
                          Buffalo Paneer.</p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
            </div>
              
            </div>
        </div>


        <div class="row row-content">
            <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
                <h3 align=center>This Month's Promotions</h3>
            </div>
            <div class="col-xs-12 col-sm-9">
             <div class="media">
               <div class="media-left  media-middle">
               <a href="#">
               <img class="media-object img-thumbnail" src="img/alberto.png" alt="Buffet-image">
               </a>
               </div>
             
                <div class="media-body">
                <h2 class="media-heading">Weekend Grand Buffet</h2>
                <p >Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                <p><a href="#">More &raquo;</a></p>
                </div>
            </div>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
                <h3 align=center>Meet our Culinary Specialists</h3>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/alberto.png" alt="Alberto Somayya">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Alberto Somayya</h2>
                        <h4>Executive Chef</h4>
                        <p>Award winning three-star Michelin chef with wide
                         International experience having worked closely with
                         whos-who in the culinary world, he specializes in
                          creating mouthwatering Indo-Italian fusion experiences.
                         </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="reservation-form">
  
        <div class="conatiner">

            <div class="row">
 
            <div class="col-md-4 col-sm-4">
 
              <h3 align=center> Reserve your table</h3>
             
            </div>

            <div class="col-md-8 col-md-8"> 
  
            <div class="btn-group" id="radio-grp" role="group" aria-label="...">
          
            <p style="padding:10px;"></p>

             <input type="radio">1</input>

             <input type="radio">2</input>

             <input type="radio">3</input>

             <input type="radio">4</input>

            </div>

            <p style="padding:5px;"></p> 

            <div class="input-group">
             
             <span>time <span>

             <input type="text" placeholder="time">  
  
            </div>
              
             <p style="padding:5px;"></p>  
              
             <div>
 
             <input type="button" value="Reserve">
             </div>


            </div>
  

        </div>
  
    </div>

    <!--

    <footer class="row-footer">
        <div class="container">
            <div class="row">             
                <div class="col-md-4 col-sm-4">
                    <h5>Links</h5>
                     <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		             <i class="fa fa-phone"></i> Tel.: +852 1234 5678<br>
		             <i class="fa fa-fax"></i> Fax: +852 8765 4321<br>
		              <i class="fa fa-envelope"></i>Email: <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div style="padding-left: 40px;">
                       <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i>google+</a>
                        <a href="http://www.facebook.com/profile.php?id=">Facebook</a>
                        <a href="http://www.linkedin.com/in/">LinkedIn</a>
                        <a href="http://twitter.com/">Twitter</a>
                        <a href="http://youtube.com/">YouTube</a>
                        <a href="mailto:">Mail</a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                 </div>
                  <div>
                    <p style="padding:10px;"></p>
                    <p align=center>© Copyright 2015 Ristorante Con Fusion</p>
                   </div>
            
        </div>
    </footer>

</body>

<script>

        $(document).ready(function(){
          console.log("Document is ready");
            $("#mycarousel").carousel( { interval: 2000 } );
            $("#carousel-pause").click(function(){
                //console.log("pause button clicked");
                $("#mycarousel").carousel('pause');
            });
            $("#carousel-play").click(function(){
                 console.log("play button clicked");         
                $("#mycarousel").carousel('cycle');
            });
        });
</script>

</html>
-->
<?php require('C:\xampp\htdocs\Bootstrap\views\footer.php'); ?>