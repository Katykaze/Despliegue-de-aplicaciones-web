<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    $notas = array("Carlos" => 10, "Javier" => 8, "Daniel" => 7, "Gabriel" => 8, "Roberto" => 9);
    $sumaNotas=0;
    $contadorAlumnos=0;
    //---------------Mostrar media de notas
    foreach ($notas as $clave => $valor) {
        $sumaNotas+=$valor;
        $contadorAlumnos++;
        //echo "Alumno: " . $clave . " Nota Base de Datos: " . $valor;
        //echo "<br>";
    }
    echo "La media de notas  es " . $sumaNotas/$contadorAlumnos."</br>";
    //-------------mostrar alumno con mayor nota
    $mayorNota = array_search(max($notas),$notas); 
    echo "El estudiante con mayor nota es ".$mayorNota."</br>";
    $menorNota = array_search(min($notas),$notas); 
    echo "El estudiante con menor nota es ". $menorNota;

    ?>
</BODY>

</HTML>
