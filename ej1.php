<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
//-------------------- primera forma dividiendo manualmente, solo valdría para este tipo de dirección----------------
$ip="192.18.16.204";
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

$ipP = strpos($ip,".");
echo $ipP."<br/><br/><br/>";
$primero = substr($ip,0,$ipP);
echo $primero."<br/><br/><br/>";
echo "Numero $primero binario en decimal = ".decbin($primero)."<br/><br/><br/>";

$nuevaIP=substr($ip,$ipP+1);
echo $nuevaIP."<br/><br/><br/>";
$segundo = substr($nuevaIP,0,$ipP-1);
echo $segundo."<br/><br/><br/>";
echo "Numero $segundo binario en decimal = ".decbin($segundo)."<br/><br/><br/>";

$nueva2IP = substr($nuevaIP,$ipP);
echo $nueva2IP."<br/><br/><br/>";
$tercero = substr($nueva2IP,0,$ipP-1);
echo $tercero."<br/><br/><br/>";
echo "Numero $tercero binario en decimal = ".decbin($tercero)."<br/><br/><br/>";

$nueva3IP = substr($nueva2IP,$ipP);
echo $nueva3IP."<br/><br/><br/>";
$cuarta = substr($nueva3IP,0,$ipP);
echo $cuarta."<br/><br/><br/>";
echo "Numero $cuarta binario en decimal = ".decbin($cuarta)."<br/><br/><br/>";
printf("Numero $ip se representa en binario como %08b.%08b.%08b.%08b <br/>",$primero ,$segundo,$tercero,$cuarta);

?>
</BODY>
</HTML>