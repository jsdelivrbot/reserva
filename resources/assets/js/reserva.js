$("#unete-id").on("click", showDropDownMenu);
$("#modal").iziModal();

$(document).on('click', '.trigger', function (event) {
    event.preventDefault();
    // $('#modal').iziModal('setZindex', 99999);
    // $('#modal').iziModal('open', { zindex: 99999 });
    $('#modal').iziModal('open');
});


function showDropDownMenu() {
    $("#nav-bar-menu-id").collapse("toggle");
};