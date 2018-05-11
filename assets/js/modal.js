$('#al').click(function(){
    $('#al div').addClass('active');
    $('#de div').removeClass('active');
    $('#an div').removeClass('active');
    $('#nu div').removeClass('active');
    $('#j1').addClass('isVisible');
    $('#j2').removeClass('isVisible');
    $('#j3').removeClass('isVisible');
    $('#j4').removeClass('isVisible');
    $('#j2').addClass('notVisible');
    $('#j3').addClass('notVisible');
    $('#j4').addClass('notVisible');
});

$('#de').click(function(){
    $('#de div').addClass('active');
    $('#al div').removeClass('active');
    $('#an div').removeClass('active');
    $('#nu div').removeClass('active');
    $('#j2').addClass('isVisible');
    $('#j1').removeClass('isVisible');
    $('#j3').removeClass('isVisible');
    $('#j1').addClass('notVisible');
    $('#j3').addClass('notVisible');
    $('#j4').removeClass('isVisible');
	$('#j4').addClass('notVisible');
});

$('#an').click(function(){
    $('#an div').addClass('active');
    $('#de div').removeClass('active');
    $('#al div').removeClass('active');
    $('#nu div').removeClass('active');
    $('#j3').addClass('isVisible');
    $('#j2').removeClass('isVisible');
    $('#j1').removeClass('isVisible');
    $('#j2').addClass('notVisible');
    $('#j1').addClass('notVisible');
    $('#j4').removeClass('isVisible');
	$('#j4').addClass('notVisible');
});

$('#nu').click(function(){
    $('#nu div').addClass('active');
    $('#de div').removeClass('active');
    $('#an div').removeClass('active');
    $('#al div').removeClass('active');
    $('#j4').addClass('isVisible');
    $('#j2').removeClass('isVisible');
    $('#j3').removeClass('isVisible');
    $('#j2').addClass('notVisible');
    $('#j3').addClass('notVisible');
    $('#j1').removeClass('isVisible');
	$('#j1').addClass('notVisible');
});