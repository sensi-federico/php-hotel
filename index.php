<?php
// Descrizione
// Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
// Stampare tutti i nostri hotel con tutti i dati disponibili.
// Iniziate in modo graduale. Prima stampate in pagina i dati, senza preoccuparvi dello stile.
// Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.


// Bonus: 1
// Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
// Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
// NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
// Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.


$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

// foreach ($hotels as $hotel) {
//     foreach ($hotel as $key => $details) {
//         echo $key . ' : ' . $details . '<br>';
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-5 mt-5">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <th scope="col"><?= $hotels[$i]['name'] ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <th scope="row">Description</th>
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <td scope="row"><?= $hotels[$i]['description'] ?></td>
                        <?php } ?>
                    </tr>
                    <tr class="">
                        <th scope="row">Parking</th>
                        <?php for ($i = 0; $i < 5; $i++) {
                            if ($hotels[$i]['parking'] == true) { ?>
                                <td scope="row">Yes</td>
                            <?php } else { ?>
                                <td>None</td>
                        <?php }
                        } ?>
                    </tr>
                    <tr class="">
                        <th scope="row">Vote</th>
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <td scope="row"><?= $hotels[$i]['vote'] ?></td>
                        <?php } ?>
                    </tr>
                    <tr class="">
                        <th scope="row">Distance to center</th>
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <td scope="row"><?= $hotels[$i]['distance_to_center'] ?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>