<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->include('template/css')  ?>
    <style>
        body {
            background-color: #121212;
            color: white;
        }

        .swal2-input:focus,
        .swal2-textarea:focus {
            color: white;
        }

        .card {
            border: none;
            margin-top: 5rem;
        }

        .card-body {
            border: none;
        }

        .dark-mode {
            background: #222 !important;
        }

        .message {
            background: #ffc50a;
            padding: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            border-radius: 0.5rem;
            text-align: center;
            display: none;
        }

        .duration {
            font-size: 1.5rem;
        }

        .frm_form_field .grecaptcha-badge {
            display: none;
        }
    </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body id="page-top" class="dark-mode" data-url="<?= base_url()  ?>">
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div class="container-fluid  ">
        <!-- Content Wrapper -->
        <div class="card">
            <div class="card-header dark-mode">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="message">
                        </div>
                        <div class="duration">
                            <?= $video['duration']  ?> sec.
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body dark-mode justify-content-center text-center ">
                <div class="container">
                    <div id="player" data-duration="<?= $video['duration']  ?>" data-VideoID="<?= $video['videoId']  ?>" data-ID="<?= $video['ID']  ?>"></div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('template/js')  ?>
    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script')
        tag.src = "https://www.youtube.com/iframe_api"
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;
        
        const videoId = $('#player').attr('data-VideoID'),
              baseUrl = $('body').data('url'),
              videoDataID = $('#player').attr('data-ID')
        let duration = $('#player').attr('data-duration')
        var done = false,
            state = 0,
            YTplayer,
            bad_state = 0,
            bad_state_max = 4,
            was_started = 0;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: 500,
                width: '100%',
                videoId: videoId,
                playerVars: {
                    'playsinline': 1
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }
        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            //  event.target.playVideo();
        }
        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
                done = true;
                state = event.data
                ticker()
            }
            state = event.data
            console.log('state: ', state);
        }

        function stopVideo() {
            // player.stopVideo();
        }

        function ticker() {
            if (!document.hasFocus() && player && player.pauseVideo) {
                console.log('ticker - error 1', !document.hasFocus(), player && player.pauseVideo)
                setTimeout(function() {
                    ticker()
                }, 1000);
                return;
            }
            if (state === 1) {
                was_started = 1;
                if (player.isMuted() || player.getVolume() < 15) {
                    $('.message').text('Ses açın');
                    $('.message').fadeIn();
                } else {
                    was_started = 1
                    duration--;
                    $('.message').fadeOut();
                    $('.duration').text(duration + ' sec.');
                }
            }
            if (!state && was_started) {
                player.playVideo();
            }
            if (duration >= 1) {
                setTimeout(function() {
                    ticker()
                }, 1000);
            } else {

                let num1 = parseInt(Math.random() * 100),
                    num2 = parseInt(Math.random() * 100)
                Swal.fire({
                    title: `Submit ${num1} + ${num2} = ?`,
                    input: 'text',
                    inputAttributes: {
                        autocapitalize: 'off'
                    },
                    confirmButtonText: 'Answer',
                    showLoaderOnConfirm: true,
                    preConfirm: (ans) => {
                        return ans
                    },
                }).then((result) => {
                    console.log('result: ', result);
                    if (result.isConfirmed) {
                        if (result.value == num1 + num2) {
                            //! cevap doğru cüzdanı güncelle
                            $.post(baseUrl + '/api/updateWallet', {
                                videoId: videoDataID
                            }, function(req) {
                                $('.message').text(`You earned ${req.earnedMoney}`).fadeIn();
                                $('.duration').hide();
                            })
                        } else {
                            //! cevap yanlış uyarı mesajını ver
                            $('.message').text(`Ansver failed`).fadeIn();
                            $('.duration').hide();
                        }
                    } else {
                        $('.message').text(`Ansver failed`).fadeIn();
                        $('.duration').hide();
                    }
                })
            }
        }
    </script>
</body>

</html>