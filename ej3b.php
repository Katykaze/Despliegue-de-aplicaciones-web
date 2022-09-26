<HTML>

<HEAD>
    <TITLE> EJ3B – Conversor Decimal a base 16</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "486799";
    $base = "16";
    $letrasNumerosHexadecimales = "0123456789ABCDEF";
    $numHexadecimal = "";
    $str="";
    if ($base == 0 || $base < 0) {
        echo "No existe base cero";
    } else {
        while ($num  > 0) {
            $mod = $num % $base;
            $str = $letrasNumerosHexadecimales[$mod] . $str;
            $num = intdiv($num,16);   
        }
        echo $str;
    }
    ?>
</BODY>

</HTML>
