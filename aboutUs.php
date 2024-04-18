<?php
  include_once("helpers/url.php");
?>

<?php
  include_once("templates/header.php");
?>

<main class="container mx-auto px-4 py-8">
  <div class="font-new-rocker uppercase text-center text-3xl mb-20">About Us</div>

  <div class="flex flex-col md:flex-row items-center justify-center mb-8">
    <img src="<?= $BASE_URL ?>/img/tatuadorImg.jpg" alt="Photo tattooist" class="rounded-full w-40 h-40  md:h-60 md:w-60 md:mr-8">
    <p class="text-white text-lg md:text-2xl mt-4 md:mt-0 md:w-3/4 md:text-justify md:mx-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi interdum neque id nunc laoreet, eu vehicula purus condimentum. Nulla nec odio non magna luctus tristique sit amet vitae libero. Proin nec quam at ipsum placerat fringilla. Duis vestibulum gravida metus nec vestibulum. Duis ut fringilla nisi. Nulla facilisi. Donec id convallis quam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam rerum delectus, adipisci, dolorum facilis eum rem hic accusantium quasi debitis non tenetur doloremque inventore in tempore, molestiae quas cumque ratione! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere illum magni rerum impedit cumque soluta nemo sequi quam necessitatibus error, modi totam repellat ipsum eligendi earum iusto velit. Dignissimos, possimus!</p>
  </div>

  <div class="flex flex-col gap-10 mb-10 md:mb-44">
    <p class="text-white text-lg md:text-2xl m-10 mb-10">We're just a click away! Use the links below to contact us:</p>

    <div class="flex gap-10 justify-center">
  <a href="#" class="text-white w-12 h-12 hover:text-blue-500 flex items-center justify-center">
    <i class="fab fa-whatsapp fa-lg md:fa-4x"></i>
  </a>
  <a href="#" class="text-white w-12 h-12 hover:text-blue-500 flex items-center justify-center">
    <i class="fab fa-instagram fa-lg md:fa-4x"></i>
  </a>
  <a href="#" class="text-white w-12 h-12 hover:text-blue-500 flex items-center justify-center">
    <i class="fab fa-facebook fa-lg md:fa-4x"></i>
  </a>
  <a href="#" class="text-white w-12 h-12 hover:text-blue-500 flex items-center justify-center">
    <i class="far fa-envelope fa-lg md:fa-4x"></i>
  </a>
</div>

</main>

<?php
  include_once("templates/footer.php");
?>
