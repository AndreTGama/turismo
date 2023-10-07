var modalHouse = document.getElementById('myModalHouse');
var btn = document.getElementById('myBtnSchooner');
var span = document.getElementById('closeSchooner');

function openModalSchooner(id) {
    var modal = document.getElementById(`myModalSchooner-${id}`);
    modal.style.display = 'block';

}

function closeModalSchooner(id) {
    var modal = document.getElementById(`myModalSchooner-${id}`);
    modal.style.display = 'none';
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
    if (event.target == modalHouse) {
        modalHouse.style.display = 'none';
    }
};
