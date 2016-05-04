<!DOCTYPE html>

<?php

$message="";
if(isset($_POST["user_name"])&isset($_POST["password"])) {
	
$query= "SELECT * FROM users WHERE user_name='".$_POST["user_name"]."'"." and password='".$_POST["password"]."'";
//var_dump($query);

$rows=execute_select_query($query);

if(is_array($rows)) {
$_SESSION['user_name'] = $rows['user_name'];
$_SESSION['password'] = $rows['password'];
} else {
$message = "<h3>Невалидно потребителско име или парола</h3>";
}
}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>цветарски магазин</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
	<style type="text/css">
@font-face {
	font-family: 'Conv_Lobster-Regular';
	src: url('fonts/Lobster-Regular.eot');
}
	body
	{
		font-family:'Conv_Lobster-Regular';
		
	}

</style>
	</head>
<body>

  <form name="frmUser" method="post" action="">
	  <div class="navbar">
	  <div id="navbar-left">
		<img src="for_base/pics/logo.png" id="logo"/>
          <div id="navbar-left"><h1 id="shop_title">GARDEN FLOWERS SHOP</h1>
			</div> </div>

<?php if(!isset($_SESSION["user_name"])){ ?>		
		<div id="navbar-right">          
			<input type="text" placeholder="потребителско име" id="form-control" name="user_name">	
			<input type="password" placeholder="парола" id="form-control" name="password">
			<input type="submit" name="submit" value="ВЛЕЗ" id="login-button">
          </div>
		   <div id="navbar-right"><?php if($message!="") { echo $message; } ?></div>
<br style="clear:both"/>
<?php 
}else { ?>
<div id="navbar-right"> 
<?php
if($_SESSION["user_name"]) {
?>
 <h2>В сайта си като <?php echo $_SESSION['user_name']; ?>. Кликни тук за  <a href="logout.php" title="Logout">Изход. </h2></a>
<?php
}
?>
</div>
<br style="clear:both">

<?php	
}
?>	
</form>

