<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    $fila=3;
    $columna=3;
    $matriz2[][]=array();
    $suma[]=array();  
    $matriz3[]=array();
    //valores maximos de las filas
    //$valoresMaximos=array();
    //valores promedios de las filas 
    
    for($i=0;$i<$fila;$i++){
        for($j=0;$j<$columna;$j++){
           echo $matriz2[$i][$j]=rand( 1, 100 );
           echo " ";
        }
        echo "<br>";
    }
    printf("<br>");
    printf("<br>");
    //-----------------------------------medias y maximos------------------------
     for($i=0;$i<count($matriz2);$i++){ 
          $suma[$i]=0;
        $valoresMaximos[$i]=max($matriz2[$i]);
        for($j=0;$j<count($matriz2[$i]);$j++){

            $suma[$i]+=intval($matriz2[$i][$j])/3;          
        }
       
        //$valoresMaximos[]=$maximos;
        echo "<br>";
     }
     //printeamos los valores maximos de cada fila
    //print_r($valoresMaximos);
    //print_r($matriz2);
    print_r($valoresMaximos);
    echo "<br>";
    echo "las medias de las filas son: ";
    print_r($suma);
    ?>
</BODY>

</HTML>
