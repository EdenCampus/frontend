"use strict";
var props = {
    activeFormNum: 1

}

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

function enableContinueButton(state){
    var schoolSelectContButton = Ele(".school-search-container .continue-btn");

    switch (state) {
        case 1:
            schoolSelectContButton.removeAttribute("disabled");
            
            break;
    
        default:
            break;
    }

}

function disableSchoolSelectContinueBtn(){
    var schoolSelectContButton = Ele(".school-search-container .continue-btn"),
        schoolList = All(".school-search-result .school"),
        schoolRadioBtn = All(".school-search-result #selected-school");

    schoolSelectContButton.setAttribute("disabled", "true");

    schoolList.forEach(element => {
        if(element.classList.contains("selected")){
            element.classList.remove("selected");
        }
        
    })

    schoolRadioBtn.forEach(element => {
        element.checked = false;
    })
    // console.log(schoolSelectContButton);




}

function changeFormContainer(){
    var allContainers = All(".login-form .signup-container-content"),
        steps = All(".form-steps .steps"),
        stepRange = Ele(".form-steps .step-length .step-percent"),
        stepLength = 50;

    window.scrollTo({
        left: 0,
        top: 0
    })

    switch(props.activeFormNum){
        case 1:
            allContainers.forEach(element => {
                element.style.display = "none";

                if(element.classList.contains("email-registration")){
                    element.style.display = "block";
                }
            })

            stepRange.style.width = stepLength * props.activeFormNum + "%";

            steps.forEach(element => {
                if(parseInt(element.getAttribute("data-id")) === (props.activeFormNum + 1)){

                    element.classList.add("active-step");
                }
            })

            props.activeFormNum = 2;
            break;

        case 2:

            allContainers.forEach(element => {
                element.style.display = "none";

                if(element.classList.contains("final-registration")){
                    element.style.display = "block";
                }
            })

            stepRange.style.width = stepLength * props.activeFormNum + "%";

            steps.forEach(element => {
                if(parseInt(element.getAttribute("data-id")) === (props.activeFormNum + 1)){

                    element.classList.add("active-step");
                }
            })
            break;
        default:
            break
    }
}

function checkInput(e){
    var email = Ele(".email-registration .email"),
        passwordOne = Ele(".email-registration .password"),
        passwordTwo = Ele(".email-registration .password-repeat"),
        emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
        continueButton = Ele(".email-registration .continue-btn"),
        emailErr = Ele(".email-err"),
        passwordErr = Ele(".password-err"),
        passwordTwoErr = Ele(".password-repeat-err"),
        submitBtn = Ele(".final-registration .submit-btn"),
        userName = Ele(".final-registration .username"),
        firstName = Ele(".final-registration .first-name"),
        lastName = Ele(".final-registration .last-name"),
        usernameErr = Ele(".username-err"),
        lastNameErr = Ele(".last-name-err"),
        firstNameErr = Ele(".first-name-err");

        // console.log(e)

    if(e.target.id  === "email"){ 
        if(e.target.value.trim() === ""){
            emailErr.innerText = "Please input your email";
            emailErr.style.animationName = "shake";
            
        }else if(!emailReg.test(e.target.value.trim())){
            emailErr.innerText = "Please input a valid email"
            emailErr.style.animationName = "shake";
            
        }else{
            emailErr.innerText = ""
            emailErr.style.animationName = "";

        }

    }

    if(e.target.id === "password"){

        if(e.target.value.trim() === ""){
            
            passwordErr.innerText = "Please input your email";
            passwordErr.style.animationName = "shake";

        }else if(e.target.value.trim().length < 8){
            passwordErr.innerText = "Password must not be less than 8 characters";
            passwordErr.style.animationName = "shake";



        }else{
            passwordErr.innerText = ""
            passwordErr.style.animationName = "";

        }
    }

    if(e.target.id === "password-repeat"){

        if(passwordOne.value.trim() === ""){

            passwordTwoErr.innerText = "Please fill the first password field";
            passwordTwoErr.style.animationName = "shake";
            passwordTwo.value = "";
            return;
        }

        if(e.target.value.trim() === ""){
            
            passwordTwoErr.innerText = "Please repeat your password";
            passwordTwoErr.style.animationName = "shake";

        }else if(e.target.value.trim() !== passwordOne.value.trim()){

            passwordTwoErr.innerText = "Password isn't the same";
            passwordTwoErr.style.animationName = "shake";



        }else{
            passwordTwoErr.innerText = ""
            passwordTwoErr.style.animationName = "";

        }
    }

    if(e.target.id === "first-name"){

        if(e.target.value.trim() === ""){
            firstNameErr.innerText = "Please input your first name";
            firstNameErr.style.animationName = "shake"

        }else{
            firstNameErr.innerText = "";
            firstNameErr.style.animationName = ""
        }
    }

    if(e.target.id === "last-name"){

        if(e.target.value.trim() === ""){
            lastNameErr.innerText = "Please input your last name";
            lastNameErr.style.animationName = "shake"

        }else{
            lastNameErr.innerText = "";
            lastNameErr.style.animationName = ""
        }
    }

    if(e.target.id === "username"){

        if(e.target.value.trim() === ""){
            usernameErr.innerText = "Please input your desired username";
            usernameErr.style.animationName = "shake"

        }else{
            usernameErr.innerText = "";
            usernameErr.style.animationName = ""
        }
    }

    if(email.value.trim() !== "" && emailReg.test(email.value.trim()) && passwordOne.value.trim() !== "" && passwordOne.value.trim().length > 7 && passwordTwo.value.trim() === passwordOne.value.trim()){

        continueButton.removeAttribute("disabled");

    }else{
        continueButton.setAttribute("disabled", "true");
    }


    if(userName.value.trim() !== "" && firstName.value.trim() !== "" && lastName.value.trim() !== ""){
        submitBtn.removeAttribute("disabled");
        
    }else{
        submitBtn.setAttribute("disabled", "true");

    }
}

