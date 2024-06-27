# php-hotel

Descrizione
Partiamo da questo array di hotel: https://www.codepile.net/pile/OEWY7Q1G

Milestone 1
Stampare tutti i nostri hotel con tutti i dati disponibili. Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

Milestone 2
Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.

Milestone 3 
Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

NOTA:
deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e
che hanno un voto di tre stelle o superiore) Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

html

<form action='./index.php' action='GET'>
    <inpout type='checkbox' name='hasParking' />
    <inpout type='text' name='pippo' />
    <submit>
</form>

index.php

$_GET --> array

$_GET['pippo'] --> contiene il valore dell'input
$_GET['hasParking'] --> true/false --- 1/0 --- 

var_dump($_GET)

 <!-- <?php 
                    if($hotel['parking'] === true ){
                        echo $hotel['name'];
                    }
                    
                    ?> -->
        </section>



