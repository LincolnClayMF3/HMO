$(function() {
    var userAgent = navigator.userAgent.toLowerCase(),
        isAndroid = userAgent.indexOf("android") > -1;

    window.setTimeout(function () {
        var subnavi = $("#subnavi").offset(),
            header = $("header"),
            offsetTop = subnavi ? subnavi.top - (parseFloat(header.css('border-top-width')) < 1 ? 1 : 0) : 0,
            run = $('div.setapdf-demos div.run:first-child'),
            offsetRun = run.length == 1 ? run.offset().top : 0,
            heightRun = $('ul', run).height();

        var f = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > offsetTop) {
                $('#subnavi')
                    .addClass('fly')
                    .css('top', '0px');

            } else {
                $('#subnavi')
                    .removeClass('fly')
                    .css('top', Math.floor(offsetTop) + 'px');
            }

            if (offsetRun) {
                if (scrollTop > offsetRun - 50) {
                    if (run.hasClass('bottom'))
                        return;

                    var maxHeight = run.next().height();
                    $('ul', run).css('margin-top', Math.min(maxHeight - heightRun, scrollTop - offsetRun + 50));
                } else {
                    $('ul', run).css('margin-top', 0);
                }
            }
        };

        $(window).scroll(f).resize(f).resize();

        $('#content div.product a, #subnavi a, #content .pageNavigation a').click(function () {
            if (this.hash || this.href.indexOf('mailto:') === 0) {
                return true;
            }

            var scrollTop = $(window).scrollTop();
            if (scrollTop > 0)
                this.hash = 'p-' + scrollTop;
        });

        var hash = window.location.hash,
            h = hash.match(/p\-(\d*)/);
        if (h != null) {
            $(window).scrollTop(Math.min(offsetTop, h[1]));
        }
    }, 100);

    if (typeof CodeMirror != "undefined" && CodeMirror.colorize) {
        CodeMirror.colorize();
    }

    $('#loginLink').click(function () {
        $('#loginBox').toggleClass('active');
        window.setTimeout(function () {
            $('#email').focus();
        }, 100);

        return isAndroid;
    });

    if (typeof $.blockUI != 'undefined') {
        $.blockUI.defaults.message = '<img src="/style/img/ajax-loader-big.gif" />';
        $.extend($.blockUI.defaults.css, {
            backgroundColor: 'transparent',
            border: 'none',
            color: '#fff'
        });
    }

    if (typeof Clipboard != 'undefined') {
        newClipboard('div.code .buttons .copy');
    }
});

function newClipboard(selector) {
    var timer;
    var clipboard = new Clipboard(selector,
        {
            text: function(trigger) {
                var text = $(trigger).parents('.buttons').nextAll('.code').text();
                text = text.replace(/\n/g, "\r\n");
                return text;
            }
        }
    );

    clipboard.on('success', function(event) {
        var button = $(event.trigger);
        button.addClass('copied');
        button.text('copied');
        window.clearTimeout(timer);
        timer = window.setTimeout(function() {
            button.removeClass('copied');
            button.text('copy');
        }, 3000);
    });

    clipboard.on('error', function(event) {
        var button = $(event.trigger);
        button.text('Unable to copy, sorry. Please copy manually.');
        window.clearTimeout(timer);
        timer = window.setTimeout(function() {
            button.text('copy');
        }, 3000);
    });
}