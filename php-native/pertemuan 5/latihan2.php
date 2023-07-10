<?php
// pengulangan pada array for
$angka = [13, 36, 48, 59, 71, 80, 99, 100, 111];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan for</title>
    <style>
        div {
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
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div><?php echo $angka[$i]; ?></div>
    <?php } ?>
</body>

</html>