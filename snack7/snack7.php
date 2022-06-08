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

function sumVoti($i){
    $sum=0;
    for ($key=0; $key <count($alunni[$i][voti]) ; $key++) { 
        $sum+=$alunni[$i][voti][$key];
        var_dump($sum);
        echo $sum;
    }
    return $sum;
}


    
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
        <?php for ($i=0; $i <count($alunni) ; $i++) : ?>
            <li>alunno <?php echo $i?>
                <ul>
                    <li>nome: <?php echo $alunni[$i]['nome']?></li>
                    <li>cognome: <?php echo $alunni[$i]['cognome']?></li>
                    <li>media voti:<?php echo $alunni[$i]['voti'][sumVoti($i)]?></li>
                </ul>
            </li>
        <?php endfor ?>
    </ul>
</body>
</html>