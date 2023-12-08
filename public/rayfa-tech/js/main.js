// Menampilkan #myBtn di ketinggian tertentu agar user dapat mengklik button tersebut untuk kembali ke atas
const navHeight = document.querySelector("nav").offsetHeight; // mengambil tinggi dari navbar
function scrollFunction() {
    const myBtn = document.querySelector("#myBtn");
    const partScroll = document.querySelector("main").offsetTop; // mengambil jarak dari paling atas ke tag main
    const scrollWhen = partScroll - navHeight;

    if (
        document.body.scrollTop > scrollWhen ||
        document.documentElement.scrollTop > scrollWhen
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

// Handling show and close navbar
var isOpen = false;
const backdrop = document.querySelector("#backdrop");
const navShow = document.querySelector("#navbarNav");

function openNav() {
    toggle2.classList.toggle("d-none");
    toggle1.classList.toggle("d-none");
    backdrop.style.display = "block";
    navShow.classList.add("show");
    isOpen = true;
}

function closeNav() {
    toggle2.classList.toggle("d-none");
    toggle1.classList.toggle("d-none");
    backdrop.style.display = "none";
    navShow.classList.remove("show");
    isOpen = false;
}

function toggleMenu() {
    const toggle1 = document.querySelector("#toggle1");
    const toggle2 = document.querySelector("#toggle2");

    if (isOpen) {
        closeNav();
    } else {
        openNav();
    }
}

// Close navbar ketika user sudah memilih menu
listMenu = document.querySelectorAll("nav ul li a");
listMenu.forEach((item) => {
    item.addEventListener("click", function (e) {
        if (item.getAttribute("href") != "/rayfatech/login") {
            e.preventDefault();
        }
        closeNav();

        const targetId = item.getAttribute("href");
        const targetElement = document.querySelector(targetId);
        const targetPosition = targetElement.offsetTop - navHeight;

        window.scrollTo({
            top: targetPosition,
        });
    });
});
