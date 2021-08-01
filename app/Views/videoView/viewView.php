<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->include('template/css')  ?>
</head>

<body id="page-top">
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content" class="jusutify-content-center">
                <div id="player" data-VideoID="<?= $videoID  ?>"></div>
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

        const videoId = $('#player').attr('data-VideoID')

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '390',
                width: '640',
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
            event.target.playVideo();
        }

        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var done = false;
        var state = 0,
            YTplayer, bad_state = 0,
            bad_state_max = 4,
            was_started = 0;
        var time = 50;

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
                setTimeout(stopVideo, 6000);
                done = true;
                state = event.data
                ticker()
            }
            state = event.data
            console.log('event.data: ', event.data);
        }

        function stopVideo() {
            player.stopVideo();
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
                    console.log('ses açın');
                } else {
                    time--;
                    console.log('time: ', time);
                }
            }

            if (!state && was_started) {
                player.playVideo();
            }
            if (time >= 0) {
                setTimeout(function() {
                    ticker()
                }, 1000);
            }

        }
    </script>
</body>

</html>