function processSignup(e){
    // e.preventDefault();
    console.log(e)

    var email = Ele(".email-registration .email"),
        passwordOne = Ele(".email-registration .password"),
        passwordTwo = Ele(".email-registration .password-repeat"),
        emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
        continueButton = Ele(".email-registration .continue-btn"),
        emailErr = Ele(".email-err"),
        passwordErr = Ele(".password-err"),
        passwordTwoErr = Ele(".password-repeat-err"),
        submitBtn = Ele(".final-registration .submit-btn"),
        userName = Ele(".final-registration .username"),
        firstName = Ele(".final-registration .first-name"),
        lastName = Ele(".final-registration .last-name"),
        usernameErr = Ele(".username-err"),
        lastNameErr = Ele(".last-name-err"),
        firstNameErr = Ele(".first-name-err");

    if(email.value.trim() !== "" && emailReg.test(email.value.trim()) && passwordOne.value.trim() !== "" && passwordOne.value.trim().length > 7 && passwordTwo.value.trim() === passwordOne.value.trim() && userName.value.trim() !== "" && firstName.value.trim() !== "" && lastName.value.trim() !== ""){
        
        return true;

    }else{
        return false
    }

    

}


window.addEventListener("load", ()=>{
    var showPasswordButton = All(".show-password"),
        schoolSelectBtn = All(".school-search-result .school"),
        schoolSearchBox = Ele(".school-search"),
        continueBtn = All(".continue-btn"),
        regStepTwoInputs = All(".login-form .email-registration input"),
        regStepThree = All(".login-form .final-registration input"),
        signupForm = Ele(".signup-form"); 

    if(showPasswordButton){

        showPasswordButton.forEach((element)=>{
    
            element.addEventListener("click", showPassword);
        })
    }

    schoolSelectBtn.forEach(element => {
        element.addEventListener("click", ()=>{
            var elementChildren = [...element.children];

            // console.log(elementChildren);

            schoolSelectBtn.forEach(ele=>{
                if(ele.classList.contains("selected")){
                    ele.classList.remove("selected");
                }
            })

            elementChildren.forEach(ele=>{
                if(ele.tagName === "INPUT" && ele.type === "radio"){
                    ele.checked = true;
                    // console.dir(ele)
                }
            })

            element.classList.add("selected")
            enableContinueButton(1)


        });
        
    })

    schoolSearchBox.addEventListener("input", ()=>{
        disableSchoolSelectContinueBtn();

    })

    continueBtn.forEach(element => {
        element.addEventListener("click", changeFormContainer)
    })

    regStepTwoInputs.forEach(element =>{

        element.addEventListener("input", checkInput)
    })

    regStepThree.forEach(element =>{

        element.addEventListener("input", checkInput)
    })




})