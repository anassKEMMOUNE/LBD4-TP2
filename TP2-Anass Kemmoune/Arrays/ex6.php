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
    $emails = ["a45165@gmail.com","b488165@hotmail.com","c48844665@live.com","d9654@gmail.com","e561651@gmail.com","f465165@hotmail.com"];
    $domaines = [];
    foreach($emails as $eml){
        echo $eml,"<br>";
       $a = explode(".",explode("@",$eml)[1])[0] ;
       if(array_key_exists( $a,$domaines)){
            $domaines[$a]++;
       }
       else {
        $domaines[$a] = 1;
       }
    }
    echo "<br> <br> <br>";
    foreach($domaines as $key => $value){
        echo "The domain ",$key," is in ",$value," emails <br>";
    }

    ?>
</body>
</html>