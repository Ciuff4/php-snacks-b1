<?php 
$name= $_GET['name'];
$mail= $_GET["mail"];
$age= $_GET["age"];
$output='i dati inseriti sono validi';
if(empty($name) || empty($mail) || empty($age) ){
     $output='Inserire dei dati validi';
}elseif (strlen($name) < 3) {
    $output='Inserire un nome più lungo di 3 caratteri';
}elseif(!is_numeric($age)){
    $output='Il numero inserito non è valido';
}elseif(!strpos($mail, '@') || !strpos($mail, '.')){
    $output='La mail inserita non contiene @ o .';
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 2</title>
</head>
<body>
    <h1><?php echo $output; ?></h1>
    
</body>
</html>