<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
//-----------------------primer forma de manera manual --------------------------------
$ip="192.18.16.204";
$ip1=substr($ip,0,4);
$ip2=substr($ip,4,3);
$ip3=substr($ip,7,3);
$ip4=substr($ip,10,3);

echo "Numero $ip1 binario en decimal = ".decbin($ip1)."<br/><br/><br/>";
echo "Numero $ip2 binario en decimal = ".decbin($ip2)."<br/><br/><br/>";
echo "Numero $ip3 binario en decimal = ".decbin($ip3)."<br/><br/><br/>";
echo "Numero $ip4 binario en decimal = ".decbin($ip4)."<br/><br/><br/>";

echo $ipPrimer =strpos($ip1,".")."<br/><br/><br/>";
echo $ipSegun = strpos($ip2,".")."<br/><br/><br/>";
echo $ipTercer = strpos($ip3,".")."<br/><br/><br/>";
echo $ipCuarto = strpos($ip4,".")."<br/><br/><br/>";//aqui no hay punto
echo str_pad(decbin($ipPrimer),8,"0",STR_PAD_LEFT)."metodo pad "."<br/><br/><br/>";
echo str_pad(decbin($ipSegun),8,"0",STR_PAD_LEFT)."metodo pad "."<br/><br/><br/>";
echo str_pad(decbin($ipTercer),8,"0",STR_PAD_LEFT)."metodo pad "."<br/><br/><br/>";
echo str_pad(decbin($ipCuarto),8,"0",STR_PAD_LEFT)."metodo pad "."<br/><br/><br/>";

//-----------------Segunda forma usando funcion stropos --------------------------------------

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


?>
</BODY>
</HTML>