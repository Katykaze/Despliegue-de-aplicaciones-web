<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
//-------------------- primera forma dividiendo manualmente, solo valdría para este tipo de dirección----------------
$ip="192.18.16.204";
//$ip="128.50.39.144";
//$ip="5.147.220.252";
$ip1=substr($ip,0,4);
$ip2=substr($ip,4,3);
$ip3=substr($ip,7,3);
$ip4=substr($ip,10,3);

//printf("Numero se representa en binario %b ",$ip1)."<br/><br/><br/>";
//printf("Numero se representa en binario %b ",$ip2)."<br/><br/><br/>";
//printf("Numero se representa en binario %b ",$ip3)."<br/><br/><br/>";
//printf("Numero se representa en binario %b ",$ip4)."<br/><br/><br/>";
"<br/><br/><br/>";
printf("Numero $ip se representa en binario como %08b.%08b.%08b.%08b <br/>",$ip1 ,$ip2,$ip3,$ip4);
//-------------------Segunda manera -------------------------


$primero = substr($ip,0,strpos($ip,"."));
echo $primero."<br/><br/><br/>";
echo "Numero $primero octal en binario es  = ".decbin($primero)."<br/><br/><br/>";
//actUalizamos ip quedándonos con el resto de ip
$ip = substr($ip,strpos($ip,".")+1);
echo"la ip actualizada  es $ip <br/>";

$segundo = substr($ip,0,strpos($ip,"."));
echo "Numero".$segundo."<br/><br/><br/>";
echo "Numero $segundo octal en binario es = ".decbin($segundo)."<br/><br/><br/>";
//actualizamos ip para el siguiente octal
$ip = substr($ip,strpos($ip,".")+1);
echo "la nueva $ip <br/>";
$tercero = substr($ip,0,strpos($ip,"."));
echo $tercero."<br/><br/><br/>";
echo "Numero $tercero binario en decimal = ".decbin($tercero)."<br/><br/><br/>";

$ip = substr($ip,strpos($ip,".")+1);
echo $ip."<br/><br/><br/>";
//no es necesario "." porque es el ultimo
$cuarta = substr($ip,0);
echo $cuarta."<br/><br/><br/>";
echo "Numero $cuarta binario en decimal = ".decbin($cuarta)."<br/><br/><br/>";
printf("Numero  se representa en binario como %08b.%08b.%08b.%08b <br/>",$primero ,$segundo,$tercero,$cuarta);

?>
</BODY>
</HTML>
