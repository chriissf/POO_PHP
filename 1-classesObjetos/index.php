<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condição Para</title>
    <!-- <link rel="stylesheet" href="_css/estilo.css">-->
</head>

<body>
    <?php
    require_once 'Caneta.php';

    $c1 = new Caneta();
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampada = false;
    $c1->tampar();
    $c1->destampar();
    $c1->rabiscar();


    //print_r($c1);

    ?>
</body>

</html>