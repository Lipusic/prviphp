<!DOCTYPE html>
<html>
<head>
    <title>Prvi PHP</title>
    <meta charset="utf-8">
</head>

<body>
<h1>Prvi PHP</h1>

<?php
    echo('Ovo je prije odlomka<br>');
    echo('Super, jos cemo dodati<br>');

    echo(date('d.m.Y.'));

    $ocjena = 5;
    echo('<br>Vaša ocjena je: ' . $ocjena);
    $stanje = 'strašno';
    echo('<br>Stanje je: '.$stanje);
?>

<p>
    Ovo je odlomak
</p>
</body>
</html>