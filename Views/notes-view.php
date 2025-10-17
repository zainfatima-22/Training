<?php require "Views/partials/header.php";?>
<?php require "Views/partials/navbar.php";?>
<?php require "Views/partials/heading.php"?>

  <main class="bg-gray-50 min-h-screen">
    <div class="mx-auto max-w-4xl px-4 py-12 sm:px-6 lg:px-8">
      
      <!-- Top Section: Heading and Create Button -->
      <div class="flex justify-between items-center mb-8">
          
          <!-- Styled Welcome Heading -->
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">
              Welcome Back!
          </h1>
          
          <!-- Create Note Button -->
          <a href="/notes/create" 
             class="inline-flex items-center px-4 py-2 border border-transparent text-sm 
                    font-medium rounded-lg shadow-md text-white bg-indigo-600 
                    hover:bg-indigo-700 focus:outline-none focus:ring-2 
                    focus:ring-offset-2 focus:ring-indigo-500 
                    transition duration-150 ease-in-out">
              <!-- Plus Icon (lucide-react equivalent SVG) -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
              </svg>
              Create Note
          </a>
      </div>

      <!-- Container for the List - Added Shadow and Rounded Corners -->
      <div class="bg-white p-6 rounded-xl shadow-2xl border border-gray-100">

         <!-- List Structure - Added professional spacing/gap -->
         <ul class="divide-y divide-gray-200 space-y-2">
          <?php 
          // Check if $notes is available and an array before looping (Good practice)
          if (isset($notes) && is_array($notes)) {
              foreach ($notes as $note) : 
          ?>
            
            <!-- List Item FIX: Added 'flex justify-between items-center' to align contents horizontally -->
            <li class="flex justify-between items-center py-3 px-4 hover:bg-indigo-50 transition duration-150 ease-in-out rounded-lg group">
                
                <!-- NOTE LINK: Added 'flex-grow' and 'min-w-0' to occupy max space and allow text truncation -->
                <a class="flex items-center flex-grow min-w-0" 
                   href="/note?id=<?= htmlspecialchars($note['ID']) ?>">
                   
                   <!-- Note Body FIX: Added 'block' to ensure 'truncate' works correctly -->
                   <span class="text-gray-800 text-lg font-medium group-hover:text-indigo-600 truncate block">
                       <?= htmlspecialchars($note['BODY']) ?>
                   </span>
                   
                   <!-- Icon for Visual Feedback (Moved outside the primary text span) -->
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 text-gray-400 group-hover:text-indigo-500 transition-colors duration-150 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M15 5l7 7-7 7" />
                   </svg>
                </a>
                
                <!-- DELETE FORM: Added 'ml-4' for spacing and 'flex-shrink-0' to keep it fixed size -->
                <form method="POST" action="/note" class="ml-4 flex-shrink-0">
                    <!-- Hidden field to identify the note to delete -->
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($note['ID']) ?>">
                    
                    <!-- Delete Button -->
                    <button type="submit" 
                            class="text-red-400 hover:text-red-600 p-2 rounded-full 
                                   hover:bg-red-100 transition duration-150" 
                            onclick="return confirm('Are you sure you want to delete this note?');"
                            title="Delete Note">
                        <!-- Trash Can Icon (SVG) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </form>
            </li>
          <?php 
              endforeach; 
          } else {
          ?>
              <!-- Fallback content if no notes are found -->
              <li class="text-center py-4 text-gray-500 italic">No notes have been created yet.</li>
          <?php
          }
          ?>
         </ul> 
      </div>

    </div>     
  </main>

<?php require "Views/partials/footer.php";?>
