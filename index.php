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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main class="p-4">
        <section>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">description</th>
                        <th scope="col">parking</th>
                        <th scope="col">vote</th>
                        <th scope="col">distance to center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($hotels as $hotel ) {?>
                    <tr>
                        <th scope="row"><?php echo $hotel['name']  ?></th>
                        <td><?php echo $hotel['description']  ?></td>
                        <td><?php echo $hotel['parking']  ?></td>
                        <td><?php echo $hotel['vote']  ?></td>
                        <td><?php echo $hotel['distance_to_center']  ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </section>
        <form action='./index.php' action='GET'>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="parking" id="parking" />
                <label class="form-check-label" id="parking" for="exampleCheck1">con parchegio</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
            <?php var_dump($_GET)?>
        </form>
        <?php 
            if($_GET['parking'] === 1){
                echo $hotel['name'];
            }elseif($_GET['parking'] === 0 ){
                echo $hotel['name'];
            }
            
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>