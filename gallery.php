<?php require('C:\xampp\htdocs\Bootstrap\includes\db_conf.php');  ?>
<?php require('C:\xampp\htdocs\Bootstrap\views\header.php');  ?>

<!--

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags 

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

<?php $sql = "SELECT * FROM pizza_items";
      echo $sql;
      $result = $conn->query($sql);
      
      if($result->num_rows>0)
      {
      	echo "Data retrived successfully";
      	print_r($result);
        echo "<div class='adithya'>";
      	while($row = $result->fetch_assoc()) {
        $string="<div class='pizzaimg'>"."<img "."id='".$row["Id"]."' src='img/".$row["Url"].".png'"."style='width:100%;height:70%' \>";
        echo $string;
        echo '<a type="button" style="padding-left:35px">Add to cart </a>';
        echo "</div>";
     }
     echo "</div>";
       }
      else
      {
      	echo "Data is absent";
      }

?>


<!-->

 <div class="adithya">
   
    <div class="pizzaimg">
     <img src="img/pizza-1.png" style='width:100%;height:70%' \>

     <a type="button" style='padding-left:35px'>Add to cart </a>

    </div> 

    <div class="pizzaimg">

    <img src="img/pizza-2.png" style='width:100%; height:70%' \>

    </div> 
     

     <div class="pizzaimg">

     <img src="img/pizza-3.png" style='width:100%; height:70%' \>

    </div> 
     

    <div class="pizzaimg">

    <img src="img/pizza-4.png" style='width:100%; height:70%' \>

    </div> 
     
     <div class="pizzaimg">

     <img src="img/pizza-5.png" style='width:100%; height:70%' \>

     </div>
  
</div>

-->

<?php require('C:\xampp\htdocs\Bootstrap\views\footer.php');  ?>

<script>
$(document).ready(function(){
  $( "a" ).click(function() {
  console.log( "Add to cart button clicked" );
  var data={};
  data.id=($(this).prev().attr('id'));
  $.ajax({
  type: "POST",
  url: 'cart.php',
  data: data,
  success:function(data)
  {
            console.log(data);
  }
  });
          });
                 });
</script>