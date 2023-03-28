const burger = document.querySelector("#burger");
const nav = document.querySelector("#nav");
const filter = document.querySelector("#filter");


document.querySelectorAll('#burger, #filter, #menuFooter').forEach((element) => {
    element.addEventListener("click", () => {
        /*if (window.innerWidth > 1200 ) {
            if (burger.classList.contains('on')){
                document.querySelector("#body").classList.add('on');
            } else {
                document.querySelector("#body").classList.remove('on');
            }
        }
*/
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

        burger.classList.toggle('on');
        nav.classList.toggle('on');
        filter.classList.toggle('on');
    });
});

