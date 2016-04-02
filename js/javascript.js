function checkPass() {
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('password_confirmation');
    var message = document.getElementById('confirmMessage');
    var goodColor = "#046004";
    var badColor = "#ff6666";
    
    if(pass1.value == pass2.value && pass1.value != ""){
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!";
        document.getElementById("submit").disabled = false;
        return 1;
    }else{
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!";
        document.getElementById("submit").disabled = true;
        return 0;
    }
}

function validateForm() {
    var a1 = document.forms["feedback"]["q1"].value;
    var a2 = document.forms["feedback"]["q2"].value;
    var a3 = document.forms["feedback"]["q3"].value;
    var a4 = document.forms["feedback"]["q4"].value;
    var a5 = document.forms["feedback"]["q5"].value;
    var a6 = document.forms["feedback"]["q6"].value;
    var a7 = document.forms["feedback"]["q7"].value;
    var a8 = document.forms["feedback"]["q8"].value;
    var a9 = document.forms["feedback"]["q9"].value;
    var a10 = document.forms["feedback"]["q10"].value;
    var a11 = document.forms["feedback"]["q11"].value;
    var a12 = document.forms["feedback"]["q12"].value;
    var a13 = document.forms["feedback"]["q13"].value;

    if (a1 == null || a1 == "" || a2 == null || a2 == "" || a3 == null || a3 == "" || a4 == null || a4 == "" || a5 == null || a5 == "" || 
        a6 == null || a6 == "" || a7 == null || a7 == "" || a8 == null || a8 == "" || a9 == null || a9 == "" || a10 == null || a10 == "") {
            alert("Fields marked with * are compulsory");
            return false;
    }

    return true;
}

/*function checkvalid() {
    var id = document.getElementById("id");
    var name = document.getElementById("name");
    //var message = document.getElementById('confirmMessage');
    
    if (name.value == "" || name.value == null) {
        //alert("The form was submitted");
        //alert("Name required");
        document.getElementById("name").focus();
        document.getElementById("name").style.border = "solid #ff6666";
        return 0;
    } else {
        if (id.value == "" || id.value == null) {
            //alert("ID required");
            document.getElementById("id").focus();
            document.getElementById("id").style.border = "solid #ff6666";
            return 0;
        } else {
            //document.getElementById("submit").click();
            return 1;
        }
    }
}

function checkvalid2() {
    var id = document.getElementById("id");
    var pass = document.getElementById("inputPassword");
    
    if (id.value != null && id.value != "" && pass.value != null && pass.value != "") {
        document.getElementById("submit").disabled = false;
    } else {
        document.getElementById("submit").disabled = true;
    }
}*/