 
$('.slide-banner').slick({
    autoplay: false,
    arrow: false,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: '', 
    nextArrow: '',
});   

$('.slide-feedback').slick({
    autoplay: false,
    arrow: false,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1, 
    prevArrow: '', 
    nextArrow: '',
});  

$('.slide-less').slick({
    autoplay: false,
    arrow: false,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1, 
    prevArrow: '', 
    nextArrow: '',
});
  
$('.slide-other').slick({
    autoplay: false,
    arrow: false,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1, 
    prevArrow: '', 
    nextArrow: '',
});  


$(document).ready(function(){
    
    $('.list-bar-linik a').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('.list-bar-linik a').removeClass('active');
        $('.tab-conotent').removeClass('active');

        $(this).addClass('active');
        $("#"+tab_id).addClass('active');
    })

})

// $('.btn_regis_popup, .btn-frm-srv').click(function(event) {
//     $('body').addClass('modal-open-ov');
// });

// jQuery(document).ready(function( $ ) {
//   $("#menu").mmenu({
//      "extensions": [
//         "fx-menu-zoom"
//      ],
//      "counters": true
//   });
// });