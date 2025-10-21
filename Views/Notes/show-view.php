<?php require base_path("Views/partials/header.php");?>
<?php require base_path("Views/partials/navbar.php")?>
<?php require base_path("Views/partials/heading.php");  ?>

  <main class="bg-gray-50 min-h-screen pt-12">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">

      <!-- Back Link Section -->
      <p class="mb-6">
        <a href="/notes" class="text-indigo-600 hover:text-indigo-800 transition duration-150 font-medium flex items-center group">
            <!-- Left Arrow Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 group-hover:-translate-x-1 transition duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to All Notes
        </a>
      </p>

      <!-- Note Detail Card - Stunning Aesthetic -->
      <div class="bg-white p-8 sm:p-10 rounded-2xl shadow-2xl border border-gray-200 
                  transform transition duration-500 hover:shadow-indigo-300/40 animate-fade-in">
          
          <!-- Note Title -->
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 mb-6 border-b-2 border-indigo-100 pb-3">
              Note Detail (ID: <?= htmlspecialchars($note['ID']) ?>)
          </h1>
          
          <!-- Error Display Logic (if any errors were set in the controller) -->
          <?php if (isset($errors) && count($errors) > 0) : ?>
              <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl relative mb-6" role="alert">
                  <strong class="font-bold">Validation Error:</strong>
                  <ul class="mt-2 list-disc list-inside">
                      <?php foreach ($errors as $error) : ?>
                          <li><?= htmlspecialchars($error) ?></li>
                      <?php endforeach; ?>
                  </ul>
              </div>
          <?php endif; ?>

          <!-- View Toggle Logic: Check for ?edit=true in the URL -->
          <?php if (isset($_GET['edit'])) : ?>

              <!-- === 1. EDIT MODE: SHOW EDITABLE FORM === -->
              <form method="POST" action="/note?id=<?= htmlspecialchars($note['ID']) ?>&edit=true" class="space-y-6">
                  
                  <!-- Spoof PATCH method for updating -->
                  <input type="hidden" name="_method" value="PATCH">
                  <!-- Hidden ID field -->
                  <input type="hidden" name="id" value="<?= htmlspecialchars($note['ID']) ?>">
                  
                  <div>
                      <label for="body" class="block text-lg font-medium text-gray-700 mb-2">
                          Edit Note Body
                      </label>
                      <textarea 
                          id="body" 
                          name="body" 
                          rows="10" 
                          class="mt-1 block w-full border border-gray-300 rounded-xl shadow-lg 
                                 focus:border-indigo-500 focus:ring-indigo-500 p-4"
                          required
                      ><?= htmlspecialchars($body) ?></textarea>
                      <!-- Display specific field error -->
                      <?php if (isset($errors['body'])) : ?>
                          <p class="text-xs text-red-500 mt-1"><?= htmlspecialchars($errors['body']) ?></p>
                      <?php endif; ?>
                  </div>

                  <!-- Action Buttons -->
                  <div class="flex justify-end pt-4 space-x-4">
                      <!-- DELETE BUTTON -->
                      <button type="button" 
                              class="inline-flex items-center px-4 py-2 border border-red-300 rounded-lg shadow-sm text-sm font-medium text-red-600 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-150"
                              onclick="document.getElementById('delete-form').submit();"
                              title="Delete Note">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>
                          Delete
                      </button>
                      
                      <!-- CANCEL BUTTON -->
                      <a href="/note?id=<?= htmlspecialchars($note['ID']) ?>" 
                         class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-100 transition duration-150">
                          Cancel
                      </a>
                      
                      <!-- SAVE BUTTON -->
                      <button type="submit" 
                              class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-xl 
                                     shadow-md text-white bg-indigo-600 hover:bg-indigo-700 transition duration-200">
                          Save Changes
                      </button>
                  </div>
              </form>
          
          <?php else : ?>

              <!-- === 2. READ MODE: SHOW STATIC TEXT === -->
              <div class="prose prose-indigo max-w-none text-gray-700 leading-relaxed space-y-4">
                  <p>
                      <?= nl2br(htmlspecialchars($note['BODY'])) ?>
                  </p>
              </div>

              <!-- Footer/Action Section -->
              <footer class="mt-10 pt-6 border-t border-gray-100 flex justify-between items-center">
                  <!-- Hidden Delete Form (Must live outside the edit form!) -->
                  <form id="delete-form" method="POST" onsubmit="return confirm('Are you sure you want to delete this note?');" class="flex-shrink-0">
                      <input type="hidden" name="_method" value="DELETE"> 
                      <input type="hidden" name="id" value="<?= htmlspecialchars($note['ID']) ?>">
                  </form>
                  
                  <!-- Edit Link (sends user to edit mode) -->
                  <a href="/note?id=<?= htmlspecialchars($note['ID']) ?>&edit=true" 
                     class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg 
                            shadow-md text-white bg-indigo-600 hover:bg-indigo-700 transition duration-150 transform hover:scale-105">
                      <!-- Edit Icon -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                      </svg>
                      Edit Note
                  </a>
              </footer>

          <?php endif; ?>
      </div>
       
    </div>     
  </main>


<?php require base_path("Views/partials/footer.php");?> 
<style>
/* Simple keyframes for a subtle entrance animation */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.animate-fade-in {
    animation: fadeIn 0.5s ease-out both;
}
</style>
