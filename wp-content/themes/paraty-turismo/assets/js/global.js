
window.onclick = function (event) {
    var modals = document.getElementsByClassName('modal');

    for (var i = 0; i < modals.length; i++) {
        if (modals[i].style.display === 'block' && modals[i] === event.target) {
            modals[i].style.display = 'none';
        }
    }
};