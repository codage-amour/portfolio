const hamburgerIcon = document.getElementById("ham");
const menuContainer = document.getElementById("hamburger-container");
const menu = document.getElementById("roll");

hamburgerIcon.addEventListener("click", () => {
    if (menu.style.display === "block") {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
});
document.addEventListener("click", (event) => {
    if (!menuContainer.contains(event.target)) {
        menu.style.display = "none";
    }
});
