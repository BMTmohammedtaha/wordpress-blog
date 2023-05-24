<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title><?php bloginfo('title') ?></title>
    <!-- costum css -->
    <!-- <link rel="stylesheet" href="responsive/responsive.css"> -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo('template_directory'); ?>/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo('template_directory'); ?>/img/favicon.png">
</head>
<body>
    <!-- Star Menu -->
    <div class="menu">
        <div class="logo">
        <a href=""><img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo-blog.png" alt=""></a>
        <div class="menu-icon" id="menu-toogle">
            <img src="img/menu-light.png" class="menu-icon" onclick="menutoggle()">
        </div>
        </div>
        <nav>
            <ul id="MenuItems">
                <?php wp_nav_menu(); ?>
            </ul>
        </nav>
    </div>
    <!-- End Menu -->
    <div class="container">