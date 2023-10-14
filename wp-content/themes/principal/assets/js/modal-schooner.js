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
