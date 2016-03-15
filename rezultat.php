<!DOCTYPE html>
<html>
<head>
    <title>Prvi PHP</title>
    <meta charset="utf-8">
</head>

<body>
<h1>Prvi PHP</h1>

<?php
    echo(date('d.m.Y.'));

    $rezultat = $_POST['broj1']+$_POST['broj2']+$_POST['broj3'];
    echo('<br><br>Rezultat je:'. $rezultat);
    echo('<br><br>Vaše ime je:'. htmlspecialchars ($_POST['ime']));
    ?>

</body>
</html>