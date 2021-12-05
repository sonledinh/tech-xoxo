 
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
    responsive: [
        {
            breakpoint: 1023,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ],
});  

$('.slide-less').slick({
    autoplay: false,
    arrow: false,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1, 
    prevArrow: '', 
    nextArrow: '',
    responsive: [
        {
            breakpoint: 1023,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ],
});
  
$('.slide-other').slick({
    autoplay: false, 
    arrow: false,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1, 
    prevArrow: '', 
    nextArrow: '',
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ],
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

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

jQuery(document).ready(function( $ ) {
  $("#menu").mmenu({
     "extensions": [
        "fx-menu-zoom"
     ],
     "counters": true
  });
});