<?php
  include_once("helpers/url.php");
  include_once("templates/header.php");
  include_once("data/portfolioData.php");

  // Set the maximum number of items per page
  $items_per_page = 20;

  // Get the total number of items
  $total_items = count($portolio);

  // Get the current page number of the URL, or default to 1 if not set
  $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

  // Calculate the initial index of the item on the current page
  $initial_index = ($current_page - 1) * $items_per_page;

  // Get the items for the current page
  $page_items = array_slice($portolio, $initial_index, $items_per_page);
?>

<main class="container mx-auto px-4 py-8">
  <div class="font-new-rocker uppercase text-center text-3xl mb-20">Portfolio</div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    <?php foreach($page_items as $item): ?>
      <div class="flex flex-col items-center group">
        <img src="<?= $BASE_URL ?>/img/<?= $item['img'] ?>" alt="<?= $item['description'] ?>" class="w-full h-64 object-cover mb-2 transition duration-300 ease-in-out transform hover:scale-105">

        <h2 class="text-center text-lg sm:text-xl md:text-lg lg:text-base"><?= $item['description'] ?></h2>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Add pagination links -->
  <div class="flex justify-center mt-8">
    <?php for ($i = 1; $i <= ceil($total_items / $items_per_page); $i++): ?>
      <a href="?page=<?= $i ?>" class="px-4 py-2 mx-2 <?= $current_page == $i ? 'bg-gray-900 text-white' : 'bg-gray-200 text-gray-800' ?> rounded"><?= $i ?></a>
    <?php endfor; ?>
  </div>
</main>

<?php
  include_once("templates/footer.php");
?>
