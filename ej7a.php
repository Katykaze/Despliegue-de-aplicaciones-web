<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    $alumnos = array("Carlos" => 36, "Javier" => 18, "Daniel" => 19, "Gabriel" => 20, "Roberto" => 34);
    //-------------a)Mostrar contenido del array----------------
    foreach ($alumnos as $clave => $valor) {
        echo "Alumno: " . $clave . " Edad: " . $valor;
        echo "<br>";
    }
    //situando puntero en segunda posicion e imprimir--------------
    $puntero = current($alumnos);//hace referencia el puntero a la primera posicion
    $puntero = next($alumnos);
    echo "el valor de la segunda posicion es ".$puntero."<br>";
    $puntero = next($alumnos);
    echo "el valor de la tercera posicion es ".$puntero."<br>";
    $puntero = end($alumnos);
    echo "el valor de la ultima posicion es ".$puntero."<br>";
    //ordenando arrays por edad ascendente --------------------------------------------------------
    asort($alumnos);
    foreach($alumnos as $clave => $valor) {
        echo "Clave=" . $clave. ", Valor=" . $valor;
        echo "<br>";
      }
      //mostrando primera posicion y ultima del array
      $puntero = current($alumnos);
      echo "el valor de la primera posicion es ".$puntero."<br>";
      $puntero = end($alumnos);
      echo "el valor de la ultima posicion es ".$puntero."<br>";
      /**
       * prev() rebobina el puntero al anterior
       * reset()reestablece el puntero interno a la primera posicion
       * each() devuelve el par clave valor del array y avanza el cursor
       */
    ?>
</BODY>

</HTML>
