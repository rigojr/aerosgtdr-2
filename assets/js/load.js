jQuery(document).ready(function($) {  

// site preloader -- also uncomment the div in the header and the css style for #preloader
$(window).on("load", (function(){
	$('.loader').fadeOut('slow', function(){$(this).remove();});
}));

});

$(function () {
    $('.loader img').on("hasFadedOut", fadeInImg);
    $('.loader img').on("hasFadedIn", fadeOutImg);
    fadeOutImg();
})

fadeInImg = function () {
    $('.loader img').fadeOut(500, function () { $('.loader img').trigger("hasFadedIn"); });
};

fadeOutImg = function () {
    $('.loader img').fadeIn(800, function () { $('.loader img').trigger("hasFadedOut"); });
};