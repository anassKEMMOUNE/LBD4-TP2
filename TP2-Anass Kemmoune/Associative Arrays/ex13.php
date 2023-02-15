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
    $notes = ["Ahmed" => 14, "Joudia" => 19, "Samir" => 14,"Yasser" => 14.5,"Aya" => 12,"Ilham" => 16,"Yassine" => 17];
    foreach($notes as $name => $value){
        echo "Nom : $name, Note = $value <br>";
    }
    ?>
    <table style = "margin:50px 0;">
        <th>Clef</th>
        <th>Valeur</th>
        <?php 
         foreach($notes as $key => $value){
            echo "<tr> 
            <td> $key </td>
            <td> $value </td>
            </tr>";
        }
        ?>
    </table>
    <?php 
    foreach($notes as $key => $value){
        if ($value ==  max($notes)){
            echo "$key ==> $value <br>";
        }
    }
    foreach($notes as $key => $value){
        if ($value ==  min($notes)){
            echo "$key ==> $value <br>";
        }
    }
    $mean = 0;
    foreach($notes as $key => $value){
        $mean += $value;
    }
    $mean /= count($notes);
    echo "Moyenne de la classe : ",$mean;
    ?>
</body>
<style>
    table , th , td {
        border:1px solid black;
    }
    th,td{
        padding:5px;
        text-align :center;
    }
</style>
</html>