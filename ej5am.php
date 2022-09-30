<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
/*matriz de 5x3 */
    $fila = 5;
    $columna = 3;
    $coordenadaSuma=0;
    $sumasFilas=[];
    $sumasColumnas=[];
//calculando e imprimiendo por filas----------------------------------------------
    for ($i = 0; $i < $fila ; $i++) {
        $matrizSuma = [];
        for ($j = 0; $j < $columna ; $j++) {
            $coordenadaSuma=$i+$j;
            $matrizSuma[]=$coordenadaSuma;
            printf("(" . $i . "," . $j . ") ");
        }
        $sumasFilas[]=$matrizSuma;  
    }
    printf("<br>");
    printf("<br>");
    //------------------resultado de suma por filas 
    print_r($sumasFilas);
    printf("<br>");
    //-----------------imprimir por columnas y calculando------------------
    for($j=0;$j<$columna;$j++){
        $matrizSuma = [];
        for($i=0;$i< $fila;$i++){
            $coordenadaSuma=$j+$i;
            $matrizSuma[]=$coordenadaSuma;
            printf("(" . $j . "," . $i . ") ");

        }
        $sumasColumnas[]=$matrizSuma;
    }
    printf("<br>");
    printf("<br>");
    print_r($sumasColumnas);

    //falta imprimir bonito

    ?>
</BODY>

</HTML>
