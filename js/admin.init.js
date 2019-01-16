$(document).ready(function(){
    $('.sidenav').sidenav();
});
$(document).ready(function(){
    $('.tooltipped').tooltip();
});
$(document).ready(function(){
    $('.parallax').parallax();
});
$(document).ready(function(){
    $('.datepicker').datepicker({
        defaultDate: new Date(),
        minDate: new Date(),
        showClearBtn: true,
        format: 'd mmm, yyyy',
        yearRange: 1,
    });
});