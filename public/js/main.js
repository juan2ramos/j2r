$(function(){
    var text = $('#code').html();
    $(document).ready(function () {
        type("#code", text, 0);
    });

    function type(c, text, location) {
        console.log($(c).html())
        $(c).html(text.substr(0, location++));
        if (location < text.length + 1)
            setTimeout(function () { type(c, text, location); }, 50);
    }
});