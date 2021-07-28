jQuery(function ($) {
    var inj_assets = [];
    for (var i in inj_assets) {
        i = inj_assets[i];
        if (ajaxe.assets.indexOf(i) < 0) {
            let script = document.createElement('script');
            script.type = 'text/javascript';
            script.async = true;
            script.src = i;
            $('#assets').append(script);
            ajaxe.assets.push(i);
        }

    }
    function youtube_parser(url) {
        var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
        var match = url.match(regExp);
        return (match && match[7].length == 11) ? match[7] : false;
    }
    function parseURL(url) {
        var parser = document.createElement('a'),
            searchObject = {},
            queries, split, i;
        // Let the browser do the work
        parser.href = url;
        // Convert query string to object
        queries = parser.search.replace(/^\?/, '').split('&');
        for (i = 0; i < queries.length; i++) {
            split = queries[i].split('=');
            searchObject[split[0]] = split[1];
        }
        return {
            protocol: parser.protocol,
            host: parser.host,
            hostname: parser.hostname,
            port: parser.port,
            pathname: parser.pathname,
            search: parser.search,
            searchObject: searchObject,
            hash: parser.hash
        };
    }

    $(wrapErrors(function () {

        var state = 0, YTplayer, bad_state = 0,
            bad_state_max = 4, was_started = 0;
        var data = $('#videoframe').data();
        var width = $('#videoframe').width();
        var full_dur = data.dur;

        var link = parseURL(data.vid);
        if (!link.searchObject.t)
            link.searchObject.t = 0;

        window.onYouTubeIframeAPIReady = wrapErrors(function () {
            console.log('YTplayer attempt to load')
            // if( !('YT' in window) )
            //   setTimeout(wrapErrors(loadPlayer),500);

            YTplayer = new window.YT.Player('player', {
                height: width * 0.5625,
                width: width,
                videoId: youtube_parser(data.vid),
                rel: 0,
                showinfo: 0,
                loop: 1,
                playerVars: {
                    rel: 0,
                    showinfo: 0,
                    loop: 1,
                    start: link.searchObject.t
                },
                events: {
                    'onReady': function (event) {
                        console.log('YTplayer is ready');
                        //if( document.hasFocus() )
                        //    event.target.playVideo();
                        // event.target.seekTo(link.searchObject.t);
                    },
                    'onStateChange': function (event) {
                        console.log(event);
                        state = event.data;

                        if ($('#onboarding_close[data-id=15]').length)
                            $('#onboarding_close[data-id=15]').click().parent().remove();

                        // if( state === 0 )
                        //   YTplayer.playVideo();
                    }
                }
            });

        });

        ajaxe._dom.include('https://www.youtube.com/iframe_api', wrapErrors(function () {
            console.log('frame_api.js was loaded');
            // ajaxe._dom.include('https://apis.google.com/js/platform.js');
        }));


        function ticker() {
            if (!document.hasFocus() && YTplayer && YTplayer.pauseVideo) {
                console.log('ticker - error 1', !document.hasFocus(), YTplayer && YTplayer.pauseVideo)
                setTimeout(function () {
                    ticker()
                }, 1000);
                return;
            }

            console.log('ticker state', state)

            if (state === 1) {
                was_started = 1;
                if (YTplayer.isMuted() || YTplayer.getVolume() < 15) {
                    $('h1').addClass('red');
                    $('h2').text($('h2').data('vol')).show();
                } else {
                    $('h2').hide();
                    $('h1').removeClass('red');
                    data.dur--;
                }

                $('.btn-primary').removeClass('btn-primary').addClass('btn-secondary');
            }

            if (state === 2) {
                $('h1').addClass('red');
                $('h2').text($('h2').data('end')).show();
            }

            if (!state && was_started) {
                YTplayer.playVideo();
            }

            if (data.dur >= 0) {
                $('h1 span').text(data.dur);
                setTimeout(function () {
                    ticker()
                }, 1000);
            } else {
                $('#captcha-wrap').html('<iframe id="capt-frame" frameborder="0" src="https://captcha.surfe.be/?action=' + data.action + '&key=' + data.key + '&size=360x120" style="width:450px;height:140px"></iframe>').show();
                if ($('body').hasClass('is-mobile')) {
                    YTplayer.pauseVideo();
                    alert($('#videoframe').data('minimize'));
                }

                if ($('#onboarding_close[data-id=22]').length)
                    $('#onboarding_close[data-id=22]').click().parent().remove();
                if ($('#onboarding_close[data-id=23]').length)
                    $('#onboarding_close[data-id=23]').click().parent().remove();
            }

            if (full_dur - data.dur > 10 && $('#onboarding_close[data-id=16]').length) {
                $('#onboarding_close[data-id=16]').click().parent().remove();
            }

        }

        ticker();


        $('#close-btn').click(function () {
            $('#finish-wrap').hide();
            $('#video-btn-bottom').show();
        });



        window.addEventListener("message", function (e) {
            // console.log('postMessage',e)
            if (e.origin === 'https://www.youtube.com') {
                $('#frame-bug-msg').remove();
                var data;
                try {
                    data = JSON.parse(e.data);
                } catch (e) {
                    return;
                }
                if ('event' in data && data.event === 'onStateChange') {
                    var newstate = data.info;
                    setTimeout(function () {
                        if (state !== newstate)
                            state = newstate;
                    }, 500);
                }
            }

        }, false);

    }));


    window.addEventListener("message", function (e) {
        if (e.data === 'surfebe_video_done') {
            $('h1').text('');
            $('#captcha-wrap').hide();
            $('#finish-wrap').show();
            $('h2').text($('h2').data('fin')).show();

            if ($('#onboarding_close[data-id=24]').length)
                $('#onboarding_close[data-id=24]').click().parent().remove();
        }

    }, false);

    abuse = function () {
        ajaxe.query('/banner/video-abuse/?id=' + $('#videoframe').data('id'), function () {
            if (confirm($('#videoframe').data('abuse')))
                window.close();
        });
    }

    $(window).resize(function () {
        if ($('#player').length) {
            var w = $('#videoframe').width();
            $('#player').attr('width', parseInt(w)).attr('height', parseInt(w * 0.5625));
        }
    });

    window.addEventListener("unload", function () {
        if ($('#onboarding_close[data-id=25]').length)
            ajaxe.query('/onboarding-close/25');
        if ($('#onboarding_close[data-id=26]').length)
            ajaxe.query('/onboarding-close/26');
    });

});
