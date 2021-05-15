$(document).ready(function () {
    $(".navbar-toggler").click(function () {
        $("#ai-navbarSupportedContent").toggle('slow');
    });
});
$(window).on('scroll', function () {
    if ($(window).scrollTop() > 10) {
        $('.navbar').addClass('active');
    } else {
        $('.navbar').removeClass('active');
    }
});
$(document).ready(function () {
    $('a.play-video').click(function () {
        $('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
    });

    $('.ai-stop-video').click(function () {
        $('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
        $('.youtube-video-2')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
    });
    $('a.pause-video').click(function () {
        $('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    });
});
$(document).ready(function () {
    $(function () {
        $('.ai-service-list a[href^="Core-Engineering.html' + location.pathname.split("Core-Engineering.html")[1] + '"]').addClass('active');
        $('.ai-service-list a[href^="Experience-Design.html' + location.pathname.split("Experience-Design.html")[1] + '"]').addClass('active');
        $('.ai-service-list a[href^="Security.html' + location.pathname.split("Security.html")[1] + '"]').addClass('active');
        $('.ai-service-list a[href^="Internet-of-Things-(IoT).html' + location.pathname.split("Internet-of-Things-(IoT).html")[1] + '"]').addClass('active');
        $('.ai-service-list a[href^="DevOps&CloudServices.html' + location.pathname.split("DevOps&CloudServices.html")[1] + '"]').addClass('active');
    });
});