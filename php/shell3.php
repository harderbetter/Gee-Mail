<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
	<style>
.myButton {
	-moz-box-shadow:inset 0px -3px 7px 0px #29bbff;
	-webkit-box-shadow:inset 0px -3px 7px 0px #29bbff;
	box-shadow:inset 0px -3px 7px 0px #29bbff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #2dabf9), color-stop(1, #0688fa));
	background:-moz-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:-webkit-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:-o-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:-ms-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:linear-gradient(to bottom, #2dabf9 5%, #0688fa 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#2dabf9', endColorstr='#0688fa',GradientType=0);
	background-color:#2dabf9;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #0b0e07;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	padding:9px 23px;
	text-decoration:none;
	text-shadow:0px 1px 0px #263666;
}
</style>


<?php
// Echo session variables that were set on previous page
$mid=$_POST["mid"];
$sender =$_POST["sender"];
$name=$_SESSION["varname"];
$passphrase=$_POST["passphrase"];
$show = exec("./read_message $mid '$passphrase'");

$show2 = exec("./read_PK2 $mid");


echo $show;
echo "<br>";




?>

<br><br>
<input type="text"  name="aaa" class="myButton" id="myButton"  onclick="myFunction()" value="return">


<script>
	function myFunction(){window.location.assign("https://geemail-cloned-parkhe.c9users.io/shell2.php");}
	
	
	
</script>




</body>
</html>