var modalHouse = document.getElementById('myModalHouse');
var btnHouse = document.getElementById('myBtnHouse');
var spanHouse = document.getElementById('closeHouse');

btnHouse.onclick = function () {
    modalHouse.style.display = 'block';
};

spanHouse.onclick = function () {
    modalHouse.style.display = 'none';
};

window.onclick = function (event) {
    console.log(event.target);
    if (event.target == modalHouse) {
        modalHouse.style.display = 'none';
    }
};
