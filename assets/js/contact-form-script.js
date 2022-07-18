/*==============================================================*/
// Startp Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });


    function submitForm(){
        // Initiate Variables With Form Content
        var C_Name = $("#C_Name").val();
        var C_Email = $("#C_Email").val();
        var C_Phone = $("#C_Phone").val();
        var C_Subject = $("#C_Subject").val();
        var C_Message = $("#C_Message").val();


        $.ajax({
            type: "POST",
            url: "assets/php/contact-form.php",
            data: "C_Name=" + C_Name + "&C_Email=" + C_Email + "&C_Phone=" + C_Phone + "&C_Subject=" + C_Subject + "&C_Message=" + C_Message,
            success : function(text){
                if (text){
                    formSuccess();
                } else {
                    formError();
                    submitMSG(false,text);
                }
            }
        });
    }

    function formSuccess(){
        $("#contactForm")[0].reset();
        submitMSG(true, "Message Submitted!")
    }

    function formError(){
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg){
        if(valid){
            var msgClasses = "h4 text-start tada animated text-success";
        } else {
            var msgClasses = "h4 text-start text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict