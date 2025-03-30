// Add event listener to toggle sidebar on mobile
document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.querySelector(".ri-menu-line").parentElement;
    const sidebar = document.querySelector(".md\\:flex-shrink-0");

    menuButton.addEventListener("click", function () {
        sidebar.classList.toggle("hidden");
        sidebar.classList.toggle("block");
    });

    // Dark mode toggle functionality
    const themeToggleBtn = document.getElementById("theme-toggle");

    // Check for saved theme preference or use system preference
    if (
        localStorage.getItem("color-theme") === "dark" ||
        (!localStorage.getItem("color-theme") &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        document.documentElement.classList.add("dark");
    } else {
        document.documentElement.classList.remove("dark");
    }

    // Toggle theme on button click
    themeToggleBtn.addEventListener("click", function () {
        // Toggle dark class on html element
        document.documentElement.classList.toggle("dark");

        // Update localStorage
        if (document.documentElement.classList.contains("dark")) {
            localStorage.setItem("color-theme", "dark");
        } else {
            localStorage.setItem("color-theme", "light");
        }
    });
});
