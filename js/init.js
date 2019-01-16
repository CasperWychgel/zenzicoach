$(document).ready(function(){
    $('.sidenav').sidenav();
});
$(document).ready(function(){
    $('.parallax').parallax();
});
$('.carousel.carousel-slider').carousel({
    fullWidth: true
});
$(document).ready(function(){
    $('.datepicker').datepicker({
        defaultDate: new Date(),
        minDate: new Date(),
        maxDate: new Date(2019, 2, 17),
        showClearBtn: true,
        format: 'd mmm, yyyy',
        yearRange: 1,
    });
});
var slider = document.getElementById('test-slider');
noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    step: 1,
    orientation: 'horizontal', // 'horizontal' or 'vertical'
    range: {
        'min': 0,
        'max': 100
    },
    format: wNumb({
        decimals: 0
    })
});
