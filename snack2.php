<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// recupero dati
$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';


// validazione
$is_age_valid = is_numeric($age);
$is_mail_valid = strpos($mail , '@') && strpos($mail , '.');
$is_name_valid = mb_strlen(trim($name));

// if(!$is_age_valid || !$is_mail_valid || !$is_name_valid){
//     echo "ACCESS DENIED";
    
// }else{
//     echo "ACCESS GRANTED";
// };



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0%;
        }
        .access{
            
            height:100vh;
            width: 100vw;
            font-size: 150px;
            display:flex;
            justify-content:center;
            align-items:center;
            color:#fff
        }
        .granted{
            background-color:green;
            
        }
        .denied{
            background-color:#000
        }
    </style>
</head>
<body>
    <?php if(!$is_age_valid || !$is_mail_valid || !$is_name_valid) :?>
        <div class="access denied">ACCESS DENIED</div>
    <?php else : ?> 
        <div class="access granted">ACCESS GRANTED</div>
    <?php endif; ?> 
</body>
</html>