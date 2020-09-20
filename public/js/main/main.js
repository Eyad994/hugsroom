$(function(){

});

function open_sub_menu(field) {

    var submenu =  field.dataset.toggle;
    $("#"+submenu).toggle();
}

function openmodel(slide_number) {
    if(screen.width < "640") {
        window.location.href = "./page2";
    }else{
        $('#centralModalSm').modal('toggle');
    }
}


function redirectTo(link) {
    window.location.href = "../"+link;
}