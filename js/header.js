const burger = document.querySelector("#burger")
const nav = document.querySelector("#nav")
const filter = document.querySelector("#filter")

document.querySelectorAll('#burger, #filter').forEach((element) => {
    element.addEventListener("click", () => {
        burger.classList.toggle('on');
        nav.classList.toggle('on');
        filter.classList.toggle('on');
    });
});