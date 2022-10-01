
<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php


    $matriz = array(array(2, 0, 1), array(3, 0, 0), array(5, 1, 1));
    $segundaMatriz = array(array(4, 0, 5), array(3, 3, 1), array(6, 5, 3));
    $suma = array();
    $producto = array();
    /*$longitud1 = count($matriz);
    $longitud2 = count($segundaMatriz);
    echo $longitud1;
    echo $longitud2;*/
    //no podemos almacenar en variables para reutilizarlas
    print_r($matriz);
    print_r($segundaMatriz);
    //La suma de ambas matrices
    if (count($matriz) == count($segundaMatriz)) {
        for ($i = 0; $i < count($matriz); $i++) {
            $suma[] = array(); //por cada fila una nueva
            if (count($matriz[$i]) == count($segundaMatriz[$i])) {
                for ($j = 0; $j < count($matriz[$i]); $j++) {
                    $suma[$i][$j] = $matriz[$i][$j]  + $segundaMatriz[$i][$j];
                }
            }
        }
    }
    echo "<pre>";
    print_r($suma);
    echo "</pre>";

    //la multiplicacion de matrices
    for ($i = 0; $i < count($matriz); $i++) {
        $producto[] = array();
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            $resultado = 0;
            //realizamos otro for para ir alamacenando en resultado cada operacion de multiplicacion ademas de la suma total
            //lo metemos en el array de producto
            for ($z = 0; $z < 3; $z++) {
                $resultado += (intval($matriz[$i][$z]) * intval($segundaMatriz[$z][$j]));
                $producto[$i][$j] = $resultado;
            }
        }
    }
    echo "<pre>";
    print_r($producto);
    echo "</pre>";

    ?>
</BODY>

</HTML>
