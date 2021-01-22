<?php
include "session.php";

$btn = $_GET['btn'];

if(!strcmp($btn, 'A')){
	$_SESSION['total'] += 100;

}
elseif(!strcmp($btn, 'B')){
	if($_SESSION['qna'] %2 == 0){
		$_SESSION['total'] += 94;
	}
	else{
		$_SESSION['total'] += 91;
	}
}
elseif(!strcmp($btn, 'C')){
	if($_SESSION['qna'] %2 == 0){
		$_SESSION['total'] += 77;
	}
	else{
		$_SESSION['total'] += 73;
	}
	
}
elseif(!strcmp($btn, 'D')){
	if($_SESSION['qna'] %2 == 0){
		$_SESSION['total'] += 61;
	}
	else{
		$_SESSION['total'] += 56;
	}
	
}
elseif(!strcmp($btn, 'E')){
	if($_SESSION['qna'] %2 == 0){
		$_SESSION['total'] += 44;
	}
	else{
		$_SESSION['total'] += 39;
	}
	
}
elseif(!strcmp($btn, 'F')){
	if($_SESSION['qna'] %2 == 0){
		$_SESSION['total'] += 28;
	}
	else{
		$_SESSION['total'] += 21;
	}
}
elseif(!strcmp($btn, 'G')){
	if($_SESSION['qna'] %2 == 0){
		$_SESSION['total'] += 16;
	}
	else{
		$_SESSION['total'] += 13;
	}
	
}
elseif(!strcmp($btn, 'H')){
	if($_SESSION['qna'] %2 == 0){
		$_SESSION['total'] += 9;
	}
	else{
		$_SESSION['total'] += 4;
	}
	
}

$_SESSION['qna'] += 1;

if($_SESSION['qna'] == 10){
	echo "<script>location.replace('result.html');</script>";
}

?>