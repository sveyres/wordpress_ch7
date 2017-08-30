<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sass_inte catalogue</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=<?php echo '"'.get_stylesheet_directory_uri( ).'/static/external/bootstrap/dist/css/bootstrap.css"';  ?>>
    <link href="https://fonts.googleapis.com/css?family=Arvo|Lato:300" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/static/js/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css'; ?>" >

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/static/js/OwlCarousel2-2.2.1/dist/assets/owl.theme.green.min.css'; ?>" >



</head>

<body>
    <header>
        <div class="">
            <h1><?php bloginfo( 'name' ); ?></h1>
            <p><?php bloginfo( 'description' ); ?></p>
            <div class="buttons">
                <a href="#"><button class="button01" type="button" name="button">Twitter</button></a>
                <a href="#"><button class="button02" type="button" name="button">Free Download</button></a>
            </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri().'/static/img/circle.png'; ?>" alt="down">
    </header>