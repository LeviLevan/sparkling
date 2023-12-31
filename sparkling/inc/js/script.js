/**
 * Created by user on 07.10.16.
 */
var wow = new WOW(
    {
        boxClass: 'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 100,          // distance to the element when triggering the animation (default is 0)
        mobile: false,       // trigger animations on mobile devices (default is true)
        live: true,       // act on asynchronously loaded content (default is true)
    }
);
wow.init();

// Copyright 2014-2015 The Bootstrap Authors
// Copyright 2014-2015 Twitter, Inc.
// Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style')
    msViewportStyle.appendChild(
        document.createTextNode(
            '@-ms-viewport{width:auto!important}'
        )
    )
    document.head.appendChild(msViewportStyle)
}


$(document).ready(function () {
    $('.selectpicker').selectpicker({});

    var headerHeightScroll = $('#header').outerHeight();

    $('body').scrollspy({
        target: '#navbar__scroll',
        offset: headerHeightScroll + 4
    });

    var getTop = function (hash) {
        var offset = $('#' + hash).offset().top,
            header = $('#header').height(),
            top;
        if ($('body').hasClass('admin-bar')) {
            top = offset - header;
        } else {
            top = offset - header + 26;
        }
        return top;
    }

    var hash = location.hash.substring(1);
    if (hash.length != 0) {
        var offset = $('#' + hash).offset().top,
            header = $('#header').height(),
            top;
        if ($('body').hasClass('admin-bar')) {
            top = offset - header;
        } else {
            top = offset - header + 26;
        }

        // console.log(top, offset, header);
        // console.log(-header);
        $('body').animate({scrollTop: top});
    }


    $("#navbar__scroll").on("click", "a.nav--scroll", function (event) {
        event.preventDefault();

        jQuery(this).stop(true).queue('fx', function () {
            var headerHeight = $('#header').height() - 2;
            var id = $(this).attr('href'),
                top = $(id).offset().top - headerHeight;
            $('body,html').animate({scrollTop: top}, 1500).dequeue('fx');
        });
    });

    var MaxScrolltop;

    $(document).scroll(function () {

        var id = $('.row__logo');
        MaxScrolltop = $(id).offset().top;

    });


    $("body").on("click", "a.scroll, a.header__link", function (event) {
        event.preventDefault();

        jQuery(this).stop(true).queue('fx', function () {
            var headerHeight = $('#header').height();
            var id = $(this).attr('href'),
                top = $(id).offset().top - headerHeight;
            // console.log(top);
            // console.log(MaxScrolltop);
            // if (MaxScrolltop >= 250) {
            $('body,html').animate({scrollTop: top}, 1500).dequeue('fx');
            // }
        });
    });

    var hamburger = $('.hamburger');
    var navigation = $('.row__nav');

    $('.hamburger, .nav-link').on('click', function (e) {
        hamburger.toggleClass('is-active');
        navigation.toggleClass('is-active');
    });


    $('.page').bind('click', function (e) {
        if (hamburger.hasClass('is-active') && !hamburger.is(':hover')) {
            hamburger.removeClass("is-active");
            navigation.removeClass("is-active");
        }
    });

    if ($("input").is("#upload")) {
        document.getElementById("upload").onchange = function () {
            var upload = this.value,
                deleteFile = $('.file__delete'),
                arrUpload = upload.split('\\'),
                elem = arrUpload[arrUpload.length - 1];
            $('.wpcf7-form').on('submit', function () {
                deleteFile.css("display", "none");
            });
            document.getElementById("file__upload").value = elem;
            if (elem != "") {
                deleteFile.css("display", "block");
            }
            deleteFile.on('click', function () {
                document.getElementById("file__upload").value = "";
                document.getElementById("upload").value = "";
                deleteFile.css("display", "none");
            });
        };
    }

    $(document).on("click", "a.resume-link", function (event) {
        var $this = $(this).closest('.resume-item'),
            modal = $('#resumeModal'),
            rateEl = modal.find('.rate-val'),
            imgEl = modal.find('.modal-body img');
        rateEl.html($this.data('rate'));
        imgEl.attr('src', $this.data('img'));
        imgEl.attr('alt', $this.data('title'));
    });

    var clickedLink = false,
        modal = $('#resumeModal')

    $(document).on("click", "a.request-developer", function (event) {
        event.preventDefault();
        modal.modal('hide');
        clickedLink = true;
    });

    modal.on('hidden.bs.modal', function () {
        var timer = setInterval(function () {
            var top = getTop('contact');
            if (clickedLink) {
                $('body,html').animate({scrollTop: top}, 500).dequeue('fx');
                window.clearInterval(timer);
                clickedLink = false;
            }
        }, 100);
    });

    $('.wpcf7-select').select2({
        minimumResultsForSearch: Infinity,
        width: 'style'
    });

    if ($(".slick-slider")[0]) {
        $('.slick-slider').slick({
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }

});


