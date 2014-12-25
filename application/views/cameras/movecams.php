<?PHP
$camip = $_GET['camera'] - 1;


if($_GET['position']=='1'){
	$command = '31';
}
else if($_GET['position']=='2'){
	$command = '33';
}
else if($_GET['position']=='3'){
	$command = '35';
}
else if($_GET['position']=='4'){
	$command = '37';
}
else if($_GET['position']=='5'){
	$command = '39';
}


$action = file_get_contents('http://admin:@192.168.1.20'.$camip.'/decoder_control.cgi?command='.$command);
echo $action;
?>