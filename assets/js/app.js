$(function () {
    $(".slider").slick({
        rtl: true,
        lazyLoad: "progressive",
        slidesToShow: 1,
        infinite: true,
        dots: true,
        responsive: [{
            breakpoint: 720,
            settings: {
                dots: false,
            }
        }]
    });

    $(".navbary ul li").click(function (e) {
        var len = $(".childrens", this).length;
        if (len) {
            e.preventDefault();
            $(".childrens", this).fadeToggle();
        }
    });

    $(".btn-navbary").click(function () {
        var containerClass = ".navbary-container",
            container = $(containerClass);
        container.toggleClass("active");
    });


    $(".navbary-container .close").click(function (e) {
        var container = $(this).closest(".navbary-container");
        container.toggleClass("active");
    });

    $(".categories ul.nest-0 li").has(".childrens").click(function(e){
        e.preventDefault() ;
        $(".childrens" , this ).addClass("active") ;
    });

    $(document).click(function (e) {
        var container = $(".navbary-container");
        if (
            container.hasClass("active")
            &&
            !$(e.target).closest(".navbary-container,.btn-navbary").length
        ) {
            container.toggleClass("active");
        }

        var categories = $(".categories .childrens") ;
        if( 
            categories.has("active") 
            && 
            !$(e.target).closest(".categories").length
        ){
            categories.removeClass("active");
        }
    });

    $("li.has-children > .title .desc").click(function(){
        var wrapper = $(this).closest("li.has-children").first() ;
        wrapper.toggleClass("active") ;
        $("> .childrens" , wrapper ).fadeToggle(0) ;
    });

});

$(".products .product a.preview").click(function(e){
    e.preventDefault() ;
})
