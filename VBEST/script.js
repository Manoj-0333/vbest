document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const ul = document.querySelector('nav ul');

    menuToggle.addEventListener('click', function() {
        ul.classList.toggle('menu-open');
    });
});


window.onscroll = function() {
    var upButton = document.getElementById("up");
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        upButton.style.display = "block";
    } else {
        upButton.style.display = "none";
    }
};
