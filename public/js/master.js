$(document).ready(function () {
    var trigger = $(".hamburger"),
        overlay = $(".overlay"),
        isClosed = false;

    trigger.click(function () {
        hamburger_cross();
    });

    function hamburger_cross() {
        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass("is-open");
            trigger.addClass("is-closed");
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass("is-closed");
            trigger.addClass("is-open");
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
        $("#wrapper").toggleClass("toggled");
    });
});

// var trigger = document.querySelector('.hamburger');
// var overlay = document.querySelector('.overlay');
// var isClosed = false;

// trigger.addEventListener('click', function(){
//     hamburger_cross();
// })

// function hamburger_cross(){
//     if(isClosed == true){
//         trigger.classList.remove('is-open');
//         trigger.classList.add('is-closed');
//         overlay.classList.remove('is-open');
//         overlay.classList.add('is-closed');
//         isClosed = false;
//     }else {
//         trigger.classList.remove('is-closed');
//         trigger.classList.add('is-open');
//         overlay.classList.remove('is-closed');
//         overlay.classList.add('is-open');
//         isClosed = true;
//     }
// }
