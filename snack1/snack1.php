<?php
$partite=[
    [
        'squadra_ospite'=> 'Milano',
        'squadra_di_casa'=> 'Roma',
        'squadra_ospite_punteggio'=> '10',
        'squadra_di_casa_punteggio'=> '20',
    ],
    [
        'squadra_ospite'=> 'Napoli',
        'squadra_di_casa'=> 'Torino',
        'squadra_ospite_punteggio'=> '30',
        'squadra_di_casa_punteggio'=> '40',
    ],
    [
        'squadra_ospite'=> 'Venezia',
        'squadra_di_casa'=> 'Campobasso',
        'squadra_ospite_punteggio'=> '50',
        'squadra_di_casa_punteggio'=> '60',
    ],
    [
        'squadra_ospite'=> 'Ancona',
        'squadra_di_casa'=> 'Bologna',
        'squadra_ospite_punteggio'=> '70',
        'squadra_di_casa_punteggio'=> '80',
    ],
    [
        'squadra_ospite'=> 'Firenze',
        'squadra_di_casa'=> 'Siracusa',
        'squadra_ospite_punteggio'=> '90',
        'squadra_di_casa_punteggio'=> '10',
    ],
    [
        'squadra_ospite'=> 'Verona',
        'squadra_di_casa'=> 'Genova',
        'squadra_ospite_punteggio'=> '20',
        'squadra_di_casa_punteggio'=> '30',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <h3>Partite che verranno disputate questo mese:</h3>
   <ul>
       <?php for($i=0; $i<count($partite); $i++): ?>
        <li>
            <?php echo $partite[$i]['squadra_ospite']; ?> -
            <?php echo $partite[$i]['squadra_di_casa']; ?> |
            <?php echo $partite[$i]['squadra_ospite_punteggio']; ?> -
            <?php echo $partite[$i]['squadra_di_casa_punteggio']; ?>
        </li>
       <?php endfor; ?>
   </ul> 
   <ul>
       <?php foreach ($partite as $partita) : ?>
       <li>
           <?php echo $partita['squadra_ospite']?> -
           <?php echo $partita['squadra_di_casa']?> |
           <?php echo $partita['squadra_ospite_punteggio']?> -
           <?php echo $partita['squadra_di_casa_punteggio']?>

       </li>
       <?php endforeach ?>
   </ul>
</body>
</html>