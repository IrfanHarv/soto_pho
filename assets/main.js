document.addEventListener("DOMContentLoaded", () => {
    let menu = document.querySelector("#menu-icon");
    let navbar = document.querySelector(".navbar");

    const menuItems = document.querySelectorAll('.navbar li a');
    menuItems.forEach(item => {
        item.addEventListener('click', (event) => {
            // Remove active class from all menu items
            menuItems.forEach(item => {
                item.classList.remove('active');
            });
            // Add active class to the clicked menu item
            event.target.classList.add('active');
        });
    });

    menu.addEventListener("click", function () {
        navbar.classList.toggle("active");
    });

    window.onscroll = () => {
        navbar.classList.remove("active");
    };
});