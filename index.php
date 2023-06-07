<?php

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

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">

    <title>Document</title>
</head>





<body>
    <div class="container my-3">
        <h1>PHP Hotel</h1>
        <form action="" method="get" class="py-3 d-flex">
            <div class="me-4">
                <h4>Cerca parcheggio nell'Hotel</h4>
                <select class="form-select w-100 mb-3" aria-label="Default select example">
                    <option selected>Tutti</option>
                    <option value="1">Con Parcheggio</option>
                    <option value="2">Senza Parcheggio</option>
                </select>
            </div>
            <div>
                <h4>Cerca Hotel in base al voto</h4>
                <select class="form-select w-50 mb-3" aria-label="Default select example">
                    <option selected>Tutti</option>
                    <option value="1">Voto 1</option>
                    <option value="2">Voto 2</option>
                    <option value="3">Voto 3</option>
                    <option value="4">Voto 4</option>
                    <option value="5">Voto 5</option>
                </select>
            </div>
        </form>





        <h4>Lista Hotel</h4>
        <table>
            <thead>
                <tr class="title">
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $parking = true;
                $parking = false;

                foreach ($hotels as $hotel) { ?>
                    <tr class=" line">
                        <td class="casella px-1 w-25">
                            <?= $hotel['name'] ?>
                        </td>
                        <td class="casella px-1 w-50">
                            <?= $hotel['description'] ?>
                        </td>

                        <td class="casella px-1">
                            <?= $hotel['parking'] ?>
                        </td>
                        <td class="casella px-1">
                            <?= $hotel['vote'] ?>
                        </td>
                        <td class="casella px-1">
                            <?= $hotel['distance_to_center'] ?>
                        </td>
                    </tr>
                    <?php
                } ?>
            </tbody>
        </table>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>