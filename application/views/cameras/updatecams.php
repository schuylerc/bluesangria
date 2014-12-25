<?PHP
$cam1 = file_get_contents('http://admin:@192.168.1.200/decoder_control.cgi?command='.$_GET['command']);
$cam2 = file_get_contents('http://admin:@192.168.1.201/decoder_control.cgi?command='.$_GET['command']);
//$cam3 = file_get_contents('http://admin:@192.168.1.202/decoder_control.cgi?command='.$_GET['command']);
$cam4 = file_get_contents('http://admin:@192.168.1.203/decoder_control.cgi?command='.$_GET['command']);
echo $cam1;
echo $cam2;
//echo $cam3;
echo $cam4;
?>