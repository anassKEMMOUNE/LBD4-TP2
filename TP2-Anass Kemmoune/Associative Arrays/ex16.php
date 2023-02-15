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
        $tableau = [
            "web" => [
                "PHP" => ["lien" => "https://www.php.net/","avis" =>"*****" ],
                "HTML" => ["lien" => "https://www.w3schools.com/html/default.asp","avis" =>"****" ],
                "JavaScript" => ["lien" => "https://www.javascript.com/","avis" =>"**" ],
                "CSS" => ["lien" => "https://www.w3schools.com/css/","avis" =>"****" ]
            ]
            ,

            "db" => [
                "MySQL" =>  ["lien" => "https://www.mysql.com/","avis" =>"*****" ],
                "PostgreSQ" =>  ["lien" => "https://www.postgresql.org","avis" =>"*****" ],
                "Oracle" =>  ["lien" => "https://www.oracle.com/","avis" =>"****" ],
                "DB2" => ["lien" => "https://www.ibm.com/products/db2","avis" =>"****" ],

            ]

            ];
    
    print_r($tableau);
    echo "<br>";
    foreach($tableau as $cat=> $content){
        echo $cat," : <br>";
        foreach($content as $key => $value){
            echo $value["lien"],"<br>";
        }
        echo "<br>";
    }

    function sort_test($array){
        $rating = [];
        foreach($array as $key=>$value){
            $rating[$key] = count(str_split($value["avis"]));
        }
    asort($rating);
    $rating = array_reverse($rating);
    echo "Sites recommandés triés par avis : <br>";
    foreach($rating as $key=>$value){
        echo $array[$key]["lien"],"   Qui a : ",$array[$key]["avis"],"<br>";
    }
    }
sort_test($tableau["web"]);
sort_test($tableau["db"]);
    ?>
</body>
</html>