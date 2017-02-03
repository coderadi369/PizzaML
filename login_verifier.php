<?php session_start(); ?>
<?php $_SESSION["name"]="adihtya"; ?>
<?php if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))
{
	echo "xml http request occured";
		
}
else
{
	
     echo '<script type="text/javascript">window.location.href="index.php";</script>';	
}
?>

