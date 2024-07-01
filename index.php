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
//     <?php 
//     if($_GET['parking'] === 1){
//         echo $hotel['name'];
//     }elseif($_GET['parking'] === 0 ){
//         echo $hotel['name'];
//     }
    
    $filteredHotels = $hotels;

    if(isset($_GET['parking'])){
        $parking = $_GET['parking'];
        
        if($parking == 1){
            $tempArray=[];

            foreach ($filteredHotels as $hotel){
                if($hotel['parking'] === true){
                    $tempArray[]=$hotel;
                }
            }
            $filteredHotels = $tempArray;
        }
    }

    if(isset($_GET['stars'])){
        $stars = $_GET['stars'];
        
        if($stars >= 1 && $stars <= 5){
            $tempArray=[];

            foreach ($filteredHotels as $hotel){
                if($hotel['vote'] >= $stars){
                    $tempArray[]=$hotel;
                }
            }
            $filteredHotels = $tempArray;
        }
    }
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
        <section class="d-flex">
            <div class="col-6">
                <form action='./index.php' action='GET'>
                    <div class="mb-3 form-check">
                        <label class="form-check-label" id="parking" for="exampleCheck1"> con parchegio ?</label>
                        <select name="parking" id="parking">
                            <option value="" selected >No</option>
                            <option value="1">Si</option>
                        </select> 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-6">
                <label for="stars"> seleziona il numero di stelle</label>
                <input type="number" name="stars" id="stars" min="1" max="5" required>
            </div>
        </section>
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
                    <?php foreach($filteredHotels as $hotel ) {?>
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
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>