
document.getElementById('sidebar-toggle').addEventListener('click', function() {
const sidebar = document.querySelector('.sidebar');
sidebar.classList.toggle('sidebar-collapsed');

// Force reflow to ensure transition works
void sidebar.offsetWidth;
});

// Mobile menu toggle
document.getElementById('mobile-menu-button').addEventListener('click', function() {
document.querySelector('.sidebar').classList.toggle('sidebar-open');
});

  // Dark mode toggle
  const darkModeToggle = document.getElementById('dark-mode-toggle');
  const darkModeIcon = document.getElementById('dark-mode-icon');
  const lightModeIcon = document.getElementById('light-mode-icon');
  
  if (localStorage.getItem('darkMode') === 'true' || 
      (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
      darkModeIcon.classList.add('hidden');
      lightModeIcon.classList.remove('hidden');
  } else {
      document.documentElement.classList.remove('dark');
      darkModeIcon.classList.remove('hidden');
      lightModeIcon.classList.add('hidden');
  }
  
  darkModeToggle.addEventListener('click', function() {
      document.documentElement.classList.toggle('dark');
      
      if (document.documentElement.classList.contains('dark')) {
          darkModeIcon.classList.add('hidden');
          lightModeIcon.classList.remove('hidden');
          localStorage.setItem('darkMode', 'true');
      } else {
          darkModeIcon.classList.remove('hidden');
          lightModeIcon.classList.add('hidden');
          localStorage.setItem('darkMode', 'false');
      }
  });

  // Adjust circle sizes on resize for better mobile visibility
  function adjustCircles() {
      const circles = document.querySelectorAll('.brand-circle, .brand-accent');
      if (window.innerWidth < 768) {
          circles.forEach(circle => {
              circle.style.opacity = '0.3';
          });
      } else {
          circles.forEach(circle => {
              circle.style.opacity = '1';
          });
      }
  }

  window.addEventListener('resize', adjustCircles);
  adjustCircles(); 