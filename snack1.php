<?php
$machday = [
    
    [
        'casa' =>'Junior Casale Monferrato',
        'punti_casa'=> '68',
        'ospite'=>'Esse Solar Gallarate',
        'punti_ospite'=> '65',
    ],
    
    [
        'casa' =>'Mamy.eu Oleggio',
        'punti_casa'=> '78',
        'ospite'=>'Paffoni Fulgor Omegna',
        'punti_ospite'=> '85',
    ],
    [
        'casa' =>'Gema Montecatini',
        'punti_casa'=> '77',
        'ospite'=>'College Basketball Borgomanero',
        'punti_ospite'=> '50',
    ],
    
    [
        'casa' =>'Mamy.eu Oleggio',
        'punti_casa'=> '81',
        'ospite'=>'	Unicusano Pielle Livorno',
        'punti_ospite'=> '85',
    ],
    [
        'casa' =>'Solbat Piombino',
        'punti_casa'=> '68',
        'ospite'=>'3G Electronics Legnano Knights',
        'punti_ospite'=> '70',
    ],
    
    [
        'casa' =>'Herons Basket Montecatini',
        'punti_casa'=> '78',
        'ospite'=>'S.Bernardo Langhe Roero',
        'punti_ospite'=> '79',
    ],
    [
        'casa' =>'Elachem Vigevano 1955',
        'punti_casa'=> '68',
        'ospite'=>'	Campus Varese',
        'punti_ospite'=> '80',
    ],
    
    [
        'casa' =>'Maurelli Group Libertas Livorno',
        'punti_casa'=> '78',
        'ospite'=>'Riso Scotti Pavia',
        'punti_ospite'=> '79',
    ],
];


?>

<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Document</title>
</head>
<body>
    <h1>Today maches</h1>
    <ul>
        <?php for( $i = 0; $i < count($machday); $i++) :?>
            <li>
                <span><?= $machday[$i]['casa'] ?></span> --- <span><?= $machday[$i]['ospite'] ?></span> | <strong><?= $machday[$i]['punti_casa']?></strong> - <strong><?= $machday[$i]['punti_ospite']?></strong>
            </li>
        <?php endfor; ?>
    </ul>
</body>
</html>
    
    
    
    