function isAlpha(ch) {
    if (isNaN(ch)==false || ch.length<1 ) {

       return false;
    }
    ch=ch.toUpperCase();
    for (let i=0;i<ch.length;i++) {
        if ((ch[i]<"A")||(ch[i]>"Z"))  {
            return false;
        }
    }
    return true;

}

function passcheck() {
    var password=document.getElementById("register-password");
    if (password.value=="1")  {
        return false
    }
    else {
        return true
    }
}
function register() {
    var name=document.getElementById("register-name").value;
    var forname=document.getElementById("register-last-name").value;

    if(isAlpha(name)==false) {
        document.getElementById("wrongwrite").innerHTML="Wrong Name";
        return false;
    }  
    else {
        document.getElementById("wrongwrite").innerHTML="";
    }
    if(isAlpha(forname)==false) {
        document.getElementById("wrong-forname").innerHTML="Wrong Forname";
        return false;
    } 
    else {
        document.getElementById("wrong-forname").innerHTML="";
    } 
    if (passcheck(password)==false) {
        document.getElementById("wrongpass").innerHTML="Type a Valid Password";
        return false;
    }


}