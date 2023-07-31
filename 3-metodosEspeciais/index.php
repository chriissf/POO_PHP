<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condição Para</title>
    <!-- <link rel="stylesheet" href="_css/estilo.css">-->
</head>

<body>
    <pre>
    <?php
    require_once 'Caneta.php';

    $c1 = new Caneta("Bic", "Azul", 0.5);
    $c2 = new Caneta("kkk", "Verde", 1.5);

    print_r($c1);
    print_r($c2);

    ?>
    </pre>
</body>

</html>