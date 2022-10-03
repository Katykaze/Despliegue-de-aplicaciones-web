<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    $fila = 3;
    $columna = 3;
    $matriz2[][] = array();
    $suma[] = array();
    $matriz3[] = array();
 //generar  array aleatorio e imprimirlo
    $matriz2= rellenarAleatorio($fila,$columna);
    imprimir($matriz2);
    printf("<br>");
    printf("<br>");
    //-----------------------------------medias y maximos------------------------
    for ($i = 0; $i < count($matriz2); $i++) {
        $suma[$i] = 0;
        $valoresMaximos[$i] = max($matriz2[$i]);
        for ($j = 0; $j < count($matriz2[$i]); $j++) {

            $suma[$i] += intval($matriz2[$i][$j]) / 3;
        }
    }
    //imprimir($valoresMaximos);
    //imprimir($suma);
    print_r($valoresMaximos);
    echo "<br>";
    echo "las medias de las filas son: ";
    print_r($suma);
    //-------------------funciones 
    function rellenarAleatorio($fila, $columna)
    {
        for ($i = 0; $i < $fila; $i++) {
            for ($j = 0; $j < $columna; $j++) {
                $matriz2[$i][$j] = rand(1, 100);
            }
        }
        return $matriz2;
    }
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
    ?>
</BODY>

</HTML>
