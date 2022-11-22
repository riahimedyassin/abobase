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


function login() {
    var user=document.getElementById("username").value;
    //var password=document.getElementById("password").value;
    if (isAlpha(user)==false) {
        document.getElementById("wronguser").innerHTML="Please enter a valid username";
        return false;
    }
    return true;
}