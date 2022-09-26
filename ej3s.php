<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
$ip="192.168.16.100/16";
 $copiaIP=$ip;
$bitsTotales= 32;
//longitud de la ip para recortar la máscara de red
$longitud = strlen($ip);
//echo $longitud."<br/><br/><br/>";
//encontrar la mascara de red usando strpos e indicándole la /, porque hay máscaras de una sola cifra
$barraMascara = strpos($ip,"/");
//echo $barraMascara;
$nuevaIP = substr($ip,0,$barraMascara);
//echo "la nueva ip es sin mascara es ".$nuevaIP."<br/><br/><br/>";
$mascaraRed=substr($ip,$barraMascara+1);
$bitsIp=$bitsTotales-$mascaraRed;
//echo "los bits para hosts son $bitsIp <br/><br/>";
//vamos a trozear la ip segun los puntos y lo vamos a pasar a binario
$punto= strpos($nuevaIP,".");
$primero= substr($nuevaIP,0,$punto);
//echo "Numero $primero binario en decimal = ".decbin($primero)."<br/><br/><br/>";
$nuevaIP=substr($nuevaIP,$punto);
//echo " la nueva ip es ".$nuevaIP."<br/><br/><br/>";
//la direccion ip en binario troceado
$primero = substr($ip,0,strpos($ip,"."));
//echo "Numero $primero octal en binario es  = ".decbin($primero)."<br/><br/><br/>";
//actUalizamos ip quedándonos con el resto de ip
$ip = substr($ip,strpos($ip,".")+1);
$segundo = substr($ip,0,strpos($ip,"."));
//echo "Numero $segundo octal en binario es = ".decbin($segundo)."<br/><br/><br/>";
//actualizamos ip para el siguiente octal
$ip = substr($ip,strpos($ip,".")+1);
$tercero = substr($ip,0,strpos($ip,"."));
//echo "Numero $tercero binario en decimal = ".decbin($tercero)."<br/><br/><br/>";
$ip = substr($ip,strpos($ip,".")+1);
$cuarta = substr($ip,0);
//echo "Numero $cuarta binario en decimal = ".decbin($cuarta)."<br/><br/><br/>";
//---------------------------ip en binario----------------------------
//printf("Numero de ip  se representa en binario como %08b.%08b.%08b.%08b <br/>",$primero ,$segundo,$tercero,$cuarta);
//-----------------------------ip sin puntos para conseguir la direccion de red,broadcast etc------------------
$ipSinPuntos = decbin($primero).decbin($segundo).decbin($tercero).decbin($cuarta);
//echo " el numero ip a recortar es $ipSinPuntos <br/><br/>";
//recortamos de esta ip binaria la mascara de subred
$longitudIPSinPuntos= strlen($ipSinPuntos);
$recorteMascara= substr($ipSinPuntos,0,$mascaraRed);
//echo "la ip recortada es la siguiente: $recorteMascara <br/><br/>";
//calculamos ahora la direccion de red en binario
//como hay que completar 32 bits , usamos esta función poniendo 32, para que rellene el resto
$direcRedBinario = str_pad($recorteMascara,32,"0",STR_PAD_RIGHT);
//echo " la direccion de red en binario es : $direcRedBinario <br/><br/>";
//direccion de broadcast completando 32 bits, escribiendo unos 
$direcBroadcast = str_pad($recorteMascara,32,"1",STR_PAD_RIGHT);
//echo " la direccion de broadcast en binario es : $direcBroadcast <br/><br/>";
//pasamos ambas direcciones en binario, a octales y luego a decimales 
$primerOctal = bindec(substr($direcRedBinario,0,8));
//echo "$primerOctal<br/><br/>";
$segundoOctal = bindec(substr($direcRedBinario,8,8));
//echo "$segundoOctal<br/><br/>";
$tercerOctal = bindec(substr($direcRedBinario,16,8));
//echo "$segundoOctal<br/><br/>";
$cuartoOcatl = bindec(substr($direcRedBinario,24,8));
//echo "$segundoOctal<br/><br/>";
$direccionRedDecimal = "La direccion de red en decimal es $primerOctal.$segundoOctal.$tercerOctal.$cuartoOcatl";
//echo "$direccionRedDecimal<br/><br/>";
//pasamos la direccion de broadcast a octales y luego a binario
$primerOctalB = bindec(substr($direcBroadcast,0,8));
//echo "$primerOctalB<br/><br/>";
$segundoOctalB = bindec(substr($direcBroadcast,8,8));
//echo "$segundoOctalB<br/><br/>";
$tercerOctalB = bindec(substr($direcBroadcast,16,8));
//echo "$segundoOctalB<br/><br/>";
$cuartoOcatlB = bindec(substr($direcBroadcast,24,8));
//echo "$segundoOctalB<br/><br/>";
$direccionRedBroad = "La direccion de broadcast en decimal es $primerOctalB.$segundoOctalB.$tercerOctalB.$cuartoOcatlB";
//echo "$direccionRedBroad<br/><br/>";

//resumen
echo "la ip inicial es  $copiaIP <br/><br/>";
echo "La mascara de red es $mascaraRed <br/><br/>";
echo "$direccionRedDecimal<br/><br/>";
echo "$direccionRedBroad<br/><br/>";







?>
</BODY>
</HTML>
