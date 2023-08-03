<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condição Para</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <pre>
    <div>
    <?php require "ContaBanco.php";

    $p1 = new ContaBanco(); //jubileu
    $p2 = new ContaBanco(); //Cleuza

    $p1->abrirConta("cc");
    $p1->setDono("Jubileu");
    $p1->setNumConta(112233);

    $p2->abrirConta("cp");
    $p2->setDono("Cleuza");
    $p2->setNumConta(44444);


    $p1->depositar(0);
    $p2->depositar(500);

    $p2->sacar(650);
    $p1->sacar(38);

    $p1->pagarMensalidade();
    $p2->pagarMensalidade();

    $p1->fecharConta();
    $p2->fecharConta();


    print_r($p1);
    print_r($p2);

    ?>
    </div>
    </pre>
</body>

</html>