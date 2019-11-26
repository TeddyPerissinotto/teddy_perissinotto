$(document).ready(function() {

    var stickyNavTop = $('.navbar').offset().top;

    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyNavTop) {
            $('.navbar').addClass('sticky');
        } else {
            $('.navbar').removeClass('sticky');
        }
    };
    stickyNav();

    $(window).scroll(function() {
        stickyNav();
    });

});

function openModal(){
    document.getElementById('modal').classList.add('is-open');
}

function closeModal() {
    document.getElementById('modal').classList.remove('is-open')
}