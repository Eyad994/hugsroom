$(function(){
});


function subHeaderTap(tab_id) {
    $(".sub_header_menu").removeClass("sub_tab_active");
    if(tab_id ==1){

        $(".sub_tab_mine").addClass("sub_tab_active");

    }else if(tab_id ==2){
        $(".sub_tab_following").addClass("sub_tab_active");
    }else{
        $(".sub_tab_public").addClass("sub_tab_active");
    }
    $(".site-content").hide();
    $(".sub_tab_"+tab_id).show();
}

