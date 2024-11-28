document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector(".hamburger");
    const menuContainer = document.querySelector(".menu-container");

    hamburger.addEventListener("click", () => {
        menuContainer.classList.toggle("active");
        hamburger.classList.toggle("open");
    });
});