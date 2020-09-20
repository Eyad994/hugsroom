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
    window.location.href = "/rooms/"+link;
}

function redirectToRoom(room_id) {
    if(screen.width > "768") {
        window.location.href = "rooms/room/"+room_id;
    }else{
        window.location.href = "rooms/mbroom/"+room_id;
    }

}