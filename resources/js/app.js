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
  
  function handleScroll() {
    var containers = document.querySelectorAll('.container');
    var screenPosition = window.innerHeight / 1.3; // Sesuaikan dengan posisi layar yang diinginkan
  
    containers.forEach(function(container) {
      var containerPosition = container.getBoundingClientRect().top;
  
      if (containerPosition < screenPosition) {
        container.classList.add('animated');
      }
    });
  }
  
  window.addEventListener('scroll', handleScroll);
  
  // Panggil fungsi handleScroll untuk memeriksa elemen saat halaman dimuat
  handleScroll();
  

