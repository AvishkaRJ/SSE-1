
<BODY>
<h2>
    <link rel="stylesheet" type="text/css" href="theme_result.css">

<?php

require_once 'token.php';


$val = $_POST["token"];


if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['sse1'])){
		echo "Hey ".$_POST['updatepost'];
	}
	else{
	echo "Error".$_COOKIE['sse1'];
	}
}
?>

</h2>

</BODY>
