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
//imprimimos por fila----------------------------------------------
    for ($i = 0; $i < $fila ; $i++) {
        //$matriz = [];
        for ($j = 0; $j < $columna ; $j++) {
            $contadorNumero+=2;
            $matriz[]=$contadorNumero;
            printf("(" . $i . "," . $j . ") ");
        }
        $bidimensional[]=$matriz;  
    }
    printf("<br>");
    printf("<br>");
    //-----------------imprimir por columnas------------------
    for($j=0;$j<$columna;$j++){
        for($i=0;$i< $fila;$i++){
            printf("(" . $i . "," . $j . ") ");

        }

    }
    printf("<br>");
    //en este array bidimensional almacena por cada array la cantidad de numeros , por filas 
    print_r($bidimensional);




    ?>
</BODY>

</HTML>
