<HTML>

<HEAD>
    <TITLE> EJ2B – Conversor Decimal a base n </TITLE>
</HEAD>

<BODY>
    <?php
    $num = "56";
    $base = "0";
    $valor_base = "";

    if($base ==0 || $base <0){
        echo "No existe base cero";

    }else{
        while ($num / $base > 0) {
            //almacenamos el resto de la división en la variable
            $valor_base .= (int)($num % $base);
            //dividimos el número por la base
            $num = $num / $base;
            //el resultado de la división lo convertimos en entero
            $num = (int)($num);
        }

    }
    
    //imprimimos el resultado dado la vuelta
    printf(strrev($valor_base));
    ?>
</BODY>

</HTML>
