$(document).ready(function(){

    $("#submit").click(function(){
        let name1 = $("#user").val();
        let password = $("#pass").val();
        let confpass = $("#conpass").val();
        let mob = $("#mobileNumber").val();
        let emailc = $("#emails").val();
        const UC = /[A-Z]/g;
        const LC = /[a-z]/g;
        const SC = /[@!#$%^&*]/g;
        const NO = /[0-9]/g;

        if(name1 == ""){
            $("#user").addClass("form-control border-10");
            $("#username").html("**Plese Fill You Username!!**");
        return false;
        }
        else if (!isNaN(name1)) {
            $("#user").addClass("form-control border-10");
            $("#username").html("**Characters Are Allow!!**");
            return false;
        }
        else if(name1.length < 3 || name1.length > 20){
            $("#user").addClass("form-control border-10");
            $("#username").html("**Invalid Characters**");
            return false;
        }
        else{
        $("#user").removeClass("border-10");
        $("#username").html("");
        };

        // FOR PASSWORD

        if(password == ""){
            $("#pass").addClass("form-control border-10");
            $("#passwords").html("**Plese Fill You Password..!!**");
        return false;
        }
        else if (!password.match(UC)) {
            $("#pass").addClass("form-control border-10");
            $("#passwords").html("**UpperCase..!!**");
            return false;
        }
        else if(!password.match(LC)){
            $("#pass").addClass("form-control border-10");
            $("#passwords").html("**LowerCase..!!**");
            return false;
        }
        else if(!password.match(SC)){
            $("#pass").addClass("form-control border-10");
            $("#passwords").html("**Special Characters**");
            return false;
        }
        else if(!password.match(NO)){
            $("#user").addClass("form-control border-10");
            $("#passwords").html("**Numbers**");
            return false;
        }
        else{
        $("#user").removeClass("border-10");
        $("#passwords").html("");
        };

        
    });


});