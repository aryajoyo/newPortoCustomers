import './bootstrap';


  document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', function() {
      if (window.scrollY > 0) {
        navbar.classList.add('bg-green-800');
        navbar.classList.remove('bg-transparent');
      } else {
        navbar.classList.remove('bg-green-800');
        navbar.classList.add('bg-transparent');
      }
    });
  });


