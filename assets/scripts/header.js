"use strict";

var headerProps = {
    mobileOpened: false
}

function menu(){

    if(headerProps.menuOpened){
        closeMenu();
    }else{
        openMenu();
    }

}

function openMenu(){
    var openButtonTopIcon = All(".open-button #first-btn"),
        openButtonMiddleicon = All(".open-button #second-btn"),
        openButtonBottomIcon = All(".open-button   #third-btn"),
        closeButton = All(".close-button"),
        closeButtonFirsticon = All(".close-button #first-btn"),
        closeButtonSecondicon = All(".close-button #second-btn"),
        menuContainer = Ele(".mobile-links");

    openButtonTopIcon.forEach(element => {
        element.style.marginLeft = "-100%";
        
    });

    openButtonBottomIcon.forEach(element => {
        element.style.marginLeft = "-100%";
        
    });

    openButtonMiddleicon.forEach(element => {
        element.style.marginLeft = "100%";
        
    });

    menuContainer.style.right = "0px";

    setTimeout(()=>{

        closeButton.forEach(element => {
            element.style.opacity = "1";
        })

        closeButtonFirsticon.forEach(element => {
            element.style.top = "50%";
            element.style.left = "50%";
            
        });

        closeButtonSecondicon.forEach(element => {
            element.style.top = "50%";
            element.style.left = "50%";
            
        });

        

    }, 400)

    headerProps.menuOpened = true;

}

function closeMenu(){

    var openButtonTopIcon = All(".open-button #first-btn"),
        openButtonMiddleicon = All(".open-button #second-btn"),
        openButtonBottomIcon = All(".open-button   #third-btn"),
        closeButton = All(".close-button"),
        closeButtonFirsticon = All(".close-button #first-btn"),
        closeButtonSecondicon = All(".close-button #second-btn"),
        menuContainer = Ele(".mobile-links");

        

        closeButtonFirsticon.forEach(element => {
            element.style.top = "100%";
            element.style.left = "0%";
            
        });

        closeButtonSecondicon.forEach(element => {
            element.style.top = "100%";
            element.style.left = "100%";
            
        });


        menuContainer.style.right = "-500px";

        
        setTimeout(()=>{
            
            closeButton.forEach(element => {
                element.style.opacity = "0";
            })

            openButtonTopIcon.forEach(element => {
                element.style.marginLeft = "20%";
                
            });
        
            openButtonBottomIcon.forEach(element => {
                element.style.marginLeft = "20%";
                
            });
        
            openButtonMiddleicon.forEach(element => {
                element.style.marginLeft = "0%";
                
            });

    
    }, 300)


    headerProps.menuOpened = false;

}


window.addEventListener("load", ()=>{

    var mobileLinkBtn = Ele(".header-button");

    mobileLinkBtn.addEventListener("click", menu)

})