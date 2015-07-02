// Login Form

$(function() {
    var button = $('.icon-signin');
    var box = $('#ajax');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(signin) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(signin) {
        if(!($(login.target).parent('.icon-signin').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});
