<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php

    $n1 = 0;
    $n2 = 0;
    $numeroF;
    $numeroC;
    for ($i = 0; $i < 5; $i++) {
        $n1++;
        $n2 = 0;
        for ($j = 0; $j < 3; $j++) {
            $n2++;
            $numeroF = "($n1 , $n2)";
            echo $matriz[$j][$i] = $numeroF;
            
            echo " ";
        }
        //$numeroC="($n1 , $n2)";
        echo "<br>";
    }
    $txt = '<table border>';
    //----------------imprimiendo en tabla---------------------
    print_r($matriz);
  


    //  foreach($matriz as $x){
    //      $txt.='<tr>';
    //      foreach($x as $xy) $txt.='<td>'.$xy.'</td>';
    //       $txt.='</tr>';
    //   }
    //   $txt.='</table>';
    //   echo $txt;

    ?>
</BODY>

</HTML>
