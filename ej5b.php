<HTML>

<HEAD>
    <TITLE> EJ5B – Tabla multiplicar con TD</TITLE>
</HEAD>

<BODY>
    
        <?php
        $num = "8";
        $multiplicando = $num;
        echo  "<table border=1><br>";
        echo "<h3>Tabla del $num </h3>";

        for ($multiplicador = 0; $multiplicador <= 10; $multiplicador++) {
            $producto=$multiplicando*$multiplicador;
            echo "<tr>"; //en cada fila de la primera columna colocamos el numero introducido * 0,1,2,3etc
            //usamos &nbsp para que no queden las letras muy juntas
            echo "<td>&nbsp; $multiplicando X $multiplicador &nbsp;</td>";
				echo "<td>&nbsp; $producto &nbsp;</td>"; //en la segunda columna el resultado de la multiplicacion
				echo "</tr>";
        }
        echo "</table>";//cerramos la tabla

        ?>
    </table>
</BODY>

</HTML>
