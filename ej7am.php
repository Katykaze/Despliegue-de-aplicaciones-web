<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    //---------variables
    $programacionNota = 0;
    $baseDatosNota = 10;
    $alumno = "";
    $alumno2 = "";
    $notaBaja = 10;
    $asignaturaBaja = "";
    $notaAlta = 0;
    $asignaturaAlta = "";
    $contadorAlumnos = 0;
    $notaMediaP = 0;
    $notaMediaB = 0;
    $notaMediaF = 0;
    $notaMediaM = 0;
    $alumnos = array(
        'Roberto' => array('Programacion' => 7, 'Bases de Datos' => 10, 'FOL' => 10, 'Lenguaje de Marcas' => 8),
        'Lorena' => array('Programacion' => 9, 'Bases de Datos' => 8, 'FOL' => 9, 'Lenguaje de Marcas' => 7),
        'Carolina' => array('Programacion' => 5, 'Bases de Datos' => 9, 'FOL' => 8, 'Lenguaje de Marcas' => 5),
        'Angelica' => array('Programacion' => 10, 'Bases de Datos' => 10, 'FOL' => 8, 'Lenguaje de Marcas' => 9),
        'Carlos' => array('Programacion' => 8, 'Bases de Datos' => 7, 'FOL' => 7, 'Lenguaje de Marcas' => 7),
        'Javier' => array('Programacion' => 6, 'Bases de Datos' => 6, 'FOL' => 10, 'Lenguaje de Marcas' => 10),
        'Marta' => array('Programacion' => 5, 'Bases de Datos' => 5, 'FOL' => 6, 'Lenguaje de Marcas' => 5),
        'Daniel' => array('Programacion' => 8, 'Bases de Datos' => 6, 'FOL' => 8, 'Lenguaje de Marcas' => 4),
        'Oscar' => array('Programacion' => 6, 'Bases de Datos' => 7, 'FOL' => 6, 'Lenguaje de Marcas' => 5),
        'Laura' => array('Programacion' => 6, 'Bases de Datos' => 8, 'FOL' => 6, 'Lenguaje de Marcas' => 7)
    );
//------------variables auxiliares para almacenar los ejemplos
$asignatura1='Programacion';
$asignatura2='Bases de Datos';
$alumnoEj='Roberto';
    foreach ($alumnos as $clave => $valor) {
        foreach ($valor as $clave2 => $valor2) {
            //echo $clave2 . " Nota " . $valor2;
            if ($clave2 == $asignatura1  && $valor2 > $programacionNota) {
                $programacionNota = $valor2;
                $alumno = $clave;
            }
            if ($clave2 == $asignatura2  && $valor2 < $baseDatosNota) {
                $baseDatosNota = $valor2;
                $alumno2 = $clave;
            }
            if ($clave == $alumnoEj && $valor2 < $notaBaja) {
                $notaBaja = $valor2;
                $asignaturaBaja = $clave2;
            }
            if ($clave == $alumnoEj && $valor2 > $notaAlta) {
                $notaAlta = $valor2;
                $asignaturaAlta = $clave2;
            }
        }
    }
    //---------------------Mostrar por pantalla el alumno con mayor nota en una asignatura determinada.
    //elegimos asignatura de programacion
    echo "El alumno/a con mejor nota en ".$asignatura1. " ha sido " . $alumno . " y su nota es  " . $programacionNota;
    echo "</br>";
    //---------------------Mostrar por pantalla el alumno con menor nota en una asignatura determinada.
    echo "El alumno/a con menor nota en " . $asignatura2 ." ha sido " . $alumno2 . " y su nota es  " . $baseDatosNota;
    echo "</br>";
    //-------Para un alumno, mostrar en que materia tiene su nota más baja.
    //elegimos a Roberto
    echo "El alumno ".$alumnoEj." en la asignatura " . $asignaturaBaja . " tiene  una nota de " . $notaBaja . " y es su nota más baja";
    echo "</br>";
    //Para un alumno, mostrar en que materia tiene su nota más alta.
    echo "El alumno " .$alumnoEj. " en la asignatura " . $asignaturaAlta . " tiene una nota de " . $notaAlta . " y es su nota más alta";
    //Mostrar la media por materia de todos los alumnos.
    
    foreach ($alumnos as $clave => $valor) {
        $contadorAlumnos++;
        foreach ($valor as $clave2 => $valor2) {

            switch ($clave2) {
                case 'Programacion':
                    $notaMediaP += $valor2;
                    break;
                case 'Bases de Datos':
                    $notaMediaB += $valor2;
                    break;
                case 'FOL':
                    $notaMediaF += $valor2;
                    break;
                case 'Lenguaje de Marcas':
                    $notaMediaM += $valor2;
                    break;
            }
        }
    }
    //echo $contadorAlumnos;
    echo "</br>";
    echo "La nota media de Programacion es " . $notaMediaP / $contadorAlumnos;
    echo "</br>";
    echo "La nota media de Base de Datos es " . $notaMediaB / $contadorAlumnos;
    echo "</br>";
    echo "La nota media de Fol es " . $notaMediaF / $contadorAlumnos;
    echo "</br>";
    echo "La nota media de Lenguaje de Marcas es " . $notaMediaM / $contadorAlumnos;
    echo "</br>";
    //----------------Mostrar la media por alumno para todas las materias

    foreach ($alumnos as $clave => $valor) {
        //es necesario declarar aqui para que en cada alumno se resetee a cero y no vaya acumulando
       $mediaGlobal=0;
        foreach ($valor as $clave2 => $valor2) {         
            $mediaGlobal = $valor2 + $mediaGlobal;         
        }
        
        echo "la nota media de " . $clave . " es ". $mediaGlobal/4;
        echo "</br>";
    }
   
    ?>
</BODY>

</HTML>
