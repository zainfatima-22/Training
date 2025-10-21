<?php require base_path("Views/partials/header.php");?>
<?php require base_path("Views/partials/navbar.php")?>
<?php require base_path("Views/partials/heading.php");  ?>

<main class="bg-gray-50 min-h-screen">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="mx-auto h-10 w-auto" />
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-black">Login to Your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="/sessions" method="POST" class="space-y-6">
      <div>
        <label for="email" class="block text-sm/6 font-medium text-black-100">Email address</label>
        <div class="mt-2">
          <input id="email" type="email" name="email" required autocomplete="email" class="block w-full rounded-md bg-indigo/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" 
          placeholder="Enter your Email Address" />
          <?php if (isset($errors['email'])) : ?>
                <p class="text-xs text-red-500 mt-1"><?= $errors['email'] ?></p>
          <?php endif; ?>
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-black-100">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-indigo/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" 
          placeholder="Enter your Password" />
          <?php if (isset($errors['password'])) : ?>
                <p class="text-xs text-red-500 mt-1"><?= htmlspecialchars($errors['password']) ?></p>
          <?php endif; ?>
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Login</button>
      </div>
    </form>

  </div>
</div>
    
</main>

<?php require base_path("Views/partials/footer.php");  ?>