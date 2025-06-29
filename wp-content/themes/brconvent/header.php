<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BR Convent Public School</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->
    <!-- Alpine.js for FAQ Accordion -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        // Custom Tailwind theme configuration
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        // Sets 'Inter' as the default font
                        sans: ['Inter', 'sans-serif'],
                        montserrat: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        // Custom colors to match the screenshot
                        'school-blue': '#4A5568', // A muted blue/gray
                        'school-dark': '#2D3748', // A darker gray for text
                        'school-gold': '#d69e2e',
                        'school-light-gray': '#f7fafc',
                        'school-dark-text': '#2d3748',
                        'primary-blue': '#003366',
                        'accent-gold': '#FFD700',
                        'accent-green': '#A9D8B8',
                        'background-gray': '#F2F2F2',
                        'dark-text': '#2d3748',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background-gray">

    <!-- 1. Header Section -->
    <header class="bg-white sticky top-0 z-50 shadow-md">
      <div class="bg-gray-100 border-b border-gray-200">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between items-center h-10">
            <div class="flex items-center space-x-6 text-sm">
              <a href="#" class="text-gray-600 hover:text-primary-blue transition-colors duration-300 font-medium">Parent Portal</a>
              <a href="#" class="text-gray-600 hover:text-primary-blue transition-colors duration-300 font-medium">Calendar</a>
            </div>
            <div class="flex items-center space-x-4">
              <a href="#" class="text-gray-500 hover:text-primary-blue transition-colors duration-300"><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg></a>
              <a href="#" class="text-gray-500 hover:text-primary-blue transition-colors duration-300"><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.012-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.08 2.525c.636-.247 1.363-.416 2.427-.465C9.53 2.013 9.884 2 12.315 2zm-1.161 1.043c-1.049.046-1.666.21-2.203.411a3.87 3.87 0 00-1.38 1.033A3.87 3.87 0 004.53 5.85c-.201.537-.365 1.154-.411 2.203-.046 1.024-.058 1.357-.058 3.77s.012 2.746.058 3.77c.046 1.049.21 1.666.411 2.203a3.87 3.87 0 001.033 1.38 3.87 3.87 0 001.38 1.033c.537.201 1.154.365 2.203.411 1.024.046 1.357.058 3.77.058s2.746-.012 3.77-.058c1.049-.046 1.666-.21 2.203-.411a3.87 3.87 0 001.38-1.033 3.87 3.87 0 001.033-1.38c.201-.537.365-1.154.411-2.203.046-1.024.058-1.357-.058-3.77s-.012-2.746-.058-3.77c-.046-1.049-.21-1.666-.411-2.203a3.87 3.87 0 00-1.033-1.38 3.87 3.87 0 00-1.38-1.033c-.537-.201-1.154-.365-2.203-.411-1.024-.046-1.357-.058-3.77-.058s-2.746.012-3.77.058zm1.161 9.098a3.743 3.743 0 100-7.486 3.743 3.743 0 000 7.486zM12 14.25a2.25 2.25 0 110-4.5 2.25 2.25 0 010 4.5zm5.003-7.24a.87.87 0 100-1.74.87.87 0 000 1.74z" clip-rule="evenodd" /></svg></a>
              <a href="#" class="text-gray-500 hover:text-primary-blue transition-colors duration-300"><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg></a>
            </div>
          </div>
        </div>
      </div>
      <nav class="bg-white" x-data="{ open: false }">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between items-center h-20">
             <a href="<?php echo home_url(); ?>" class="flex items-center space-x-3">
                        <img class="h-14 w-auto" src="<?php echo esc_url('/wp-content/uploads/2025/06/brschool.png'); ?>" alt="BR Convent Public School Logo">
                    </a>

                    <div class="hidden md:flex items-center space-x-10">
                        <?php
                        // Define the class strings for active and inactive states for clean code
                        $active_classes = 'text-school-gold font-bold border-b-2 border-school-gold pb-1 text-base';
                        $inactive_classes = 'text-gray-700 font-medium border-b-2 border-transparent hover:text-school-gold hover:border-school-gold pb-1 text-base transition-colors duration-200';
                        ?>

                        <a href="<?php echo home_url(); ?>" class="<?php echo (is_front_page()) ? $active_classes : $inactive_classes; ?>">HOME</a>

                        <a href="<?php echo home_url('/about'); ?>" class="<?php echo (is_page('about')) ? $active_classes : $inactive_classes; ?>">ABOUT US</a>

                        <a href="<?php echo home_url('/academics'); ?>" class="<?php echo (is_page('academics')) ? $active_classes : $inactive_classes; ?>">ACADEMICS</a>

                        <a href="<?php echo home_url('/admissions'); ?>" class="<?php echo (is_page('admissions')) ? $active_classes : $inactive_classes; ?>">ADMISSIONS</a>
                    </div>

           
            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
              <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-primary-blue focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-blue" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg x-show="!open" class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                <svg x-show="open" x-cloak class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
              </button>
            </div>
          </div>
        </div>
        <!-- Mobile Menu, show/hide based on menu state. -->
        <div x-show="open" x-cloak @click.away="open = false" class="md:hidden" id="mobile-menu" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="<?php echo home_url(); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-primary-blue">HOME</a>
                <a href="<?php echo home_url('/about'); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-primary-blue">ABOUT US</a>
                <a href="<?php echo home_url('/academics'); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-primary-blue">ACADEMICS</a>
                <a href="<?php echo home_url('/admissions'); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-accent-gold bg-gray-100">ADMISSIONS</a>
            </div>
        </div>
      </nav>
    </header>