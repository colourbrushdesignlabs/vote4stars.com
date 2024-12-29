$(document).ready(function() {
    //  toastr.success('success', '',{
    //   positionClass: 'toast-top-center',
    // })
    $('.menu-class li').on('click', function(event) {
        $(this).children('ul').toggleClass('in');
        $(this).children('span').toggleClass('icon-rotate');
        event.stopPropagation();
    });
    $('.menuToggle').on('click', function(event) {
        $('.main-sectionWrapdashboard').toggleClass('toggleclass');
        event.stopPropagation();
    });
    // vote 
   $(".vote-count").on("click", function() {
        $(this).siblings(".sharemodal").css("display", "block");
    });
    $(".sharemodal .close").on("click", function() {
        $(".sharemodal").css("display", "none");
    });

    
// notification toggleclass
$('.notify').click(function(){
  $(this).toggleClass('notify-class');
});
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#upload-img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function() {
        readURL(this);
        console.log(this);
    });
    //form validation login page
    checkNameEmpty("#username");
    checkNameEmpty("#password");
    $("#loginForm").click(function() {
        if ($("#username").val() == '') {
            $("#username").css('border', '1px solid red');
            return false;
        }
        if ($("#password").val() == '') {
            $("#password").css('border', '1px solid red');
            return false;
        }

    });
    //form validation forgot password
    checkNameEmpty("#mail");
    checkValidEmail("#mail");
    $("#fgtpwdForm").click(function() {
        if ($("#mail").val() == '') {
            $("#mail").css('border', '1px solid red');
            return false;
        }

        if ($("#mail").val() != '') {
            var email = $("#mail").val();
            if (!validateEmail(email)) {
                return false;
            }
        }
    });
    //form validation reset password
    $('#newpassword, #confirmpassword').on('keyup', function() {
        if ($('#newpassword').val() == $('#confirmpassword').val()) {
            $('#message').html('Password matching').css('color', 'green');
        } else
            $('#message').html('Password do not match').css('color', 'red');
    });
    checkNameEmpty("#newpassword");
    checkNameEmpty("#confirmpassword");
    $("#resetpwdForm").click(function() {
        if ($("#newpassword").val() == '') {
            $("#newpassword").css('border', '1px solid red');
            return false;
        }
        if ($("#confirmpassword").val() == '') {
            $("#confirmpassword").css('border', '1px solid red');
            return false;
        }
    });
    //form validation otp
    checkNameEmpty("#otp");
    checkValidOtp("#otp");
    $("#otpvarification").click(function() {
        if ($("#otp").val() == '') {
            $("#otp").css('border', '1px solid red');
            return false;
        }
    });
});
//form validation change password
checkNameEmpty("#oldpassword");
checkNameEmpty("#new1password");
checkNameEmpty("#confirm1password");
$("#changepwdForm").click(function() {
    console.log("working");
    if ($("#oldpassword").val() == '') {
        $("#oldpassword").css('border', '1px solid red');
        return false;
    }
    if ($("#new1password").val() == '') {
        $("#new1password").css('border', '1px solid red');
        return false;
    }
    if ($("#confirm1password").val() == '') {
        $("#confirm1password").css('border', '1px solid red');
        return false;
    }
});

function checkNameEmpty(inputID) {
    $(inputID).blur(function() {
        if ($(this).val() == '') {
            $(this).css('border', '1px solid red');

        } else {
            $(this).css('border', '1px solid green');

        }
    });
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function checkValidEmail(emailInputID) {
    $(emailInputID).blur(function() {
        var email = $(emailInputID).val();
        if (validateEmail(email)) {
            $(this).css('border', '1px solid green');

        } else {
            $(this).css('border', '1px solid red');
        }
    });

}

function checkValidOtp(otpID) {
    $(otpID).blur(function() {
        var otp = $(otpID).val();
        if ($.isNumeric(otp)) {
            $(this).css('border', '1px solid green');

        } else {
            $(this).css('border', '1px solid red');
        }
    });
}