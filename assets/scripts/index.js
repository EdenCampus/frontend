"use strict";

function scrollReviewLeft(){
    
    var container = Ele(".review-contents .review"),
        parentContainer = Ele(".review-scroll-box .review-contents"),
        allContainer = All(".review-contents .review"),
        containerWidth = container.getBoundingClientRect().width,
        scrollLength = ((-1 * (containerWidth + 30)) + (allContainer[0].offsetLeft)),
        fullScrollLength = (containerWidth + 30) * allContainer.length,
        parentWidth = parentContainer.getBoundingClientRect().width;

        if((-1 * (allContainer[0].offsetLeft - parentWidth)) >= fullScrollLength){

            scrollLength = allContainer[0].offsetLeft;

        }else if((-1 * (allContainer[0].offsetLeft - parentWidth)) < fullScrollLength && (fullScrollLength - (-1 * (allContainer[0].offsetLeft - parentWidth))) < (containerWidth + 30)){
            // console.log("worked")
            // scrollLength = (allContainer[0].offsetLeft - (fullScrollLength - (-1 * (allContainer[0].offsetLeft - parentWidth))) + 30)

            scrollLength = (-1 * (fullScrollLength - parentWidth - 35));

        }

        allContainer[0].style.marginLeft = scrollLength + "px";


        console.log(allContainer[0].offsetLeft - parentWidth, (containerWidth + 30))

}

function scrollReviewRight(){

    var container = Ele(".review-contents .review"),
        parentContainer = Ele(".review-scroll-box .review-contents"),
        allContainer = All(".review-contents .review"),
        containerWidth = container.getBoundingClientRect().width,
        scrollLength = ((containerWidth + 30) + (allContainer[0].offsetLeft)),
        fullScrollLength = (containerWidth + 30) * allContainer.length,
        parentWidth = parentContainer.getBoundingClientRect().width;

        if(allContainer[0].offsetLeft <= 0 && (-1 * containerWidth) < allContainer[0].offsetLeft ){

            scrollLength = 0;

        }

        allContainer[0].style.marginLeft = scrollLength + "px";

        console.log((-1 * allContainer[0].offsetLeft))

}

function resetScroll(){

    var allContainer = All(".review-contents .review");

    allContainer[0].style.marginLeft = "0px";
    
}

window.addEventListener("load", ()=>{
    var reviewSlideLeftBtn = Ele("#review-left-btn"),
        reviewSideRightBtn = Ele("#review-right-btn");

    reviewSlideLeftBtn.addEventListener("click", scrollReviewLeft)
    reviewSideRightBtn.addEventListener("click", scrollReviewRight)

    window.addEventListener("resize", ()=>{
        resetScroll();
    })

})