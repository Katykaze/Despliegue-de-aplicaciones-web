<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    $matriz = array(array(2, 0, 1,6), array(3, 0, 0,1), array(5, 1, 1,4));
    for($i=0;$i<count($matriz);$i++){
        for($j=0;$j<count($matriz[$i]);$j++){
           echo $matriz[$i][$j];
           echo " ";
        }
        echo "<br>";
    }
    printf("<br>");
    printf("<br>");
    //---------------matriz traspuesta
    $matrizTras=array();
    for($i=0;$i<count($matriz[0]);$i++){
        $filaTras=array();
        for($j=0;$j<count($matriz);$j++){
            //creamos una variable de array para guardar las posiciones ambiadas y las almacenamos en otro array matrizTras
            $filaTras[]=$matriz[$j][$i];
        }
        $matrizTras[]=$filaTras;
    }
    //------------imprimir matriz traspuesta
    for($i=0;$i<count($matrizTras);$i++){
        for($j=0;$j<count($matrizTras[$i]);$j++){
           echo $matrizTras[$i][$j];
           echo " ";
        }
        echo "<br>";
    }
    //print_r($matriz);
    echo "<br>";
    print_r($matrizTras);
    echo "<br>";
    ?>
</BODY>

</HTML>
