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




// the video popup script

// JavaScript
document.addEventListener("DOMContentLoaded", function() {
    var playButton = document.querySelector(".play");
    var modal = document.getElementById("video-modal");
    var closeButton = modal.querySelector(".close");
    var video = modal.querySelector("video");

    playButton.addEventListener("click", function() {
        modal.style.display = "block";
    });

    closeButton.addEventListener("click", function() {
        modal.style.display = "none";
        video.pause();
    });

    window.addEventListener("click", function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            video.pause();
        }
    });
});






