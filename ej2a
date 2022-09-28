<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
//----------------------------calculos
    $valor = 1;
    $numerosImpares = [];
    $numerosPares =[];
    $contadorImpares = 0;
    $suma = 0;
    $mediaImpares=0;
    $mediaPares=0;
    do {
        //echo "<tr>";
        if ($valor % 2 != 0){
            $numerosImpares[] = $valor;
            $contadorImpares++;
            $suma=$valor+$suma;
        }else{
            $numerosPares[]=$valor;
        }
        $valor++;
    }while ($contadorImpares < 20);
    $longitudImpares=count($numerosImpares);
    //----------------------Printeamos la tabla
    echo  "<table border=1><br>";
    echo "<h3>Numeros Impares</h3>";
    echo "Indice";
    echo "Valor";
    echo "Suma";
    
    for ($x = 0; $x < $longitudImpares; $x++) {
       echo"<tr>";
       echo "<td>&nbsp;" . $x . "&nbsp;</td>";
       echo "<td>&nbsp;" . $numerosImpares[$x] . "&nbsp;</td>";
       echo "<td>&nbsp" .($numerosImpares[$x]+$x). "&nbsp;</td>";
       echo"</tr>";
    }
    echo "</table>";
    //---------------------fin del printeo de la tabla
    //-----------------------------calcular media ImPar --------------------------
    for ($x = 0; $x < $longitudImpares; $x++) {
        $mediaImpares+= $numerosImpares[$x];
     }
     echo $mediaImpares;
     echo "La media de los valores impares es " . ($mediaImpares/$longitudImpares) . "</br>";
     //var_dump($numerosImpares);
     //-------------------------------calcular media par-----------------
     $longitudPares=count($numerosPares);
    //var_dump($numerosPares);
    for ($x = 0; $x < $longitudPares; $x++) {
         $mediaPares += $numerosPares[$x];
     }
     echo $mediaPares;
     echo "La media de los valores pares es " . ($mediaPares/$longitudPares) . "</br>";


    ?>
</BODY>

</HTML>
