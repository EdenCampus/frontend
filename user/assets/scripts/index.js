"use strict";
var props = {
    shrinkedNavBarActive: false
}

window.addEventListener("load", ()=>{

    var navDropDownLink = All(".nav-link .link .link-container .dropdown-btn"),
        navChangePosBtn = Ele(".nav-header .adjust-nav-btn");

    navDropDownLink.forEach(element => {

        element.addEventListener("click", ()=>{

            if(element.getAttribute("data-id")){
                // console.log(element);

                openNavDropDown(element.getAttribute("data-id"));

            }

        })
        
    });

    navChangePosBtn.addEventListener("click", changeNavPos);


})

function openNavDropDown(id){
    var navDropDown = All(".nav-link .link .dropdown-container"),
        navDropDownLink = All(".nav-link .link .link-container .dropdown-btn");

    if(props.shrinkedNavBarActive){
        unShrinkedNavBar();
    }
    

    navDropDown.forEach(element => {
        
        if(element.getAttribute("data-id") === id){

            if(element.getBoundingClientRect().height !== element.scrollHeight){

                element.style.height = element.scrollHeight + "px";
                // code to change the icon

                navDropDownLink.forEach(element=>{
                    if(element.getAttribute("data-id") === id){
            
                        var childrenElement = [...element.children];
            
                        childrenElement.forEach(ele => {
                            if(ele.classList.contains("link-icon")){
            
                                var finalChildren = [...ele.children];
            
                                finalChildren.forEach(elem => {
                                    if(elem.classList.contains("open-icon")){
                                        elem.style.display = "none";
                                    }else{
            
                                        elem.style.display = "block";
                                    }
                                })
                            }
                        })
                    }
                })
            }else{
                element.style.height = "0px";
                // code to change the icon

                navDropDownLink.forEach(element=>{
                    if(element.getAttribute("data-id") === id){
            
                        var childrenElement = [...element.children];
            
                        childrenElement.forEach(ele => {
                            if(ele.classList.contains("link-icon")){
            
                                var finalChildren = [...ele.children];
            
                                finalChildren.forEach(elem => {
                                    if(elem.classList.contains("open-icon")){
                                        elem.style.display = "block";
                                    }else{
            
                                        elem.style.display = "none";
                                    }
                                })
                            }
                        })
                    }
                })
                
            }
            // console.dir(element.getBoundingClientRect().height)
            // console.dir(element.scrollHeight)
            
        }else{

            element.style.height = "0px";
        }


    })

}

function changeNavPos(){
    if(props.shrinkedNavBarActive){
        unShrinkedNavBar()

    }else{
        shrinkedNavBar();
    }
}


function shrinkedNavBar(){
    var navBar = Ele(".main-body .nav-side"),
        PageContent = Ele(".main-body .main-side");

    navBar.style.width = "60px";
    navBar.style.minWidth = "0px";
    navBar.classList.add("shrinked");
    PageContent.style.width = "calc(100% - 60px)";

    openNavDropDown();

    props.shrinkedNavBarActive = true;
}

function unShrinkedNavBar(){
    var navBar = Ele(".main-body .nav-side"),
    PageContent = Ele(".main-body .main-side");
    
    navBar.style.width = "25%";
    navBar.style.minWidth = "250px";
    
    PageContent.style.width = "calc(75%)";
    props.shrinkedNavBarActive = false;



    setTimeout(()=>{

        if(navBar.classList.contains("shrinked")){
            
            navBar.classList.remove("shrinked");
        }
    }, 150)
}
