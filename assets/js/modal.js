var elements = $('.modal-overlayF, .modalF');

$('#contact, .openF, #movF').click(function(){
    elements.addClass('active');
});

$('.close-modalF').click(function(){
    elements.removeClass('active');
});

$('.wpcf7-submit').click(function checkForChanges(){
    if ($('div').hasClass('wpcf7-response-output') && ($('.wpcf7-response-output').text()=="Thank you for your message. It has been sent."))
        elements.removeClass('active');
    else
        setTimeout(checkForChanges, 500);
});

$('#al').click(function(){
    $('#al p').addClass('activeF');
    $('#de p').removeClass('activeF');
    $('#an p').removeClass('activeF');
    $('#nu p').removeClass('activeF');
    $('#j1').addClass('isVisible');
    $('#j2').removeClass('isVisible');
    $('#j3').removeClass('isVisible');
    $('#j4').removeClass('isVisible');
    $('#j2').addClass('notVisible');
    $('#j3').addClass('notVisible');
    $('#j4').addClass('notVisible');
    $('#t1').addClass('isVisible');
    $('#t2').removeClass('isVisible');
    $('#t3').removeClass('isVisible');
    $('#t4').removeClass('isVisible');
    $('#t2').addClass('notVisible');
    $('#t3').addClass('notVisible');
    $('#t4').addClass('notVisible');
});

$('#de').click(function(){
    $('#de p').addClass('activeF');
    $('#al p').removeClass('activeF');
    $('#an p').removeClass('activeF');
    $('#nu p').removeClass('activeF');
    $('#j2').addClass('isVisible');
    $('#j1').removeClass('isVisible');
    $('#j3').removeClass('isVisible');
    $('#j1').addClass('notVisible');
    $('#j3').addClass('notVisible');
    $('#j4').removeClass('isVisible');
	$('#j4').addClass('notVisible');
    $('#t2').addClass('isVisible');
    $('#t1').removeClass('isVisible');
    $('#t3').removeClass('isVisible');
    $('#t1').addClass('notVisible');
    $('#t3').addClass('notVisible');
    $('#t4').removeClass('isVisible');
    $('#t4').addClass('notVisible');
});

$('#an').click(function(){
    $('#an p').addClass('activeF');
    $('#de p').removeClass('activeF');
    $('#al p').removeClass('activeF');
    $('#nu p').removeClass('activeF');
    $('#j3').addClass('isVisible');
    $('#j2').removeClass('isVisible');
    $('#j1').removeClass('isVisible');
    $('#j2').addClass('notVisible');
    $('#j1').addClass('notVisible');
    $('#j4').removeClass('isVisible');
	$('#j4').addClass('notVisible');
    $('#t3').addClass('isVisible');
    $('#t2').removeClass('isVisible');
    $('#t1').removeClass('isVisible');
    $('#t2').addClass('notVisible');
    $('#t1').addClass('notVisible');
    $('#t4').removeClass('isVisible');
    $('#t4').addClass('notVisible');
});

$('#nu').click(function(){
    $('#nu p').addClass('activeF');
    $('#de p').removeClass('activeF');
    $('#an p').removeClass('activeF');
    $('#al p').removeClass('activeF');
    $('#j4').addClass('isVisible');
    $('#j2').removeClass('isVisible');
    $('#j3').removeClass('isVisible');
    $('#j2').addClass('notVisible');
    $('#j3').addClass('notVisible');
    $('#j1').removeClass('isVisible');
	$('#j1').addClass('notVisible');
    $('#t4').addClass('isVisible');
    $('#t2').removeClass('isVisible');
    $('#t3').removeClass('isVisible');
    $('#t2').addClass('notVisible');
    $('#t3').addClass('notVisible');
    $('#t1').removeClass('isVisible');
    $('#t1').addClass('notVisible');
});