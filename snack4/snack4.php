<?php
function getRandomUniqueNumbersArray($min , $max , $numbers){
    $randomArray=[];
    while (count($randomArray) < $numbers) {
        $number=rand($min, $max);
        if(!in_array($number, $randomArray )){
            $randomArray[]=$number;
        }
    }
    return $randomArray;
};
$randomNumbersArr=getRandomUniqueNumbersArray(1, 100, 15);
var_dump($randomNumbersArr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < count($randomNumbersArr); $i++) :?>
            <li> <?php echo $randomNumbersArr[$i] ?> </li>
        <?php endfor ?>
    </ul>
</body>
</html>