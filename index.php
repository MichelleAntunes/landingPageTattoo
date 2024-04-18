<?php
include_once("templates/header.php");
?>

<main class="flex flex-col lg:flex-row">
    <div class="w-full lg:w-2/3 flex flex-col justify-start lg:justify-center items-center gap-8 lg:gap-16 m-5 p-10">
        <div class="text-6xl lg:text-8xl">TattooArt</div>  
        <div class="font-new-rocker text-2xl lg:text-4xl lg:justify-center justify-center text-center items-center">Quality tattoos by an experienced artist. </div>
        <div class="font-new-rocker text-2xl lg:text-4xl lg:justify-center items-center">By a fictitious name</div>
    </div>
    <div class="w-full lg:w-1/3 flex justify-center items-start lg:items-center">
        <img src="<?= $BASE_URL ?>/img/elephantHome.png" alt="Elephante HomePage" class="w-full lg:max-h-screen object-cover">
    </div>
</main>

<?php
include_once("templates/footer.php");
?>
