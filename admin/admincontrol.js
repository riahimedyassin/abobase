function isAlpha(ch) {
    
    if (isNaN(ch)==false || ch.length<1 || ch.length>10 ) {

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
function passcheck(ch) {
    if (ch=="") {
        return false;
    }
    else if (ch.indexOf("-")==-1) {
        return false ;
    }
    else if (ch.length<8) {
        return false;
    }
    else {
        return true;
    }
}

function login() {
    var user=document.getElementById("username").value;
    var pass=document.getElementById("password").value;  
    if (isAlpha(user)==false) {
        document.getElementById("wronguser").innerHTML=`<img src="../ressource/icon/warning.png" style="width:20px;
        height: 20px;">"Please enter a valid Username"`;
        return false;
    }
    else {
        document.getElementById("wronguser").innerHTML="";
    }
    if (passcheck(pass)==false) {
        document.getElementById("wrongpass").innerHTML=`<img src="../ressource/icon/warning.png" style="width:20px;
        height: 20px;">"Please enter a valid Password"`;;
        return false;
    }
    else {
        document.getElementById("wrongpass").innerHTML="";
    }
}
