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

    $c1 = new Caneta();
    //$c1->modelo = "Bic Cristal";
    $c1->setModelo("Bic");
    $c1->setPonta(0.5);


    print "Eu tenho uma caneta  {$c1->getModelo()} de ponta {$c1->getPonta()}";

    ?>
    </pre>
</body>

</html>