const burger = document.querySelector("#burger");
const header = document.querySelector("header");
const nav = document.querySelector("#nav");
const filter = document.querySelector("#filter");

document.querySelectorAll('#burger, #filter, #menuFooter, .link_js_header').forEach((element) => {
    element.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
        [header, burger, nav, filter].forEach(el => el.classList.toggle('on'));
    });
});
