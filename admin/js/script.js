// This script is optional, it just toggles a class to indicate if the dropdown is open or closed
document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('ul li');
    dropdowns.forEach(function(dropdown) {
      dropdown.addEventListener('click', function() {
        dropdown.classList.toggle('open');
      });
    });
  });
  