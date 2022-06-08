<?php 
/*
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$alunni=[
    [
        'nome'=>'Marta',
        'cognome'=>'de Martis',
        'voti'=>[5,6,7,8,9,10]
    ],
    [
        'nome'=>'Sonia',
        'cognome'=>'Rossi',
        'voti'=>[6,6,7,8,9,10]
    ],
    [
        'nome'=>'Giuseppe',
        'cognome'=>'Bianchi',
        'voti'=>[7,6,7,8,9,10]
    ],
    [
        'nome'=>'Vittorio',
        'cognome'=>'Sgarbi',
        'voti'=>[8,6,7,8,9,10]
    ],
    [
        'nome'=>'Andrea',
        'cognome'=>'la Rosa',
        'voti'=>[9,6,7,8,9,10]
    ]
];

function sumVoti($voti){
    $sum=0;
    foreach ($voti as $voto) { 
        $sum+=$voto;
    };
    $media=ceil($sum / count($voti));
    return $media;
};


    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack7</title>
</head>
<body>
    <h4>Registro degli alunni della classe 61:</h4>
    <ul>
        <?php foreach ($alunni as $alunno) : ?>
            <li>alunno:
                <ul>
                    <li>nome: <?php echo $alunno['nome'];?></li>
                    <li>cognome: <?php echo $alunno['cognome'];?></li>
                    <li>media voti:<?php echo sumVoti($alunno['voti'])?></li>
                </ul>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>