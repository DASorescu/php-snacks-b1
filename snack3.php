<?php

$posts_by_date = [

    '10/01/2019' => [
        [
            'title' => 'Mare',
            'author' => 'Michele scalogni',
            'text' => 'Bellissima giornata al mare '
        ],
        [
            'title' => 'montagna',
            'author' => 'Pippo',
            'text' => 'brr che freddo '
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'wedding day',
            'author' => 'Pluto',
            'text' => '#bellissimi#wedding#wow'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Stadio artemio franchi',
            'author' => 'Paperino',
            'text' => 'football on the way '
        ],
        [
            'title' => 'LOVE THIS GAME ',
            'author' => 'Minnie',
            'text' => 'BASKET con amici'
        ],
        [
            'title' => 'Riccanza',
            'author' => 'Mickey',
            'text' => 'Vuoi anche tu diventare milionario ? Segui i passi dei migliori ! Link in description!'
        ]
    ],
];
$dates = array_keys($posts_by_date);
var_dump(array_keys($posts_by_date));



// var_dump($posts);
// var_dump($posts['10/01/2019']);
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
    <?php for( $i = 0; $i < count($dates); $i++){
     $date = $dates[$i];
     $posts = $posts_by_date[$date];
     ?>
        <section class="date">
            <h2>Post del: <?=$date?></h2>
            <?php for( $j = 0; $j < count($posts); $j++) {?>
                <article>
                    <h3><?= $posts[$j]['title']?></h3>
                    <p><?= $posts[$j]['text']?></p>
                    <address><?= $posts[$j]['author']?></address>
                </article>
            <?php } ?>
        </section>
    <?php } ?>
    
</body>
</html>
    
