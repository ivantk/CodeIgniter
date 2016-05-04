
<?php
session_start();
include "db.php";
include "header.php";

?>
<div class="all">
<?php
require_once("leftmenu.php");
?>

<div id='main'>
<?php 
$tok = "";
if(isset($_GET["pid"])){
$tok = $_GET["pid"];
include($tok);}
else { ?>
	<h2>това е началната страница</h2>
	<div id="product">
	<p>НАЙ-НОВИЯ НИ ПРОДУКТ</p>
<?php
$query3="SELECT * FROM `products` ORDER BY `products`.`date` DESC LIMIT 1";
$rows3=show_query($query3);

echo $rows3['name'] . $rows3['latin_name']. $rows3['description'];



?>
	</div>
	<div id="news">
	<p>голямa nowina - голяма работа</p>
	</div>	
<br style="clear:both"/><br style="clear:both"/>
<?php	
}
	
?>
</div>

<div id='right_menu'>
<p>твоята количка с поръчки съдържа 'N' поръчки<p>
</div>
</div>
<br style="clear:both"/>


<?php

require_once("footer.php");
?>
