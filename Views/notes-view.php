<?php require "Views/partials/header.php";?>
<?php require "Views/partials/navbar.php";?>
<?php require "Views/partials/heading.php"?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
       <h1>Welcome Back!</h1><br>
         <?php foreach ($notes as $note) : ?>
            <li>
                <a class = "text-blue-500 hover:underline" href="/note?id=<?= $note['ID'] ?>">
                    <?= $note['BODY'] ?>
                </a>
            </li>
         <?php endforeach; ?>
    </div>     
  </main>

<?php require "Views/partials/footer.php";?> 