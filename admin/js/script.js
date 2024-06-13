// This script is optional, it just toggles a class to indicate if the dropdown is open or closed
document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('ul li');
    dropdowns.forEach(function(dropdown) {
      dropdown.addEventListener('click', function() {
        dropdown.classList.toggle('open');
      });
    });
  });

  

const navBar= document.querySelector(".fa-bars");

navBar.addEventListener("click", ()=>{
    const navMenu = document.querySelector(".nav");
    const navClose = document.querySelector(".fa-times");

    navMenu.classList.add("active");
    navClose.addEventListener("click", ()=>{
      navMenu.classList.remove("active");
    });
});