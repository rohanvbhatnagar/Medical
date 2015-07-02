var main= function()
{
    $('.btn').click(function()
    {
        var post = $('.status-box').val();
        $('<li>').text(post).prependTo('.posts');
        $('.status-box').val('');
      
        $('.btn').addClass('disabled');
});
('.status-box').keyup(function()
{
    var postLength = $(this).val().length;
    var charactersLeft = 2000 - postLength;
    
    if(charactersLeft < 0)
    {
        $('.btn').addClass('disabled');
    }
    else if(charactersLeft == 2000 )
    {
        $('.btn').addClass('disabled');
    }
    else
    {
        $('.btn').removeClass('disabled');
    }
    
});
$('.btn').addClass('disabled');

}
$(document).ready(main);