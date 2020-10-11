$(function(){
    $("#lang_list").select(function () {
        $("#lang_list").attr('size',1);
    })
});

function open_sub_menu(field) {

    var submenu =  field.dataset.toggle;
    $("#"+submenu).toggle();
}

function openmodel(slide_number) {
        window.location.href = "./page2/"+slide_number;
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
/*
function open_lang_list(){
    debugger;
    $("#lang_list").focus().click();
}*/

