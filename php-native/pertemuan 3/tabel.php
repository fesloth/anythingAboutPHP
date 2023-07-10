<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) { ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) { ?>
                    <td><?php echo "$i,$j"; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
    <br>
    </table>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($r = 1; $r <= 3; $r++) : ?>
            <!-- jika membuat tag { jangan lupa langsung dibuat tag penutup langsung -->
            <tr>
                <?php for ($c = 1; $c <= 5; $c++) : ?>
                    <!-- tag php echo bisa diganti dengan = -->
                    <td><?= "$r,$c"; ?></td>
                <?php endfor; ?>
                <!-- tag {} bisa diubah dengan : dan endfor;/end...; tergantung pengulangan yg dipakai -->
            </tr>
        <?php endfor; ?>
    </table>
    <br>
    <table>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 10; $j++) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>

</html>