<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php

    $fila = 3;
    $columna = 5;
    $contadorNumero=0;
    $bidimensional=[];
//imprimimos por fila----------------------------------------------
    for ($i = 0; $i < $fila ; $i++) {
        //es importante inicializar aqui la matriz donde se almacenara la cantidad de numeros
        //para que siga contanfdo y no se reinicie contando desde cero!!!
        $matriz = [];
        for ($j = 0; $j < $columna ; $j++) {
            $contadorNumero+=2;
            $matriz[]=$contadorNumero;
            //printf("(" . $i . "," . $j . ") ");
        }
        $bidimensional[]=$matriz;  
    }
    //-----------------imprimir elemento mayor------------------
    //me creo un array para comparar y así almacenar el maximo
    $arrayMax=array(0,0);
    for($i=0;$i<count($bidimensional);$i++){
        for($j=0;$j<count($bidimensional[$i]);$j++){
            if($bidimensional[$i][$j] > $arrayMax[0][1]){
                $arrayMax[0] = $i;
                $arrayMax[1] = $j;
            }
        }

    }

    print_r($arrayMax);
    printf("<br>");

    ?>
</BODY>
</HTML>
