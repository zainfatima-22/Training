<?php require "Views/partials/header.php";?>
<?php require "Views/partials/navbar.php"?>
<?php require "Views/partials/heading.php";  ?>

  <main class="bg-gray-50 min-h-screen">
    <div class="mx-auto max-w-2xl px-4 py-12 sm:px-6 lg:px-8">
      
      <!-- Card Container for the Form -->
      <div class="bg-white p-8 rounded-2xl shadow-2xl border border-indigo-100/50 
                  transform transition duration-500 hover:shadow-indigo-300/50">
          
          <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 mb-6 border-b pb-3">
              Jot Down a New Note
          </h1>

          <!-- Error Display Logic -->
          <?php if (isset($errors) && count($errors) > 0) : ?>
              <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl relative mb-6" role="alert">
                  <strong class="font-bold">Oops!</strong>
                  <span class="block sm:inline">Please fix the following issues:</span>
                  <ul class="mt-2 list-disc list-inside">
                      <?php foreach ($errors as $error) : ?>
                          <li><?= htmlspecialchars($error) ?></li>
                      <?php endforeach; ?>
                  </ul>
              </div>
          <?php endif; ?>

          <!-- The Note Creation Form -->
          <form method="POST" class="space-y-6">
              
              <!-- Hidden input for context (e.g., user ID or CSRF token) -->
              <input type="hidden" name="user_id" value="1"> 
              
              <div>
                  <label for="body" class="block text-lg font-medium text-gray-700 mb-2">
                      Your Note Body
                  </label>
                  <textarea 
                      id="body" 
                      name="body" 
                      rows="8" 
                      placeholder="Start typing your thoughts here..."
                      class="mt-1 block w-full border border-gray-300 rounded-xl shadow-lg 
                             focus:border-indigo-500 focus:ring-indigo-500 p-4 
                             transition duration-300 ease-in-out hover:border-indigo-400"
                      required
                  ><?= isset($_POST['body']) ? htmlspecialchars($_POST['body']) : '' ?></textarea>
                  <!-- Optional: Display specific field error 
                  <?php if (isset($errors['body'])) : ?>
                      <p class="text-xs text-red-500 mt-1"><?= htmlspecialchars($errors['body']) ?></p>
                  <?php endif; ?>
                  -->
              </div>

              <!-- Action Buttons -->
              <div class="flex justify-end pt-4">
                  <a href="/notes" class="mr-4 inline-flex items-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150">
                      Cancel
                  </a>
                  
                  <!-- Submit Button with Animation -->
                  <button type="submit" 
                          class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-xl 
                                 shadow-xl text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 
                                 focus:ring-offset-2 focus:ring-indigo-500 active:bg-indigo-800 
                                 transform hover:scale-[1.02] active:scale-[0.98] transition-all duration-200">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                      </svg>
                      Save Note
                  </button>
              </div>

          </form>
      </div>
       
    </div>     
  </main>

 <?php require "Views/partials/footer.php";?>