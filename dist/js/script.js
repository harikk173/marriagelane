$(function () {

    $("#loader").hide();
    $('#user_registration_form').submit(function () {
        $("#loader").show();
    });
});


function Validate() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var count = document.getElementById('acad_counter').value;
    if (name === '') {
        alert("Name is empty");
        return false;
    }
    if (email === '') {
        alert("email is empty");
        return false;
    }
    if (phone === '') {
        alert("phone is empty");
        return false;
    }
    if (count) {
        for (var i = 0;i < count;i++) {
            var year = document.getElementById('year_of_passout' + i).value;
            if(year > 2020 && year < 1995){
                alert("incorrect year");
                return false;
            }  
        }
    }
    else {
        return true;
    }
}