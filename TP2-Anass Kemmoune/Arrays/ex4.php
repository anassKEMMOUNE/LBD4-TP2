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
      $arr = [495,15,56,19,13,85,6,12,15,8,20];
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
print_r(sort_test($arr));
    ?>
</body>
</html>