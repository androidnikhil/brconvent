  <!-- Hero Slider -->
  <div class="hero-slider">
      <div>
          <img class="w-full h-[auto] object-cover" src="/wp-content/uploads/2025/06/school_function.png" alt="Modern school classroom with students">
      </div>
      <div>
          <img class="w-full h-[auto] object-cover" src="/wp-content/uploads/2025/06/earth_day.png" alt="Children playing on the school playground">
      </div>
      <div>
          <img class="w-full h-[auto] object-cover" src="/wp-content/uploads/2025/06/essay_competition.png" alt="Students conducting an experiment in a science lab">
      </div>
  </div>
  <script>
      // Initialize Slick Slider
      jQuery(document).ready(function() {
          jQuery('.hero-slider').slick({
              dots: true, // Show dots for navigation on larger screens
              arrows: false, // Hide next/prev arrows
              infinite: true, // Loop the slider
              speed: 500, // Transition speed in ms
              fade: true, // Use a fade effect instead of a slide
              cssEase: 'linear', // Easing for the fade effect
              autoplay: true, // Enable autoplay
              autoplaySpeed: 3000, // Time between slides in ms (3 seconds)
              responsive: [{
                  breakpoint: 768, // This is the breakpoint for mobile devices
                  settings: {
                      dots: false // This will hide the dots on screens smaller than 768px
                  }
              }]
          });
      });
  </script>
  <style>
      /* Custom styles for slick dots */
      .hero-slider .slick-dots li button:before {
          font-size: 12px;
          color: white;
          opacity: 0.75;
      }

      .hero-slider .slick-dots li.slick-active button:before {
          opacity: 1;
          color: white;
      }

      .hero-slider .slick-dots {
          bottom: 25px;
      }
  </style>