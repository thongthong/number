<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<?php 
$egg = 0;
$egg =$_POST["egg"];
$kung =0;
$kung = $_POST["kung"];
$pla = 0;
$pla = $_POST["pla"];

$price = $egg+$kung+$pla+35; ?>

 Result =  <?php echo $_POST["age"]; ?> <br>
 Noodle =   <?php echo $_POST["CheckboxGroup1"]; ?> <br>

Price =  <?php echo $price; ?>
</body>
</html>