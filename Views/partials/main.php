  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
       <h1>Welcome Back!</h1>
         <p class="mt-4">Hello! <?= $_SESSION['user']['email'] ?? 'Guest' ?> <!-- Zain Fatima -->. This is <b><?= $heading?> </b>page!</p>
         <p> </p>
  </main>