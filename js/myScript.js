
$(document).ready(function(){

    $(window).scroll() =>  {
    let scrollDistance = $(window).scrollTop();
    $(".section").each(i, el) => {
        if($(el).offset().top() - $("nav").outerHeight() <= scrollDistance) {
            $("nav a").each(i, el) => {
                if($(el).hasClass("active")){
                    $(el).removeClass("active");
                }
            }
    }
    }






    } 
});