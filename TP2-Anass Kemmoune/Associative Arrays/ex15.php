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
    $capi = ["Maroc" => "Rabat", "Allemagne" => "Berlin" , "Serbie" => "Belgrade" , "Brésil" => "Brasilia" ,
    "Slovaquie" => "Bratislava" , "Italie" => "Rome" , "Venezuela" => "Caracas" , "Moldavie" => "Chisinau" ,
    "Guyana" =>"Georgetown" , "Viêt Nam" =>"Hanoï" ,"Zimbabwe" => "Harare" , "Cuba" => "La Havane", "Pays-Bas" =>"La
    Haye" , "Finlande" => "Helsinki"];

    foreach($capi as $key => $value){
        echo "La capitale ==> $key  est   $value <br>";
    }
     ?>
     <table>
        <th>Pays</th>
        <th>Capitales</th>
        <?php 
        foreach($capi as $key => $value){
        echo "<tr>
        <td>
        $key
        </td>
        <td>
        $value
        </td>
        </tr>
        ";

        }
        ?>

     </table>
     <?php
     function find_capitale($array , $pays){
        foreach($array as $key => $value){
            if ($key == $pays){
                return $value;
            }
        }
     }
    echo "Capitale trouvée : ",find_capitale($capi,"Italie");
     ?>
</body>
<style>
    table {
        margin:50px 0;
    }
    table , th , td {
        border:1px solid black;
    }
    th,td{
        padding:8px;
        text-align :center;
    }
</style>

</html>