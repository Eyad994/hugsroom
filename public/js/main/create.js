$(function(){
    window.onbeforeunload = function(e) {
        return 'Changes you made may not be saved.';
    };
});

function toggleAlert(ele) {
    $(ele.dataset.target).toggle();
}

function goNext(prev,next) {

    if(prev == "sc-terms")
    {

        if($("#terms").prop("checked") == false)
        {
            $("#over18_msg").show();
            return;
        }else{
            $("#over18_msg").hide();
        }
    }
    if(next == "sc-patient-name-else")
    {
        $("#me-or-else").val("1");
        next = "sc-public-help";
    }
    if(next == "sc-patient-name-me")
    {
        $("#me-or-else").val("0");
        next = "sc-public-help";
    }
    if(next == "sc-patient-name")
    {
        var checkmeorelse = $("#me-or-else").val();

        if(checkmeorelse == 1)
        {
            next =    "sc-patient-name-else";
        }else{
            next =    "sc-patient-name-me";
        }
    }

    if(prev == "sc-public-help-yes"){
        $("#pubic_help").val("1");
        prev = "sc-public-help";
    }
    if(prev == "sc-public-help-no"){
        $("#pubic_help").val("0");
        prev = "sc-public-help";
    }

    if(prev == "sc-patient-name-me")
    {
        if($("#firstName-me").val().trim()  == "")
        {
            $("#firstName-me").css("border","1px solid red");
            return;
        }else{
            $("#firstName-me").css("border","1px solid #ccc");
        }
            if($("#lastName-me").val().trim()  == "")
        {
            $("#lastName-me").css("border","1px solid red");
            return;
        }else{
            $("#lastName-me").css("border","1px solid #ccc");
        }
    }

    if(prev == "sc-patient-name-else")
    {
        if($("#firstName-else").val().trim()  == "")
        {
            $("#firstName-else").css("border","1px solid red");
            return;
        }else{
            $("#firstName-else").css("border","1px solid #ccc");
        }
        if($("#lastName-else").val().trim()  == "")
        {
            $("#lastName-else").css("border","1px solid red");
            return;
        }else{
            $("#lastName-else").css("border","1px solid #ccc");
        }
    }

    if(next == "sc-custom-privacy")
    {
        if($("#pubic_help").val() == "1"){
            next = "last_step";
        }
        if($("#title").val().trim() == ""){
            $("#title").css("border","1px solid red");
            return;
        }else{
            $("#title").css("border","1px solid #ccc");
        }
        if($("#room-link").val().trim() == ""){
            $("#room-link").css("border","1px solid red");
            return;
        }else{
            $("#room-link").css("border","1px solid #ccc");
        }

    }

    if(prev == "sc-patient-name-else-prev")
    {
        prev = "sc-patient-name-else";
    }
    if(prev == "sc-patient-name-me-prev")
    {
        prev = "sc-patient-name-me";
    }

    if(next =="sc-title-and-address")
    {
        var firstname;
        var lastname;
        if(  $("#me-or-else").val() == "1")
        {
            firstname =  $("#firstName-else").val();
            lastname  =  $("#lastName-else").val();
        }else{
            firstname =  $("#firstName-me").val();
            lastname  =  $("#lastName-me").val();
        }

        $("#title").val(firstname+' '+lastname);
        $("#room-link").val(firstname+lastname);

        if($("#pubic_help").val() == "1"){
            $(".progress-bar-room-name").css("width","100%");
        }else{
            $(".progress-bar-room-name").css("width","42%");
        }
    }
    if(next == "last_step_public")
    {
        next = "last_step";
        $("#howCanSeeYourRoomStatus").val("1");
    }
    if(next == "sc-public-search-listing")
    {
        $("#howCanSeeYourRoomStatus").val("2");
    }
    if(next == "last_step_praivet")
    {
        next = "last_step";
        $("#howCanSeeYourRoomStatus").val("3");
        $("#issearchable").val(0);
    }
    if(next == "last_step_searchable"){
        next = "last_step";
        $("#issearchable").val(1);
    }
    if(next == "last_step_notsearchable"){
        next = "last_step";
        $("#issearchable").val(0);
    }

    if(next == "last_step"){
debugger;
        var checkmeorelse = $("#me-or-else").val();
        if(checkmeorelse == 1)
        {
            $("#last_site_for").text("Someone Else");
            $("#last_name").text($("#firstName-else").val()+' '+$("#lastName-else").val());

        }else{
            $("#last_site_for").text("Me");
            $("#last_name").text($("#firstName-me").val()+' '+$("#lastName-me").val());
        }
        $("#last_title").text($("#title").val());
        $("#last_address").text("www.hugsroom.com/"+$("#room-link").val());

        var privecy = $("#howCanSeeYourRoomStatus").val();
        if(privecy == 3){
            $("#issearchable").val("0");
            $("#last_Privacy").text("Private");
        }else if(privecy == 2){
            $("#last_Privacy").text("Limited");
        }else{
            $("#issearchable").val("0");
            $("#last_Privacy").text("Public");
        }

        var searchable = $("#issearchable").val();
        if($("#pubic_help").val() == "1"){
            $("#last_public").text("Yes");
            $(".review_privacy").hide();
            $(".review_google").hide();
        }else{
            $(".review_privacy").show();
            $("#last_public").text("No");

            if(searchable == "0"){
                $("#last_google").text("Not Searchable");
                if(privecy == 1) {
                    $(".review_google").hide();
                }else if(privecy == 2) {
                    $(".review_google").show();
                }else if(privecy == 3) {
                    $(".review_google").hide();
                }
            }else{
                $("#last_google").text("Searchable on Google");
                $(".review_google").show();
            }
        }
    }


   $("#"+prev).removeClass("active");
   $("#"+next).addClass("active");

}

function submitCreateRoomForm() {

    var meOrSomeoneElse = $("#me-or-else").val();
    var roomForMe = 1;
    var firstName = $("#firstName-me").val();
    var lastName  = $("#lastName-me").val();
    var title     = $("#title").val();
    var roomLink  = $("#room-link").val();
    var howSeeMyRoom  = $("#howCanSeeYourRoomStatus").val();


    if(meOrSomeoneElse == 1)
    {
        roomForMe = 0;
        firstName = $("#firstName-else").val();
        lastName  = $("#lastName-else").val();

    }
    var searchable = $("#issearchable").val();
    if(searchable == 0){
        searchable =0;
    }else{
        searchable =1;
    }
//return false;
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "/addNewRoom",
        method: "POST",
        data: {
            '_token': CSRF_TOKEN,
            'roomForMe': roomForMe,
            'firstName': firstName,
            'lastName': lastName,
            'title': title,
            'roomLink': roomLink,
            'howSeeMyRoom':howSeeMyRoom ,
            'searchable': searchable
        },
        success: function (result) {
            window.onbeforeunload = null;
            window.location.href = "./rooms";
        }
    });


}

function goToSection(section) {
    if(section == "sc-patient-name")
    {
        var checkmeorelse = $("#me-or-else").val();

        if(checkmeorelse == 1)
        {
            section =    "sc-patient-name-else";
        }else{
            section =    "sc-patient-name-me";
        }
    }

    $("#last_step").removeClass("active");
    $("#"+section).addClass("active");
    
}