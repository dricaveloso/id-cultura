
$(document).ready(function(){
    $(".navbar .navbar-nav .btn.login").click(function(){
        var url = $(this).attr('href');
        window.open(url, '', "width=600,height=450");
        return false;
    });
});