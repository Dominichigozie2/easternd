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














