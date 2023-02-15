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
    $ages = ["anass"=> 19 ,"mohammed"=> 46,"abderrahmane"=> 20,"ayman"=> 21,"ahmed"=> 34];
    foreach($ages as $key => $value){
        echo $key, " a ",$value," ans <br>";
    }
    foreach($ages as $key => $value){
        echo $key, " a ",$value," ans <br>";
    }

    ?> 
    <table>
        <th>
    names
</th>
<th>ages</th>
        <?php
        foreach($ages as $key => $value){
            echo "<tr> 
            <td> $key </td>
            <td> $value </td>
            </tr>";
        }
        ?>
    </table>
</body>
<style>
    table,td,th {
        border : 1px solid black;

    }
    th,td{
        padding:5px;
        text-align:center;
    }
</style>
</html>