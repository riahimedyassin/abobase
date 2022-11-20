var isAlpha = function(ch){
    return typeof ch === "string" ;
}

function register() {
    var name=document.forms["register"]["r-name"]
    var forname=document.getElementById("register-last-name").value
    var email=document.getElementById("register-email").value
    var password=document.getElementById("register-password").value
    var password=document.getElementById("register-password").value
    var password2=document.getElementById("register-password-2").value

    if(name.value=="1") {
        alert("wrong name")
        return false;
    }

}