<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php 
    echo "<th> </th>";
    for ($i = 2 ; $i<=10 ; $i++){
        echo "<th style='font-weight : 600;'> $i </th>";
    }
    for ($i =2 ; $i<= 10;$i++){
        
        echo "<tr>";
        echo "<td> $i</td>";
        for ($j = 2 ; $j <= 10 ; $j++){
            echo "<td>",$i*$j,"</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>

</body>
<style>
    table , th , td {
        border:1px solid black;
    }
    th,td{
        padding:8px;
        text-align :center;
    }
</style>
</html>