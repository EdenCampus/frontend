"use strict";

function showPassword(e){
    var passwordInput = e.target,
        showPasswordButton = All(".show-password");

    if(passwordInput.hasAttribute("data-class")){

        var inputElement = Ele("input#" + passwordInput.getAttribute("data-class"))

        // console.log(inputElement)
        inputElement.focus();
        if(inputElement.type !== "password"){

            inputElement.type = "password";
            addClass("remove");
            
        }else{
            
            addClass("add");
            inputElement.type = "text";
        }

        function addClass(action){
            switch(action){
                case "add":
                    showPasswordButton.forEach((element)=>{
            
                        if(element.hasAttribute("data-class")){
            
                            if(element.getAttribute("data-class") === passwordInput.getAttribute("data-class")){
                                element.classList.add("password-shown")
            
                            }
                        }
                    })
                    return;


                case "remove":

                    showPasswordButton.forEach((element)=>{
            
                        if(element.hasAttribute("data-class")){
            
                            if(element.getAttribute("data-class") === passwordInput.getAttribute("data-class")){
                                element.classList.remove("password-shown")
            
                            }
                        }
                    })
                    return;

                default:
                    return;


            }
        }

        



    }

    // console.log(passwordInput["data-class"].value)
    
    

    
}

window.addEventListener("load", ()=>{
    var showPasswordButton = All(".show-password");

    showPasswordButton.forEach((element)=>{

        element.addEventListener("click", showPassword)
    })

})