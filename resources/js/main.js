// Function that defines the menu elements and toggles a class
const menuSlide = () => {
    let menuButton = document.getElementById('menu-button');
    let listItems = document.querySelector('.list-items');

    menuButton.addEventListener("click", ()=> {
        listItems.classList.toggle('menu-active');
        menuButton.classList.toggle('change');
    });

    listItems.addEventListener("click", () => {
        listItems.classList.toggle('menu-active');
        menuButton.classList.toggle('change');
    });
}
menuSlide();


let homeButton = document.querySelector(".home");
homeButton.addEventListener("click", topFunction);

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}