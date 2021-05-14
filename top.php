<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $desc; ?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Marck+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="scss/main.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
</head>
<body id="top">

    <header>
        <div class="logo">
            <a href="index.php">
                <img src="img/logo.png" alt="company">
            </a>
        </div>

        <nav>
            <ul class="menu slide">
                <li class="menu_item"><a <?php if($menu=='home'){echo 'class="attivo"';} ?> href="index.php" class="menu_link">home</a>
                    <span></span>
                </li>

                <li class="menu_item"><a <?php if($menu=='about'){echo 'class="attivo"';} ?> href="about.php" class="menu_link">chi siamo</a>
                    <span></span>
                </li>
            </ul>
        </nav>
    </header>

    <div class="bkg">