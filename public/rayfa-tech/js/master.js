// Menampilkan #myBtn di ketinggian tertentu agar user dapat mengklik button tersebut untuk kembali ke atas
function scrollFunction() {
    const navHeight = document.querySelector("nav").offsetHeight; // mengambil tinggi dari navbar
    const myBtn = document.querySelector("#myBtn");

    if (
        document.body.scrollTop >= navHeight ||
        document.documentElement.scrollTop >= navHeight
    ) {
        myBtn.style.display = "block";
    } else {
        myBtn.style.display = "none";
    }
}
window.onscroll = function () {
    scrollFunction();
};
function scrollToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

window.addEventListener("DOMContentLoaded", () => {
    const element = document.querySelector("nav");
    const element2 = document.querySelector("#sidebar");
    const element3 = document.querySelector("#toggle");
    const target = document.querySelector(".content");

    target.style.marginTop = element.offsetHeight + "px";

    if (document.body.offsetWidth < 600) {
        element2.classList.remove("show");
        target.classList.add("expand");
    } else {
        target.style.marginLeft = element2.offsetWidth + "px";
        element3.style.marginLeft = element2.offsetWidth + "px";
    }
});

window.addEventListener("resize", () => {
    const element = document.querySelector("nav");
    const element2 = document.querySelector("#sidebar");
    const element3 = document.querySelector("#toggle");
    const target = document.querySelector(".content");

    target.style.marginTop = element.offsetHeight + "px";

    if (document.body.offsetWidth < 600) {
        element2.classList.remove("show");
        target.classList.add("expand");
        target.style.marginLeft = "0px";
        element3.style.marginLeft = "0px";
    } else {
        element2.classList.add("show");
        target.classList.remove("expand");
        target.style.marginLeft = element2.offsetWidth + "px";
        element3.style.marginLeft = element2.offsetWidth + "px";
    }
});

function toggleMenu() {
    const element = document.querySelector("#sidebar");
    const element2 = document.querySelector(".content");
    const element3 = document.querySelector("#toggle");
    element.classList.toggle("show");
    element2.classList.toggle("expand");

    if (element2.classList.contains("expand")) {
        element2.style.marginLeft = "0px";
        element3.style.marginLeft = "0px";
    } else {
        element2.style.marginLeft = element.offsetWidth + "px";
        element3.style.marginLeft = element.offsetWidth + "px";
    }
}
