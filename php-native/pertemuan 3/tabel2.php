<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel 2</title>
    <style>
        .warna-baris {
            background-color: grey;
        }

        .warna-coloum {
            background-color: silver;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($r = 1; $r <= 5; $r++) : ?>
            <?php if ($r % 2 == 1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($c = 1; $c <= 5; $c++) : ?>
                    <td><?= "$r,$c"; ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class="warna-coloum">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($c = 1; $c <= 5; $c++) : ?>
                    <td><?= "$i,$c"; ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>
</body>

</html>