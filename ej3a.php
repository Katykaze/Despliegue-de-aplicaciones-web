<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
//----------------------------calculos-------------------
    $valor = 0;
    $numerosBinarios =[];
    $indice=0;
    $primerosVeinte=0;
    do {
        $numerosBinarios[]=decbin($valor);
        $indice++;
        $valor++; 
       $primerosVeinte++; 
    }while ($primerosVeinte < 20);
    $longitudBinarios=count($numerosBinarios);
    echo $longitudBinarios;
    //----------------------Printeamos la tabla
    echo  "<table border=1><br>";
    echo "<h3>Numeros Impares</h3>";
    echo "Indice";
    echo "Binario";
    echo "Octal";
    
    for ($x = 0; $x < $longitudBinarios; $x++) {
       echo"<tr>";
       echo "<td>&nbsp;" . $x . "&nbsp;</td>";
       echo "<td>&nbsp;" . $numerosBinarios[$x] . "&nbsp;</td>";
       echo "<td>&nbsp" .decoct($x). "&nbsp;</td>";
       echo"</tr>";
    }
    echo "</table>";
    //---------------------fin del printeo de la tabla

   


    ?>
</BODY>

</HTML>
