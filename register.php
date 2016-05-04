
<?php
//header('Location: index.php');
$message2="";


if(isset($_POST['reg_user_name'])){
		$query= "SELECT * FROM users WHERE user_name='".$_POST['reg_user_name']."'";
		$rows=execute_select_query($query);
		if(count($rows)==0){
		$query2="INSERT INTO `cm2`.`users` (`id`, `user_name`, `password`, `mail`, `address`, `phone`, `ime`, `familiq`, `role`) VALUES (NULL, '".$_POST['reg_user_name']."', '".$_POST['reg_password']."', '".$_POST['e_mail']."', '".$_POST['address']."', '".$_POST['phone']."', '".$_POST['ime']."', '".$_POST['familiq']."', 'user')";
		$rows2=import_query($query2);
		}
		else {
			$message2="ПОТРЕБИТЕЛСКОТО ИМЕ ВЕЧЕ Е ЗАЕТО";
		}
}

/*$reg_user_name = isset($_POST['reg_user_name']) ? $_POST['reg_user_name'] : '';
$ime = isset($_POST['ime']) ? $_POST['ime'] : '';
$familiq = isset($_POST['familiq']) ? $_POST['familiq'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$e_mail = isset($_POST['ime']) ? $_POST['ime'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';


$fval = array($reg_user_name, $ime, $familiq, $phone, $e_mail, $address );

if(isset($_POST['frmUser2'])) {
$fval = array_replace($fval, $_POST);}
*/
?>

		<script>
function validateForm() {
	
var x1 = document.forms["frmUser2"]["reg_user_name"].value;
		if (x1 == null || x1 == "") {
		alert("не е попълнено потребителско име");
		return false;   
		}
		
var x2 = document.forms["frmUser2"]["reg_password"].value;
		if (x2 == null || x2 == "") {
		alert("не е попълнена парола");
        return false;   
		}

var x3 = document.forms["frmUser2"]["reg_password2"].value;
		if (x3 == null || x3 == "") {
		alert("не е повторена паролата");
        return false;   
		}
	
var x4 = document.forms["frmUser2"]["ime"].value;
		if (x4 == null || x4 == "") {
		alert("не е попълнено твоето име");
        return false;   
		}
	
var x5 = document.forms["frmUser2"]["familiq"].value;
		if (x5 == null || x5 == "") {
		alert("не е попълнена фамилия");
		return false;   
		}

var x6 = document.forms["frmUser2"]["phone"].value;
		if (x6 == null || x6 == "") {
		alert("не е попълнен телефонен номер");
        return false;   
		}
	
var x7 = document.forms["frmUser2"]["e_mail"].value;
		if (x7== null || x7 == "") {
		alert("не е попълнен е-mail");
        return false;   
		}

var x8 = document.forms["frmUser2"]["address"].value;
		if (x8== null || x8== "") {
		alert("не е попълнен адрес");
        return false;
		}
		
	
		if (x2 != x3){
		alert("въведените пароли не съвпадат");
		return false; 
		}
}
</script>
<?php 
if (isset($_POST['reg_user_name'])) {?>
	<h2 align="center">Вие завършихте вашата регистрация успешно!</br>
Сега може да влезете в страницата с вашието потребителско име  и парола</h2>
<p align="center">вашето потребилско име е: <?php echo $_POST['reg_user_name'];?> </p></br>
<p align="center">вашата парола е: <?php echo $_POST['reg_password'];?> </p></br>
<p align="center">пожелаваме ви приятно пазаруване от нашия е-магазин</p>
<div id="product">
	<p>голям продукт - голяма работа</p>
	</div>
	<div id="news">
	<p>голямa nowina - голяма работа</p>
	</div>
	
<?php } else {?>
<h2 align="center">форма за регистрация</h2>
<p align="center">всички полета са задължителни</p>
<form name="frmUser2" onsubmit="return validateForm()" onsubmit="return clickedButton()" method="post">
<div>    
	<?php
	echo "<h2 style='color:red;'>" . $message2 . "</h2>";
	
	?>
		<p align="center">въведи потребителско име: </p>
			<input type="text" id="form-control2" name="reg_user_name" action="">
		<p align="center">въведи парола:</p>
			<input type="password" id="form-control2" name="reg_password" >
		<p align="center">повтори паролата:</p>
			<input type="password" id="form-control2" name="reg_password2" >
		<p align="center">твоето име:</p>
			<input type="text" id="form-control2" name="ime" value="<?php $ime=''; if(isset($_POST['ime'])){$ime=$_POST['ime']; echo $ime;}?>">	
		<p align="center">твоята фамилия:</p>
			<input type="text" id="form-control2" name="familiq"  value="<?php $familiq=''; if(isset($_POST['familiq'])){$familiq=$_POST['familiq']; echo $familiq;}?>">
		<p align="center">телефон:</p>
			<input type="text" id="form-control2" name="phone" value="<?php $phone=''; if(isset($_POST['phone'])){$phone=$_POST['phone']; echo $phone;}?>">
		<p align="center">e-mail:</p>
			<input type="text" id="form-control2" name="e_mail" value="<?php $e_mail=''; if(isset($_POST['e_mail'])){$e_mail=$_POST['e_mail']; echo $e_mail;}?>">
		<p align="center">адрес за поръчки:</p>
			<textarea type="text" name="address" id="textarea">  <?php $address=''; if(isset($_POST['address'])){$address=$_POST['address']; echo $address;}?></textarea></br>
			<input type="submit" name="register_button" value="РЕГИСТРАЦИЯ" id="register_button">


	</div>
</form>
<?php
}
/* "UPDATE `cm`.`users` SET `user_name` = 'Admin', `password` = 'admin1', `mail` = 'admin@admin.admin', `address` = 'adminovo', `phone` = 'i am faking admin', `ime` = 'admin', `familiq` = 'adminov' WHERE `role` = 'user';";
*/



?>