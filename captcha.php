<?php 
$recaptcha = $_POST['g-recaptcha'];

if($recaptcha !=''){
	$secret = "6Lfy0GoUAAAAAL4KtWVf8IZV6w87TCacXWnhb-sU";
	$ip = $_SERVER['REMOTE_ADDR'];
	$var = file_get_contents(" https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
	$array = json_decode($var,true);
	if($array['success']){
		echo "soy humano ";
	}else{
		echo "soy robot";
	}
}else{
	echo "rellene todos los campos"
}
?>