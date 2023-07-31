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
    require_once 'visibilidade.php';

    $c1 = new Caneta();
    $c1->modelo = "Bic Cristal";
    $c1->cor = "azul";
    //erro privado $c1->ponta = 0.7;




    $c1->rabiscar();
    $c1->tampar();
    print_r($c1);

    ?>
    </pre>
</body>

</html>