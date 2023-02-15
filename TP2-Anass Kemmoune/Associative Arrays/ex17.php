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
    $students = ["Et123" => ["Nom" => "AB" ,"Prenom"=> "AC","Moyenne" => 17], 
                "Et676" => ["Nom" => "BC" ,"Prenom"=> "BD","Moyenne" => 12],
                "Et998" => ["Nom" => "CD" ,"Prenom"=> "CE","Moyenne" => 9], 
                "Et764" => ["Nom" => "DE" ,"Prenom"=> "DF","Moyenne" => 16.5]
];
    print_r($students);
    echo '<br> <br><br>';
    foreach ($students as $key=>$value){
        echo "$key ==> ",$value["Nom"]," ",$value["Prenom"]," Moyenne : ",$value["Moyenne"],"<br>";
        
    }
    echo "L'etudiant ayant la note la plus élevé : <br>";
    $notes = [];
    foreach ($students as $key=>$value){
        $notes[$key] = $value["Moyenne"];
        
    }
    asort($notes);
    foreach ($students as $key=>$value){
        if (max($notes)== $value["Moyenne"]){
            echo "$key ==> ",$value["Nom"]," ",$value["Prenom"]," Moyenne : ",$value["Moyenne"],"<br>";

        }
        
    }
    echo "Les etudiants ayant validés : <br>";

    foreach ($students as $key=>$value){
        if (10 <= $value["Moyenne"]){
            echo "$key ==> ",$value["Nom"]," ",$value["Prenom"]," Moyenne : ",$value["Moyenne"],"<br>";

        }
        
    }
    echo "Les étudiants n’ayant pas réussi l’année : <br>";

    foreach ($students as $key=>$value){
        if (10 > $value["Moyenne"]){
            echo "$key ==> ",$value["Nom"]," ",$value["Prenom"]," Moyenne : ",$value["Moyenne"],"<br>";

        }
        
    }
    ?>
</body>
</html>