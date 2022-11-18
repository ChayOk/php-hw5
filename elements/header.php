<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once 'pagesData.php'; ?>

    <header class="header">
        <div class="logo">
            <img src="../img/logo.png" alt="">
        </div>
        <div class="nav">
            <ul>
                <?php foreach ($navMenu as $name => $link): ?>

                <li><a href="<?php echo $link; ?>"><?php echo $name; ?></a></li>

                <?php endforeach; ?>
            </ul>
        </div>
        
    </header>