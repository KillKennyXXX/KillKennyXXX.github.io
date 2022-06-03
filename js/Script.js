
$(document).ready(function(){

$('form').submit(function (event) {
    event.preventDefault();
    
    let actionUrl = $('form').attr('action');
    alert(actionUrl);
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









});



$('a[href^="#"').click(function(){
    let valHref = $(this).attr("href");
    $('html, body').animate({scrollTop: $(valHref).offset().top - 50 + "px"});
});





