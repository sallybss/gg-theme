document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector(".hamburger");
    const menuContainer = document.querySelector(".menu-container");

    hamburger.addEventListener("click", () => {
        menuContainer.classList.toggle("active"); // Toggle visibility of the menu
        hamburger.classList.toggle("open"); // Optional: toggle hamburger animation
    });
});