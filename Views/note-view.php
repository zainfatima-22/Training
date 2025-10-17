<?php require "Views/partials/footer.php";?> 

<?php require "Views/partials/header.php";?>
<?php require "Views/partials/navbar.php"?>
<?php require "Views/partials/heading.php";  ?>

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
          
          <!-- Note Title / First Line -->
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 mb-6 border-b-2 border-indigo-100 pb-3">
              <!-- Assuming the first few words or line serve as a title -->
              Note Detail
          </h1>

          <!-- Note Body (Content Area) -->
          <div class="prose prose-indigo max-w-none text-gray-700 leading-relaxed space-y-4">
              <p>
                  <?= nl2br(htmlspecialchars($notes['BODY'])) ?>
              </p>
          </div>

          <!-- Footer/Action Section -->
          <footer class="mt-10 pt-6 border-t border-gray-100 flex justify-end">
             <a href="/note/edit?id=<?= htmlspecialchars($note['ID']) ?>" 
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg 
                       shadow-md text-white bg-indigo-600 hover:bg-indigo-700 
                       focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 
                       transition duration-150 ease-in-out transform hover:scale-105">
                 <!-- Edit Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                 </svg>
                 Edit Note
             </a>
          </footer>
      </div>
       
    </div>     
  </main>

<?php require "Views/partials/footer.php";?>
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
