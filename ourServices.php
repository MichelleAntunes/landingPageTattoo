<?php
  include_once("helpers/url.php");
  include_once("templates/header.php");
  include_once("data/ourServicesData.php");
?>

<main class="container mx-auto px-4 py-8">
  <div class="font-new-rocker uppercase text-center text-3xl mb-20">Our Services</div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php foreach($services as $service): ?>
      <div class="bg-white rounded-lg shadow-md p-6 flex flex-col justify-between transition duration-300 hover:shadow-lg">
        <div>
          <h2 class="text-2xl text-center text-gray-700 font-bold mb-4"><?= $service['title'] ?></h2>
          <p class="text-gray-700 mb-4"><?= $service['description'] ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php
  include_once("templates/footer.php");
?>
