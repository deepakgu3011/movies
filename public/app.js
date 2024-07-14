document.addEventListener('DOMContentLoaded', function () {
    const nav = document.getElementById('navs');
    const menu = document.getElementById('menu');
    const hide = document.getElementById('hide');
    const navs = document.getElementById('nav');
    const ser = document.getElementById('search');

    function show() {
        nav.style.display = 'flex';
        nav.style.flexDirection = 'column';
        navs.style.flexDirection = 'column';
        ser.style.flexDirection = 'column';
        hide.style.display = 'block';
        menu.style.display = 'none';
    }

    function hideNav() {
        nav.style.display = 'none';
        navs.style.flexDirection = 'row';
        hide.style.display = 'none';
        menu.style.display = 'block';
    }

    menu.addEventListener('click', show);
    hide.addEventListener('click', hideNav);

    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    };
    
});
