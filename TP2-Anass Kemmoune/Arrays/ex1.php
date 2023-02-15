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
    $a = [9, 3, 3, 3, 2, 2,  8, 5, 5, 1];
    function afficher($array){
        foreach($array as $item){
            echo $item , " ";
        }
    }
    echo "1-Afficher ";
    echo "<br>";
    afficher($a);
    sort($a);
    echo "<br>";
    echo "2-Sort ";
    echo "<br>";
    afficher($a);
    echo "<br>";
    function doublon($array){
        $new_array = [];
        $final_array = [];
        echo "<br>";
        foreach($array as $item){
            $new_array[$item] =  array_count_values($array)[$item];         
        }
        foreach($new_array as $key => $value){
            array_push($final_array, $key);
        }
        return $final_array;
    }
    echo "3-Doublons ";
   afficher(doublon($a)) ;

    ?>
    
</body>
</html>