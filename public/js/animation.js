document.addEventListener('DOMContentLoaded', function() {
  var animatedDiv = document.getElementById('animatedDiv');

  function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function checkVisibility() {
    if (isInViewport(animatedDiv)) {
      animatedDiv.classList.add('opacity-100');
      window.removeEventListener('scroll', checkVisibility);
    }
  }

  window.addEventListener('scroll', checkVisibility);
  checkVisibility(); // Initial check on page load
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


