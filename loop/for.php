<?php

    $i=1;
    for(;$i<10;){
        echo $i;
        $i++;
    }

for ($i=0;$i<10;$i++)
{
    if ($i==5){
        continue;
        //break;
    }
    echo $i;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box {
            width: 200px;
            height: 200px;
            margin: 5px;
            background: palegreen;
            float: left;

        }
        .square {
            width: 200px;
            height: 200px;
            margin: 5px;
            background: green;
            float: left;

        }
    </style>
</head>
<body>




        <?php for ($i=0;$i<5;$i++) : ?>
        <div class="box"></div>
        <?php endfor; ?>

        <?php for ($i=0;$i<5;$i++) : ?>
        <div class="square"></div>
        <?php endfor; ?>
        <br>
</body>
</html>
