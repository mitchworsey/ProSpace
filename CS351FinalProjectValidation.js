
var isValid = true;
function validate ( ) {
    isValid = true;
    var email = "";
    var pass = "";
    email = document.getElementById("uEmail").value;
    pass = document.getElementById("uPass").value;
    if(email == "") {
        alert("Please type your Email");
        isValid = false;
    }
    else if(!email.match(/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/)){
        alert("You have entered an invalid email");
        isValid = false;
    }
    else if(zip == "") {
        alert("Please type your Zip");
        isValid = false;
    }
    else if(zip.length < 5) {
        alert("Your zipcode must be at least 5 characters long");
        isValid = false;
    }
    else if(!zip.match(/^[0-9]+$/)){
        alert("Your name can only contain numbers");
        isValid=false;
    }
    
    if ( isValid )
        alert("Welcome " + name + "!");
    
    return isValid;
}

function getName ( ) {
    if( isValid )
        return name;
}