
$('.tabs').css('display', 'none');
$('.navpath').css('display', 'none');
$('.arrow').css('display', 'none');
$('.levels').css('display', 'none');
$('.tabs2').css('margin-top', '30px');
$('.tablist').removeClass('tablist').addClass('nav').addClass('nav-pills');
$('.title').removeClass('title').addClass('page-header').css('font-size', '20px');
$('.groupheader').removeClass('groupheader').addClass('page-header').css('font-size', '20px');
$('.groupHeader').removeClass('groupHeader').addClass('page-header').css('font-size', '20px');
$('.summary').removeClass('summary').addClass('well');
$('.icon').removeClass('icon').addClass('label').addClass('label-primary').css('margin-right', '10px');
$('.textblock').removeClass('textblock').addClass('alert').addClass('alert-success');

$('[class^="memitem"], [class*=" memitem"]').addClass('panel').addClass('panel-info');
$('[class^="memdesc"], [class*=" memdesc"]').addClass('well');


$('.groupText').addClass('panel');
$('.memitem').addClass('panel').addClass('panel-info');
$('.memproto').addClass('panel-heading');
$('.memdoc').addClass('panel-body');

$('.qindex').addClass('label').addClass('label-primary').css('font-size', '16px');
