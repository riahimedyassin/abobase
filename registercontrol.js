function isAlpha(ch) {
    if (isNaN(ch) == false || ch.length < 1) {
        return false;
    }
    ch = ch.toUpperCase();
    for (let i = 0; i < ch.length; i++) {
        if ((ch[i] < "A") || (ch[i] > "Z")) {
            return false;
        }
    }
    
}
// function passcheck() {
//     var password = document.getElementById("register-password").value;
//     let nC = 0;
//     let nI = 0;
//     if (password.length > 8) {
//         for (let i = 0; i < password.length; i++) {
//             if (password[i].toUpperCase() >= "A" && password[i].toUpperCase() <= "Z") {
//                 nC++;
//             }
//             else if (password[i] >= "0" && password[i] <= "9") {
//                 nI++;
//             }
//         }
//         if (nC < 1 && nI < 1) {
//             return false;
//         }
//         else {
//             return true;
//         }
//     }
//     else {
//         return false
//     }
// }
// function passmatch() {
//     var password1 = document.getElementById("register-password").value;
//     var password2 = document.getElementById("register-password-2").value;
//     if (password1 != password2) {
//         return false
//     }
//     else {
//         return true
//     }
// }
// function emailcheck() {
//     var email = document.getElementById("register-email").value;
//     let x= email.indexOf("@");
//     let y=email.lastIndexOf(".");
//     alert("test")
//     if (x>1 && y>-1 && y>x && email!="") {
//         return true;
//     }
//     else {
//         return false;
//     }
// }
   


function register() {
    var name = document.getElementById("register-name").value;
    var forname = document.getElementById("register-last-name").value;
    if (isAlpha(name) == false) {
        document.getElementById("wronguser").innerHTML="Please enter a valid Username";
        document.getElementById("register-name").focus();
        return false;
    }
    else {
        document.getElementById("wrongwrite").innerHTML = "";
        return false;
    }
    if (isAlpha(forname) == false) {
        document.getElementById("wrong-forname").innerHTML=`<img src="ressource/icon/warning.png" class="very-small-icon">"Please enter a valid Forname"`;
        document.getElementById("register-last-name").focus();
        return false;
    }
    else {
        document.getElementById("wrong-forname").innerHTML = "";
    }
    // if (passcheck() == false) {
    //     document.getElementById("wrongpass").innerHTML=`<img src="ressource/icon/warning.png" class="very-small-icon">"Please enter a valid Password"`;
    //     document.getElementById("register-name").focus();
    //     return false;
    // }
    // else {
    //     document.getElementById("wrongpass").innerHTML = ""
    // }
    // if (emailcheck()==false) {
    //     document.getElementById("wrongemail").innerHTML = "Type a valid E-mail";
    //     document.getElementById("register-email").focus();
    //     return false;
    // }
    // else {
    //     document.getElementById("wrongemail").innerHTML = ""
    // }
    // if (passcheck() == false) {
    //     document.getElementById("wrong-match").innerHTML=`<img src="ressource/icon/warning.png" class="very-small-icon">"Please enter the same Password"`;
    //     document.getElementById("register-password").focus();
    //     return false;
    // }
    // else {
    //     document.getElementById("wrongpass").innerHTML = "";
    // }
    // if (passmatch()==false) {
    //     document.getElementById("wrong-match").innerHTML="Retype the same password";
    //     document.getElementById("register-password-2").focus();
    //     return false;
    // }
    // else {
    //     document.getElementById("wrong-match").innerHTML="";
    // }
}