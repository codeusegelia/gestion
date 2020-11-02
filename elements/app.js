const humberger_icon = document.querySelector('#nav-bar .nav-list .humberger');
const nav_list = document.querySelector('#nav-bar .nav-bar .nav-list');

humberger_icon.addEventListener('click', () => {
    nav_list.classList.toggle('open');
    humberger_icon.classList.toggle('active');
});