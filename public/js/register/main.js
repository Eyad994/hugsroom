$(function(){
    $("#password_next_step").click(function () {
        var firstname = $("#firstname").val();
        var lastname =  $("#lastname").val();
        if(firstname.trim() != "" &&  lastname.trim() != ""){
            $("#register_step_1").hide();
            $("#step-name").slideUp();
            $("#step-password").slideDown();
        }
        else{
            $("#register_step_1").show();
        }

    });
});
