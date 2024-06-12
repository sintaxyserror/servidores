<?php

    $array = [
                [ 1, 5, 8, 5],
                [ 7, 3, 2, 4],
                [ 1, 6, 2, 4]
    ]; 
    echo "Array original: <br>";
foreach ($array as $fila) {
    echo implode(",", $fila) . "<br>";
}

$nuevoArray = [[]];
    for($x = 0; $x < count($array); $x ++){
        for($y = 0; $y < count($array[$x]); $y ++){
            $nuevoArray[$y][$x] = $array[$x][$y];
        }
    }



    echo "nuevo array: <br>";
    foreach ($nuevoArray as $fila) {
        echo implode(",", $fila) . "<br>";
    }


    //UTILIZANDO push
/*$arrTrans = [];
for ($i = 0; $i < count($arr[0]); $i++) {
    array_push($arrTrans, []);
    for ($j = 0; $j < count($arr); $j++) {
        array_push($arrTrans[$i], $arr[$j][$i]);
    }
}*/








    ?>

  

   