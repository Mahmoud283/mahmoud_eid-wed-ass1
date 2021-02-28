$(document).ready(function(){

    $("#loding").fadeOut(2000)
    $("body ,html").css("overflow","auto")
    
    
//click on navbar toggler
$('.navbar-toggler').on('click',function(){
    $('.navbar-toggler .one').toggleClass('top');
    $('.navbar-toggler .two').toggleClass('hidden');
    $('.navbar-toggler .three').toggleClass('bottom');
})
$(window).scroll(function(){

    if($(window).scrollTop() >= 200){
        $('nav').css({
            'background-color' : 'rgba(0,0,0,.8)',
            'padding' : '0.5rem 1rem'
        })
    }
    else{
        $('nav').css({
            'background-color' : 'rgba(0,0,0,.5)',
            'padding' : '1rem'
        })
    }
})
$('.carousel').carousel({
    interval: 4000
})

$(".portfolio .ul-headers ul li").click(function(){
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
    // let filter=$(this).attr("data-filter")
    // if(filter==".all")
    // {
    //     $(".filter").slideDown(1500);
    // }
    // else
    // {
    //     $(".filter").not(filter).slideUp(2000);
    //     $(filter).slideDown(2000)
    // }
    
})
// $("nav li a").click(function(){
//     let href=$(this).attr("href")
//     $("html,body").animate({scrollTop:$(href).offset().top},2000)
// })
$("nav li a").click(function(){
    $("html,body").animate({scrollTop:$('#' + $(this).data('scroll')).offset().top - 74},2000)
    $("nav li a").removeClass("active")
    $(this).addClass("active")
})
$(window).scroll(function(){
    var scr=$(window).scrollTop()

    if(scr>100)
    {
    
        $("nav").addClass("nav-scroll")
        $("#up").fadeIn(1000)

    }
    else
    {
        $("nav").removeClass("nav-scroll")
        $("#up").fadeOut(1000)

    }
})
$("#up").click(function(){
    $("body,html").animate({scrollTop:'0px'},3000)
})
$(window).scroll(function(){
    $("section").each(function(){
        if($(window).scrollTop()+100>$(this).offset().top)
        {
           $('nav li a[data-scroll="'+$(this).attr("id")+'"]').addClass("active").parent().siblings().find('a').removeClass("active")

        //    $('nav li a[data-scroll="'+ $(this).attr('id') +'"]').addClass('active').parent().siblings().find('a').removeClass('active')

        }
  
    })
})
// venobox plagen
$(document).ready(function(){
    $('.venobox').venobox({
        bgcolor: '',
        overlayColor: 'rgba(6, 12, 34, 0.85)',
        closeBackground: 'red',
        closeColor: '#fff',
        infinigall : true,
        
    
    });
})
//mix
var mixer=mixitup('.mm');

AOS.init({
    duration: 2000

});
})

