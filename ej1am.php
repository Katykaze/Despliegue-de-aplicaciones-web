<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    
    $multiplos=0;
    for ($j=0; $j < 3; $j++) { 
        for ($i = 0; $i < 3; $i++) { 
            $multiplos+=2;
         echo $matriz[$j][$i]=$multiplos;
         echo " ";
        }
        
        echo "<br>";
       }
       $txt='<table border>';
       //----------------imprimiendo en tabla---------------------

    foreach($matriz as $x){
        $txt.='<tr>';
        foreach($x as $xy) $txt.='<td>'.$xy.'</td>';
        $txt.='</tr>';
    }
    $txt.='</table>';
    echo $txt;

    ?>
</BODY>

</HTML>
