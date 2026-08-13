const btnMenu = document.querySelector(".menu-btn");
const smallScreenMenu = document.querySelector("nav");

btnMenu.addEventListener("click", () => {
    // Toggle the 'active' class on smallScreenMenu
    if (smallScreenMenu.classList.contains("active")) {
        smallScreenMenu.classList.remove("active");
    } else {
        smallScreenMenu.classList.add("active");
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const brandsDropdown = document.querySelector('.dropdown');
    const dropdownMenu = brandsDropdown.querySelector('.dropdown-menu');

    brandsDropdown.addEventListener('click', function () {
        dropdownMenu.classList.toggle('show');

        console.log(dropdownMenu);
    });

    // Close the dropdown menu if the user clicks outside of it
    window.addEventListener('click', function (event) {
        if (!brandsDropdown.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
})






const navLinkEls = document.querySelectorAll(".list-items a");
const windowHref = window.location.href; // Full URL including query parameters

navLinkEls.forEach(navLinkEl => {
    // Check if the full URL matches the href of the link
    if (navLinkEl.href === windowHref) {
        navLinkEl.classList.add("active");
    }
});



const actionBtn = document.querySelector(".btn-action");

actionBtn.addEventListener("click", () => {
    const modalContact = document.querySelector(".form");

    modalContact.classList.toggle("active");
    actionBtn.innerHTML = modalContact.classList.contains("active") ? "Close" : "Contact Us";
});