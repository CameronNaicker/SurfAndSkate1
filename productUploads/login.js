function validate(){

    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;

if(username==""){
window.alert("Please enter Username");
}
if (password=="") {

    window.alert("Please enter password");
    
    return false;
}

    if(username=="Admin"&&password=="surfandskate"){
 
alert("Login Successful");

    }else{

        window.alert("Username or Password Incorrect");
        return false;
    }
}