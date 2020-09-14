<?php
    //Impresión en pantalla
    echo "Hola mundo";

    echo "<br />Hi friends, <br /> I'm <h1>learning PHP</h1>";

    // Variables
    $name="Alfred";
    $Name="Ls";

    //Concatenación de variables y cadenas
    echo "Hola ".$name."&nbsp;".$Name;
    echo "<br />";

    $num1 = 5;
    $num2 = 25;

    $suma = $num1+$num2;
    echo $suma;

    echo "<br /> La variable \$suma tiene un valor de: $suma";


    $module = $num2 % 2;

    if ($module == 1) {
        echo "<br />el número ".$num2." es impar";
    } else {
        echo "<br />el número ".$num2." no es impar";
    }


    echo "<br />";

    for ($i = 0; $i <= $num2; $i+=5){
        echo "<br />".$i;
    }
?>