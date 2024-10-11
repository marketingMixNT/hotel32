window.addEventListener("scroll", function () {
    const header = document.getElementById("header");
    const headerSecondary = document.getElementById("headerSecondary");

    if (window.innerWidth >= 1280) {
        if (window.scrollY >= 100) {
            header.classList.add("-translate-y-[100%]");
            headerSecondary.classList.remove("-translate-y-[100%]");
        } else {
            header.classList.remove("-translate-y-[100%]");
            headerSecondary.classList.add("-translate-y-[100%]");
        }
    }
});
