const scrollElements = document.querySelectorAll('.js-scroll');
const headerText = document.getElementById('header-text');
const headerImg = document.getElementById('header-img');

const elementInView = (el, dividend = 1) => {
    const elementTop = el.getBoundingClientRect().top;

    return (
        elementTop <=
        (window.innerHeight || document.documentElement.clientHeight) / dividend
    );
};

const elementOutofView = el => {
    const elementTop = el.getBoundingClientRect().top;

    return (
        elementTop >
        (window.innerHeight || document.documentElement.clientHeight)
    );
};

const displayScrollElement = element => {
    element.classList.add('scrolled');
};

const hideScrollElement = element => {
    element.classList.remove('scrolled');
};

const handleScrollAnimation = () => {
    scrollElements.forEach(el => {
        if (elementInView(el, 1.25)) {
            displayScrollElement(el);
        } else if (elementOutofView(el)) {
            hideScrollElement(el);
        }
    });
};

window.addEventListener('scroll', () => {
    handleScrollAnimation();
});

window.addEventListener('load', () => {
    headerText.classList.add('scrolled');
    headerImg.classList.add('scrolled');
})
