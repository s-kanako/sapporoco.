<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172481968-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-172481968-1');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SapporoCo.</title>
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- fontawsome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo get_template_directory_uri();?>/assets/images/sapporoco_icon.png" size="50✖️50">
    
    <?php wp_head(); ?> 
</head>

<body>
    <div class="container">
        <header>
            <div class="header_content">
                <div class="header_inner">
                    <h1>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sapporoco_cafe.png" alt="logo" width=100 height=70></a>
                    </h1>
                    <div class="toggle">
                        <span></span>
                        <span></span>
                    </div>
                    <navmenu class="header_list">
                        <ul>
                            <li class="header_item"><a href="<?php echo esc_url( home_url( '/cafe' ) ); ?>">Cafe</a></li>
                            <li class="header_item"><a href="<?php echo esc_url( home_url( '/service' ) ); ?>">Service</a></li>
                            <li class="header_item"><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About us</a></li>
                            <li class="header_item"><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
                        </ul>
                    </navmenu>
                </div>
            </div>
            <div class="black-bg"></div>
        </header>
    
    </div>
