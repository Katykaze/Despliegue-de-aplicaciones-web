<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php

    $fila = 3;
    $columna = 5;
    $contadorNumero=0;
    $matriz=[];
    $bidimensional=[];
    //$matriz2[][]=array();
//imprimimos por fila----------------------------------------------
    for ($i = 0; $i < $fila ; $i++) {
        //$matriz = [];
        $matriz2[][]=array();
        for ($j = 0; $j < $columna ; $j++) {
            $contadorNumero+=2;
            $matriz[]=$contadorNumero;
            $matriz2[][]=($i.$j);
            printf("(" . $i . "," . $j . ") ");
        }
        $bidimensional[]=$matriz;  
    }
    printf("<br>");
    printf("<br>");
    //-----------------imprimir por columnas------------------
    for($j=0;$j<count($matriz2);$j++){
        for($i=0;$i< count($matriz2[$i]);$i++){
            printf("(" . $i . "," . $j . ") ");

        }

    }
    printf("<br>");
    //en este array bidimensional almacena por cada array la cantidad de numeros , por filas 
    print_r($bidimensional);
    printf("<br>");
    printf("<br>");
    print_r($matriz2);
    




    ?>
</BODY>

</HTML>
