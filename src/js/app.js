document.addEventListener('COMContentLoaded', function() {
    addEventListeners();
});

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    console.log("Desde navegación responsive");
}