function setMargin() {
    const element1 = document.querySelector("#sidebar");
    const element2 = document.querySelector("nav");
    let target1 = document.querySelector(".wrapper");
    let target2 = document.querySelector(".content");

    target2.style.marginTop = element2.offsetHeight + "px";
    if (element1.classList.contains("d-none")) {
        target1.style.marginLeft = "0px";
    } else {
        target1.style.marginLeft = element1.offsetWidth + "px";
    }
}

function toggleMenu() {
    const target = document.querySelector("#sidebar");
    target.classList.toggle("d-none");

    setMargin();
}
