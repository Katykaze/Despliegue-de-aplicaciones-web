<HTML>

<HEAD>
  <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
  <?php
  $num = "168";
  $dividendo = $num;
  $resultadoRestos="";

  while ($dividendo > 0) {
    $cociente = $dividendo / 2;
    $resultadoRestos .= $dividendo % 2;
    //almacenamos  el resto de cada division para el resultado binario
    //intval es necesario ya que el numero es un string
    $dividendo = intval($cociente);
  }
  echo (strrev($resultadoRestos));


  ?>
</BODY>

</HTML>
