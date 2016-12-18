//Constants
var MIN_PASSWORD_LENGTH = 8;

//Error messages
var USERNAME_ERROR_MESSAGE = "Username required!"; 
var PASSWORD_ERROR_MESSAGE = "Password must be 8-15 chars - 1 [a-z], 1 [A-Z], 1 [0-9] and one special.";

function getBool(val) {
    return !!JSON.parse(String(val).toLowerCase());
}

function validateUsername(username){
    if(username.length == 0){
        return false;
    } else{
        return true;
    }
}

function validatePassword(password){
    var decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;  
    return password.match(decimal);
}
