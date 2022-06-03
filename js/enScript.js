
$(document).ready(function(){

$('form').submit(function (event) {
    event.preventDefault();
  
    var actionUrl = $(this).attr('action');
      $.ajax({
        type: "POST",
        url: actionUrl,
        data: $(this).serialize()      
    }).done(function () {
        $(this).find("input").val("");
        alert("Письмо отправлено");
        $('form').trigger("reset");
    });
    return false;
});












    $(window).scroll(() =>  {
    let scrollDistance = $(window).scrollTop();
    $(".section").each((i, el) => {
        if($(el).offset().top() - $("nav").outerHeight() <= scrollDistance) {
            $("nav a").each((i, el) => {
                if($(el).hasClass("active")){
                    $(el).removeClass("active");
                }
            });

            $('nav li:eq(' + i + ')').find('a').addClass('active');
        }
    });
});
});



$('a[href^="#"').click(function(){
    let valHref = $(this).attr("href");
    $('html, body').animate({scrollTop: $(valHref).offset().top - 50 + "px"});
});





