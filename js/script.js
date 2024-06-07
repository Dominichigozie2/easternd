const btnMenu = document.querySelector(".menu-btn");
const smallScreenMenu = document.querySelector("nav");

btnMenu.addEventListener("click", () => {
    // Toggle the 'active' class on smallScreenMenu
    if (smallScreenMenu.classList.contains("active")) {
        smallScreenMenu.classList.remove("active");
        btnMenu.classList.remove("fa-times");
    } else {
        smallScreenMenu.classList.add("active");
        btnMenu.classList.add("fa-times");
    }
});


document.addEventListener('DOMContentLoaded', function() {
    const brandsDropdown = document.querySelector('.dropdown');
    const dropdownMenu = brandsDropdown.querySelector('.dropdown-menu');

    brandsDropdown.addEventListener('click', function() {
        dropdownMenu.classList.toggle('show');

        console.log(dropdownMenu);
    });

    // Close the dropdown menu if the user clicks outside of it
    window.addEventListener('click', function(event) {
        if (!brandsDropdown.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
})









