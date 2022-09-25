"use strict";

function showPassword(e){
    var passwordInput = e.target.attributes;

    if(passwordInput["data-class"]){
        var inputElement = Ele("input#" + passwordInput["data-class"].value)

        // console.log(inputElement)
        inputElement.focus();
        if(inputElement.type !== "password"){
            inputElement.type = "password";
        }else{
            
            inputElement.type = "text";
        }

    }

    console.log(passwordInput["data-class"].value)
    
    

}

window.addEventListener("load", ()=>{
    var showPasswordButton = All(".show-password");

    showPasswordButton.forEach((element)=>{

        element.addEventListener("click", showPassword)
    })

})