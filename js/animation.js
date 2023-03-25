let observer = new IntersectionObserver(callback, { threshold: 0.2 });
let elements = document.querySelectorAll('.anim');

elements.forEach(element => {
    observer.observe(element);
});

function callback(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('anim_on');
            entry.target.classList.remove('anim');
        }
    });
}
