(function($) {
    $.fn.extend( {
        limiter: function(limit, elem) {
            $(this).on("keyup focus", function() {
                setCount(this, elem);
            });
            function setCount(src, elem) {
                var chars = src.value.length;
                if (chars > limit) {
                    src.value = src.value.substr(0, limit);
                    chars = limit;
                }
                elem.html( limit - chars );
            }
            setCount($(this)[0], elem);
        }
    });
})(jQuery);

$(function() {
	var elem_happy = $(".display-limiter.couple");
    var elem_hunter = $(".display-limiter.hunter");
	$("#happy-couple-form #message").limiter(140, elem_happy);
    $("#love-hunter-form #message").limiter(140, elem_hunter);
})