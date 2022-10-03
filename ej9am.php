<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    $matriz = array(array(2, 0, 1, 6), array(3, 0, 0, 1), array(5, 1, 1, 4));
    echo "Esta es el procedimiento imprimir matriz";
    echo "</br>";
    imprimir($matriz);

    //---------------matriz traspuesta
    $matrizTras = trasponer($matriz);
    echo "Imprimiendo matriz traspuesta </br>";
    imprimir($matrizTras);
    //--------------------------funciones-------------------------
  
    function imprimir($matriz)
    {
        for ($i = 0; $i < count($matriz); $i++) {
            for ($j = 0; $j < count($matriz[$i]); $j++) {
                echo $matriz[$i][$j];
                echo " ";
            }
            echo "<br>";
        }
        printf("<br>");
        printf("<br>");
    }

    function trasponer($matriz){
        $matrizTras = array();
        for ($i = 0; $i < count($matriz[0]); $i++) {
            $filaTras = array();
            for ($j = 0; $j < count($matriz); $j++) {
                //creamos una variable de array para guardar las posiciones ambiadas y las almacenamos en otro array matrizTras
                $filaTras[] = $matriz[$j][$i];
            }
            $matrizTras[] = $filaTras;
        }
        return $matrizTras;
    }


    ?>

</BODY>

</HTML>
