M.AutoInit();

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
$(document).ready(function() {
    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
        editable:true,
        header:{
            left:'prev,next today',
            center:'title',
            right: 'month,agendaWeek,agendaDay'
        },

    });
});