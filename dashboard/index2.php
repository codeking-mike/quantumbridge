<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Dashboard</title>
    <link rel="stylesheet" href="../output.css">
</head>
<body>
    <div class="wrapper bg-indigo-950">

     <!-- Header -->
     <header class="bg-white shadow-md" x-data="{ menuOpen: false, profileOpen: false }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4 max-w-64">

        <!-- Hamburger Menu for Mobile -->
        <div class="flex items-center space-x-4 w-64">
          <!-- Hamburger Menu Button -->
          <button 
            class="block lg:hidden p-2 rounded-md text-gray-600 hover:text-gray-900 focus:outline-none"
            @click="menuOpen = !menuOpen"
            :aria-expanded="menuOpen">
            <svg 
              class="h-6 w-6" 
              xmlns="http://www.w3.org/2000/svg" 
              fill="none" 
              viewBox="0 0 24 24" 
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>

          <!-- Site Logo -->
          <a href="#" class="text-lg font-bold text-gray-800">Dashboard</a>
        </div>

        <!-- Navigation Links -->
        <nav class="hidden lg:flex space-x-6 w-full">
          <a href="#" class="text-gray-600 hover:text-gray-900">Home</a>
          <a href="#" class="text-gray-600 hover:text-gray-900">About</a>
          <a href="#" class="text-gray-600 hover:text-gray-900">Contact</a>
        </nav>

        <!-- Profile Settings -->
        <div class="relative w-64">
          <!-- Profile Avatar Button -->
          <button 
            class="flex items-center focus:outline-none" 
            @click="profileOpen = !profileOpen">
            <img 
              src="https://via.placeholder.com/40" 
              alt="Profile Avatar" 
              class="h-10 w-10 rounded-full border border-gray-300">
          </button>

          <!-- Profile Dropdown -->
          <div 
            x-show="profileOpen" 
            @click.outside="profileOpen = false" 
            x-transition 
            class="absolute right-0 mt-1 w-64 bg-white border border-gray-200 rounded-md shadow-lg py-1 z-20">
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Profile</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Change Password</a>
            <div class="border-t border-gray-200"></div>
            <a href="logout.php" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Logout</a>
          </div>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <div x-show="menuOpen" x-transition class="lg:hidden mt-4 space-y-2">
        <nav>
          <a href="#" class="block text-gray-600 hover:text-gray-900">Home</a>
          <a href="#" class="block text-gray-600 hover:text-gray-900">About</a>
          <a href="#" class="block text-gray-600 hover:text-gray-900">Contact</a>
        </nav>
      </div>
    </div>
  </header>


    </div>
    


<script src="../assets/js/alpine.min.js"></script>
</body>
</html>