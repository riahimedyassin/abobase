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
function captital_number(ch) {
    var nc=0;
    var ne=0;
    for (let i=0;i<ch.length;i++) {
        if (ch[i]>="A" && ch[i]<="Z") {
            nc++;
        }
        else if (ch[i]>="0" && ch[i]<="9") {
            ne++;
        }
    }
    if (nc<1 || ne<1) {
        return false;
    }
    else {
        return true
    }

}
function passwordchecker() {
    var password=document.getElementById("register-password").value;
    if (password.length<8 || captital_number(password)==false) {
        return false;
    }
    else {
        return true;
    }

}
function passmatch() {
    var password1 = document.getElementById("register-password").value;
    var password2 = document.getElementById("register-password-2").value;
    if (password1 != password2) {
        return false
    }
    else {
        return true
    }
}
function emailcheck() {
    var email = document.getElementById("register-email").value;
    let x= email.indexOf("@");
    let y=email.lastIndexOf(".");
    if (x==-1 || y==-1 || y<x) {
        return false
    }
    else {
        return true;
    }
}

//Fonction principale //


function register() {
    var name = document.getElementById("register-name").value;
    var forname = document.getElementById("register-last-name").value;
    if (isAlpha(name) == false) {
        document.getElementById("wrongwrite").innerHTML=`<img src="ressource/icon/warning.png" style="width:20px;
        height: 20px;">"Please enter a valid Name"`;
        document.getElementById("register-name").focus();
        return false;
    }
    else {
        document.getElementById("wrongwrite").innerHTML = "";
    }
    if (isAlpha(forname) == false) {
        document.getElementById("wrong-forname").innerHTML=`<img src="ressource/icon/warning.png" style="width:20px;
        height: 20px;">"Please enter a valid Forname"`;
        document.getElementById("register-last-name").focus();
        return false;
    }
    else {
        document.getElementById("wrong-forname").innerHTML = "";
    }
    if (emailcheck()==false) {
        document.getElementById("wrongemail").innerHTML=`<img src="ressource/icon/warning.png" style="width:20px;
        height: 20px;">"Please Type a valid E-mail"`;
        document.getElementById("register-email").focus();
        return false;
    }
    else {
        document.getElementById("wrongemail").innerHTML = ""
    }


    if (passwordchecker()== false) {
        document.getElementById("wrongpass").innerHTML=`<img src="ressource/icon/warning.png" style="width:20px;
        height: 20px;">"Please enter a valid Password"`;
        document.getElementById("register-password").focus();
        return false;
    }
    else {
        document.getElementById("wrongpass").innerHTML = "";
    }
    if (passmatch()==false) {
        document.getElementById("wrong-match").innerHTML=`<img src="ressource/icon/warning.png" style="width:20px;
        height: 20px;">"Please Retype the same password"`;
        document.getElementById("register-password-2").focus();
        return false;
    }
    else {
        document.getElementById("wrong-match").innerHTML="";
    }
    if (regform.bloodtype.selectedIndex==0) {
        document.getElementById("wrongblood").innerHTML=`<img src="ressource/icon/warning.png" style="width:20px;
        height: 20px;">"Please Choose your blood Type"`
        return false;
    }
    else {
        document.getElementById("wrongblood").innerHTML="";
    }
    if (regform.rhesustype.selectedIndex==0) {
        document.getElementById("wrongrhesus").innerHTML=`<img src="ressource/icon/warning.png" style="width:20px;
        height: 20px;">"Please Choose your Rhesus Type"`
        return false;
    }
    else {
        document.getElementById("wrongrhesus").innerHTML="";
    }
    if (regform.tattos.selectedIndex==0) {
        document.getElementById("wrongtattos").innerHTML=`<img src="ressource/icon/warning.png" style="width:20px;
        height: 20px;">"Please Answer"`
        return false;
    }
    else {
        document.getElementById("wrongtattos").innerHTML="";
    }
    if (regform.sick.selectedIndex==0) {
        document.getElementById("wrongsick").innerHTML=`<img src="ressource/icon/warning.png" style="width:20px;
        height: 20px;">"Please Answer"`
        return false;
    }
    else {
        document.getElementById("wrongsick").innerHTML="";
    }
    if (!regform.agree.checked) {
        document.getElementById("wrongagree").innerHTML=`<img src="ressource/icon/warning.png" style="width:20px;
        height: 20px;">"You have to read and agree to the website's privacy"`
        return false;
    }
    else {
        document.getElementById("wrongagree").innerHTML="";
    }


    
    
    
    
   
   
}