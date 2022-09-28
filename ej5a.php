<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>

    <?php

/*opcion a añadiendo todo en uno usando +  pero elimina los repetidos*/
    $primerArray=array("Bases Datos","Entornos Desarrollo","Programación");
    $segundoArray=array("Sistemas Informáticos","FOL","Mecanizado");
    $tercerArray=array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces","Inglés");
    $arrayFinal = $primerArray+$segundoArray+$tercerArray;
    var_dump($arrayFinal);
/*opcion b */
    $resultado = array_merge($primerArray, $segundoArray,$tercerArray);
    var_dump($resultado);
/*opcion c , donde array_push funciona como una pila */
array_push($primerArray,$segundoArray,$tercerArray);
    echo "---------array_push";
    var_dump($primerArray);
    //var_dump($arrayFinal);
    ?>
</BODY>

</HTML>
