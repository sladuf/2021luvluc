<?php

include "session.php";

$check = 0;

if(isset($_POST['check'])){
	$check = count($_POST['check']);

	if($check > 3){
		echo "<script>location.replace('unpass.html');</script>";
	}
	else{
		$_SESSION['qna'] = 1;
		if(strcmp($sex, "female") == 0){
			echo "<script>location.replace('female.html');</script>";
		}
		else{
			echo "<script>location.replace('male.html');</script>";
		}
	}
}
else{
	echo "<script language = javascript> alert(\"하나는 보자...\");
           location.replace('check.html');</script>";
}

  ?>
