function windowOnLoad(){
    $('.loading-page').addClass('disappear-anime');
    setTimeout(function(){$('.loading-page').addClass('disappear');}, 400);
    setTimeout(afterLoaderDisapper, 300);
    
}

function afterLoaderDisapper(){
    $(".n-img").toggleClass("n-hide");
    $(".landing-div-container").toggleClass("n-hide")
    $(".text-div").toggleClass("n-hide");
}