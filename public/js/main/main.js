$(function(){
});

function open_sub_menu(field) {

    var submenu =  field.dataset.toggle;
    $("#"+submenu).toggle();
}