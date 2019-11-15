<?php include 'masyvai.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turnyrai</title>
</head>
<body>

    <?php foreach ($turnyrai as $gamer => $Turnyras  ):?>
        <ul>

            <li><?=$gamer;?></li>

                <?php foreach ($Turnyras as $detail):?>
                 <li><strong>Turnyrai: </strong>
                 <?php $totalPoint = array_sum($detail);?>
                <ul>
                    <?php foreach ($detail as $key => $item ):?>
                        <li><?=$key;?>-<?=$item;?></li>
                          <?php endforeach;?>

                <li><strong>Viso: <?=$totalPoint;?> </strong></li>
                </ul>
                <?php endforeach;?>
                    </ul>
                    </li>
                <?php endforeach;?>
</body>
</html>
