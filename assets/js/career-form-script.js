/*==============================================================*/
// Startp Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#careerForm").validator().on("submit", function (event) {
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
        var Cc_Name = $("#Cc_Name").val();
        var Cc_Email = $("#Cc_Email").val();
        var Cc_code = $("#Cc_code").val();
        var Cc_Phone = $("#Cc_Phone").val();
        var Cc_job = $("#Cc_job").val();
        var Cc_resume = $("#Cc_resume").val();

        $.ajax({
            type: "POST",
            url: "assets/php/career-form.php",
            data: "Cc_Name=" + Cc_Name + "&Cc_Email=" + Cc_Email + "&Cc_code=" + Cc_code + "&Cc_Phone=" + Cc_Phone + "&Cc_job=" + Cc_job + "&Cc_resume=" + Cc_resume,
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
        $("#careerForm")[0].reset();
        submitMSG(true, "Message Submitted!")
    }

    function formError(){
        $("#careerForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
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