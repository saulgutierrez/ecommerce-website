let menu = document.querySelector('.menu');
let floatingMenu = document.querySelector('.float-menu');

menu.addEventListener('mouseenter', () => {
    floatingMenu.classList.remove('hidden');
});

floatingMenu.addEventListener('mouseenter', () => {
    floatingMenu.classList.remove('hidden');
});

menu.addEventListener('mouseleave', (event) => {
    if (!floatingMenu.contains(event.relatedTarget)) {
        floatingMenu.classList.add('hidden');
    }
});

floatingMenu.addEventListener('mouseleave', (event) => {
    if (!menu.contains(event.relatedTarget)) {
        floatingMenu.classList.add('hidden');
    }
});
