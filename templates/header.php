<?php 
include_once("helpers/url.php");

$current_page = basename($_SERVER['PHP_SELF']); // Get the name of the current file

// Check if the current page is ourServices.php
$is_our_services_page = ($current_page === 'ourServices.php');

// Check if the current page is aboutUs.php
$is_our_about_us = ($current_page === 'aboutUs.php');

// Check if the current page is portfolio.php
$is_our_portfolio = ($current_page === 'portfolio.php');

?>


<!DOCTYPE html>
<html lang="en" class="h-full relativ" style="min-height: 100%; position: relative;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TattooArte</title>
    <!-- Estilos do projeto -->
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"> <!-- Inclua a biblioteca Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=New+Rocker&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-wuLriYF3TbeLU3Nl7pEs+5fh/sHYAbLFy9jAGZO/5P4BpfC02GIGmgxz+0LhJ20SFWav8+fh3Zyegth3xuwoBw==" crossorigin="anonymous" />

    <style>
        .font-new-rocker {
            font-family: "New Rocker", cursive;
        }
    </style>
</head>

<body class="bg-black text-white flex flex-col h-full">
    <header class="flex items-center justify-between p-4 ">
        <a href="<?= $BASE_URL ?>/index.php" id="logo" class="flex items-center">
            <img src="<?= $BASE_URL ?>/img/elephanteLogo.png" alt="Tiago Tatto - Arte" class="h-20 w-22 m-10 pl-4 ">
        </a>
        <nav class="flex items-center justify-center flex-1">
        <ul id="navbar" class="hidden md:flex gap-4 sm:gap-10 md:gap-20 text-lg md:text-2xl m-5 p-10 hide-sm">
        <?php if (!$is_our_services_page) : ?>
                    <li><a href="<?= $BASE_URL ?>/ourServices.php" class="font-new-rocker uppercase">Our Services</a></li>
                <?php endif; ?>
        <?php if (!$is_our_about_us) : ?>                    
                <li><a href="<?= $BASE_URL ?>/aboutUs.php" class="font-new-rocker uppercase">About Us</a></li>
        <?php endif; ?>

        <?php if(!$is_our_portfolio) : ?>
            <li><a href="<?= $BASE_URL ?>/portfolio.php" class="font-new-rocker uppercase">Portfolio</a></li>
         <?php endif; ?> 
       
            </ul>
        </nav>
        <!-- Ícones que só aparecem em telas menores que 650px -->
        <div class="md:hidden flex items-center gap-4 m-8 p-8 justify-center text-center right-8 mr-10 mt-6 text-white text-3xl h-12 w-12">
    <ul class="flex m-8 p-8">
        <?php if (!$is_our_services_page) : ?>
            <li><a href="<?= $BASE_URL ?>/ourServices.php" class="text-white"><i class="far fa-list-check mr-2"></i></a></li>
        <?php endif; ?>
        <?php if (!$is_our_about_us) : ?>                    
            <li><a href="<?= $BASE_URL ?>/aboutUs.php" class="text-white"><i class="far fa-address-card mr-2"></i></a></li>
        <?php endif; ?>
        <?php if(!$is_our_portfolio) : ?>
            <li><a href="<?= $BASE_URL ?>/portfolio.php" class="text-white"><i class="far fa-camera-retro mr-2"></i></a></li>
        <?php endif; ?> 
        
    </ul>
</div>
    </header>
</body>

</html>





            