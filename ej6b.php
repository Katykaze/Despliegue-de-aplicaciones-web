<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial </TITLE>
</HEAD>

<BODY>
    
        <?php
        $num = "5";
        //empezamos en uno para que pueda empezar a calcular
        $factorial=1;
        for($i=1; $i <=$num; $i++){
            $factorial = $i * $factorial;
        }
        echo " $num ! = ";
        for($j=$num;$j>=1;$j--){ 
            //meto la condición para que cuando llegue a 1 no repita la X delante al imprimirse
            if($j!=1){
                echo "$j x"; 
            }else{
                echo $j;
            }                              
        }
        echo "= $factorial";
       
        ?>
    </table>
</BODY>

</HTML>
