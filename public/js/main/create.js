$(function(){
    window.onbeforeunload = function(e) {
        return 'Please press the Logout button to logout.';
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
            return;
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
debugger;
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


   $("#"+prev).removeClass("active");
   $("#"+next).addClass("active");

}
