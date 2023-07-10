<?php
// pengulangan pada foreach
$angka = [11, 22, 33, 44, 55, 66, 77, 88, 99, 111];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan foreach</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            line-height: 50px;
            margin: 3px;
            text-align: center;
            float: left;
            background-color: #af4c8c;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .kotak-dif:hover {
            transform: rotate(360deg);
            border-radius: 50%;
            transition: 1s;
        }

        .clear {
            clear: both;
        }

        .kotak-dif {
            width: 50px;
            height: 50px;
            line-height: 50px;
            margin: 3px;
            text-align: center;
            float: left;
            background-color: #d491c7;
        }
    </style>
</head>

<body>
    <?php foreach ($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>
    <div class="clear"> </div>
    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
    <div class="clear"> </div>
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak-dif"><?php echo $angka[$i]; ?></div>
    <?php } ?>
    <div class="clear"> </div>
    <?php for ($i = 0; $i < count($angka); $i++) { ?>

        <div class="kotak-dif"><?php echo $angka[$i]; ?></div>
    <?php } ?>
    <div class="clear"> </div>
    <?php foreach ($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>
    <div class="clear"> </div>
    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
    <div class="clear"> </div>
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak-dif"><?php echo $angka[$i]; ?></div>
    <?php } ?>
    <div class="clear"> </div>
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak-dif"><?php echo $angka[$i]; ?></div>
    <?php } ?>
    <div class="clear"> </div>
    <?php foreach ($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>
    <div class="clear"> </div>
    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
    <div class="clear"> </div>
</body>

</html>