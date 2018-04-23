var elementsF = $('.modal-overlayF, .modalF');
var elementsS = $('.modal-overlayS, .modalS');

$('#myBtnF').click(function(){
    elementsF.addClass('active');
});

$('.close-modalF').click(function(){
    elementsF.removeClass('active');
});

$('#myBtnS').click(function(){
    elementsS.addClass('active');
});

$('.close-modalS').click(function(){
    elementsS.removeClass('active');
});

$('#movS').click(function(){
    elementsS.addClass('active');
});

$('#movF').click(function(){
    elementsF.addClass('active');
});

$('.openF').click(function(){
    elementsF.addClass('active');
});

$('.openS').click(function(){
    elementsS.addClass('active');
});

