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
    $moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
    'Octobre', 'Novembre', 'Décembre');
    
    echo "Affichage boucle for","<br>";
    for($i=1;$i<=count($moisFr);$i++){
        echo $i,"-",$moisFr[$i],"<br>";
    }
    echo "Affichage boucle foreach","<br>";
    foreach($moisFr as $key=>$value){
        echo $key,"-",$value,"<br>";
    }
    echo "Afficher le nom du mois correspondant depuis le tableau.","<br>";
    echo $moisFr[intval(date('m')[1])];

    $moisFr[13] = 'Juillet' ;
    for($i=1;$i<=count($moisFr);$i++){
        echo $i,"-",$moisFr[$i],"<br>";
    }
    ?>
</body>
</html>