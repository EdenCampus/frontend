"use strict";

function scrollReviewLeft(){
    var container = Ele(".review-contents .review"),
        allContainer = All(".review-contents .review"),
        containerWidth = container.getBoundingClientRect().width,
        scrollLength = ((-1 * (containerWidth + 30)) + (allContainer[0].offsetLeft)),
        fullScrollLength = (containerWidth + 30);

        allContainer[0].style.marginLeft = scrollLength + "px";






    console.dir(scrollLength)

}

function scrollReviewRight(){

}

window.addEventListener("load", ()=>{
    var reviewSlideLeftBtn = Ele("#review-left-btn"),
        reviewSideRightBtn = Ele("#review-right-btn");

    reviewSlideLeftBtn.addEventListener("click", scrollReviewLeft)
    reviewSideRightBtn.addEventListener("click", scrollReviewRight)

})