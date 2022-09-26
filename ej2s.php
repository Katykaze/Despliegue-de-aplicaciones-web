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
// echo str_pad(decbin($ipPrimer),8,"0",STR_PAD_LEFT)."metodo pad "."<br/><br/><br/>";
// echo str_pad(decbin($ipSegun),8,"0",STR_PAD_LEFT)."metodo pad "."<br/><br/><br/>";
// echo str_pad(decbin($ipTercer),8,"0",STR_PAD_LEFT)."metodo pad "."<br/><br/><br/>";
// echo str_pad(decbin($ipCuarto),8,"0",STR_PAD_LEFT)."metodo pad "."<br/><br/><br/>";
echo "Numero binario de ".$ip." es ".str_pad(decbin($ipPrimer),8,"0",STR_PAD_LEFT).".".str_pad(decbin($ipSegun),8,"0",STR_PAD_LEFT).".".str_pad(decbin($ipTercer),8,"0",STR_PAD_LEFT).".".str_pad(decbin($ipCuarto),8,"0",STR_PAD_LEFT);

//-----------------Segunda forma usando funcion stropos --------------------------------------

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
//printf("Numero  se representa en binario como %08b.%08b.%08b.%08b <br/>",$primero ,$segundo,$tercero,$cuarta);
echo "Numero binario de  es ".str_pad(decbin($primero),8,"0",STR_PAD_LEFT).".".str_pad(decbin($segundo),8,"0",STR_PAD_LEFT).".".str_pad(decbin($tercero),8,"0",STR_PAD_LEFT).".".str_pad(decbin($cuarta),8,"0",STR_PAD_LEFT);


?>
</BODY>
</HTML>
