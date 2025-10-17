<?php require "Views/partials/header.php";?>
<?php require "Views/partials/navbar.php";?>
<?php require "Views/partials/heading.php"?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
       <p class="text-gray-600">
        <a href="/notes" class="text-blue-500 hover:underline">
            &larr; Back to Notes
        </a>
       </p><br><br>
          <li>
              <?= $notes['BODY'] ?>
          </li>
    </div>     
  </main>

<?php require "Views/partials/footer.php";?> 