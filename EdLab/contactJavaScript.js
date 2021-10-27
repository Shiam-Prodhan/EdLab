var Match="";
window.addEventListener('load', ()=>{
    Match=createCaptcha();
}
);
function changeText(){
    Match=createCaptcha();
};
function createCaptcha(){
    let letter = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'
    ,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'
    ,'0','1','2','3','4','5','6','7','8','9'];
    let a = letter[Math.floor(Math.random() * letter.length)];
    let b = letter[Math.floor(Math.random() * letter.length)];
    let c = letter[Math.floor(Math.random() * letter.length)];
    let d = letter[Math.floor(Math.random() * letter.length)];
    let e = letter[Math.floor(Math.random() * letter.length)];
    let code = a+b+c+d+e;
    document.getElementById("contact-code").innerHTML=code;
    return code;
}




function ContactgetFeedbackData(){
    // Saving data in variable
    var email = document.getElementById("contact-Email").value;
    email = String(email).toLowerCase(); //to make email all lowerCase for validation//
    var comment = document.getElementById("contact-Text").value;
    // var checker = document.getElementById("contact-mark").checked;
    var checker = document.getElementById("contact-mark").value;
 
    //  checking input validation//
    if(email ==""){ //chk email not empty
        var message = "⚠ Can not leave Email box Empty";
        document.getElementById("contact-error").innerHTML = message;
        document.getElementById("contact-error").style.visibility= "visible";
            setTimeout(function(){
                document.getElementById("contact-error").style.visibility= "hidden";
            }, 500); 
        
    }
    else if(email.includes("@") ==false){ //chk email valid with looking for @ symbol in substring
        var message = "⚠ Invalid Email in box Empty";
        document.getElementById("contact-error").innerHTML = message;
        document.getElementById("contact-error").style.visibility= "visible";
            setTimeout(function(){
                document.getElementById("contact-error").style.visibility= "hidden";
            }, 500); 
        
    }
    else if(comment == ""){ //chk comment not empty
        var message = "⚠ Can not leave Message box Empty";
        document.getElementById("contact-error").innerHTML = message;
        document.getElementById("contact-error").style.visibility= "visible";
            setTimeout(function(){
                document.getElementById("contact-error").style.visibility= "hidden";
            }, 500); 
    }else if(checker != Match){ //chk not robot
        
        var message = "⚠ Error please retry";
        document.getElementById("contact-error").innerHTML = message;
        document.getElementById("contact-error").style.visibility= "visible";
            setTimeout(function(){
                document.getElementById("contact-error").style.visibility= "hidden";
            }, 500); 
        changeText();
    }
    else { //valid info is returned and input is made empty//
        document.getElementById("contact-Email").value="";
        document.getElementById("contact-Text").value="";
        document.getElementById("contact-mark").value="";
        document.getElementById("contact-ConfirmationMessage").style.visibility= "visible";
        // confimation message//
        setTimeout(function(){
            document.getElementById("contact-ConfirmationMessage").style.transition= "250ms ease-in-out";

            setTimeout(function(){
                document.getElementById("contact-ConfirmationMessage").style.visibility= "hidden";
            }, 500); 
        },1500);
        changeText();
    }

    var FinalComment = String(email+ "\n\n" + comment);
    console.log(FinalComment);
    return  FinalComment; //Returning the message to be stored in Database//
}
