var modal = document.getElementById('myModalSchooner');
var modalHouse = document.getElementById('myModalHouse');
var btn = document.getElementById('myBtnSchooner');
var span = document.getElementById('closeSchooner');

btn.onclick = function () {
    modal.style.display = 'block';
};

span.onclick = function () {
    modal.style.display = 'none';
};

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
    if (event.target == modalHouse) {
        modalHouse.style.display = 'none';
    }
};
