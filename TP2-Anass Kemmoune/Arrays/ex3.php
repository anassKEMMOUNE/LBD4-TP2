<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $notes = [10,15,8,19,13,17,6,16,15,5,20];
    function afficher($array){
        foreach($array as $item){
            echo $item , " ";
        }
    }
    afficher($notes);
    function moyenne($array){
        $mean = 0;
        foreach($array as $value){
            $mean += $value;
        }
        return $mean/count($array);
    }
    echo "<br>", moyenne($notes);
    function valider($array){
        $count = 0;
        foreach($array as $value){
            if ($value > 10){
                $count += 1;
            }
        }
        return $count;
    }
    echo "<br>", valider($notes);
    function perfect_grade($array){
        $count = 0;
        foreach($array as $value){
            if ($value == 20){
                $count += 1;
            }
        }
        return $count;
    }
    echo "<br>", perfect_grade($notes),"<br>";

    /**Helper function */
    function sort_test($array){
        for ($j = 0;$j<count($array) ;$j++){
            $min = $array[$j];
            $x = $j;
            for($i =$j+1 ; $i<count($array);$i++){
                if ($array[$i]>$min ){
                    $min = $array[$i];
                    $x = $i;
                }
            }
            array_splice($array,$x,1);
            array_unshift($array,$min);
        }
       return $array;
    }
print_r(sort_test($notes));

function search_value($array,$val){

    foreach($array as $key => $value){
        if ($val == $value)
            return $key;
        }
    }
echo "<br>";
print_r(search_value($notes,20));
    ?>
</body>
</html>