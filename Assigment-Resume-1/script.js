document.addEventListener("DOMContentLoaded", () => {
    const links = document.querySelectorAll(".nav-links a");
    links.forEach(a => {
        if (window.location.href.includes(a.getAttribute("href"))) {
            a.classList.add("active");
        }
    });
});