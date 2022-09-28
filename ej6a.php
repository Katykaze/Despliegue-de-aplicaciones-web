<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
     $primerArray=array("Bases Datos","Entornos Desarrollo","Programación");
     $segundoArray=array("Sistemas Informáticos","FOL","Mecanizado");
     $tercerArray=array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces","Inglés");
     $resultado = array_merge($primerArray, $segundoArray,$tercerArray);
     $elemento = array_search("Mecanizado",$resultado);
     echo "Borrando e imprimiendo Nuevo array sin mecanizado";
     if($elemento !== false){
        unset($resultado[$elemento]);
        print_r($resultado);
        echo"</br>";
        print_r(array_reverse($resultado));
     }

    ?>
</BODY>

</HTML>
