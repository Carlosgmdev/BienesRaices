document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
    darkMode();
})

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive)
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}

function darkMode() {
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    (prefiereDarkMode.matches)
        ?document.body.classList.add('dark-mode-on')
        :document.body.classList.remove('dark-mode-on');
    prefiereDarkMode.addEventListener('change',function() {
        (prefiereDarkMode.matches)
        ?document.body.classList.add('dark-mode-on')
        :document.body.classList.remove('dark-mode-on');
    })
    const darkModeBtn = document.querySelector('.dark-mode');
    darkModeBtn.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode-on');
    })
}