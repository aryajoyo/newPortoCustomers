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

