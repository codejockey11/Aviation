<!DOCTYPE html>
<html>

<head>
<title>Movie</title>
<meta charset="UTF-8">
<style>
body
{
	background-color:black;
}
table
{
	border-collapse: collapse;
}
.video
{
	border:1px solid red;
}
.controls
{
	width:100%;
}
.timer
{
	color:white;
	font-family:Arial;
	font-size:12px;
	text-align:center;
}
.slider
{
	width:630px;
}
/* Don't display default media controls during fullscreen */
::-webkit-media-controls
{
  display:none !important;
}
.list
{
	font-family:Arial;
	font-size:14px;
	vertical-align:top;
}
.list span
{
	background-color:gray;
	border: 1px solid black;
	display: block;
	margin-bottom: 3px;
	padding:3px;
}
.list span:hover
{
	background-color:gold;
	cursor:pointer;
}
.title
{
	border:1px solid red;
	color:white;
}
.title span
{
	display: block;
}
</style>
<script type="text/javascript">
var video = null;

class Video
{
    constructor(size, source)
	{
		document.getElementById('title').innerHTML = source;

		this.duration = document.getElementById('duration');

		// tbody is inserted even though not in the original html source
		this.controls = document.getElementById('controls').querySelectorAll('table > tbody > tr > td > img');

		this.playButton = null;
		this.stopButton = null;
		this.muteButton = null;

		for (var i = 0; i < this.controls.length; i++)
		{
			if (this.controls[i].id === 'play')
			{
				this.playButton = this.controls[i];

				this.playButton.src = 'images/play.svg';
			}
			if (this.controls[i].id === 'stop')
			{
				this.stopButton = this.controls[i];

                this.stopButton.src = 'images/stop.svg';
			}
			if (this.controls[i].id === 'mute')
			{
				this.muteButton = this.controls[i];

                this.muteButton.src = 'images/mute.svg';
			}
		}

		this.slider = document.getElementById('controls').querySelectorAll('table > tbody > tr > td > input');
		this.slider = this.slider[0];

		// need to make a reference to the parent object so the parent methods can be called from event handlers
		this.slider.parentContainer = this;
		this.slider.addEventListener('input', function ()
		{
			// calling parent class method
            this.parentContainer.UpdateSlider();
		});

		this.timer = document.getElementById('timer');

        this.isPlaying = false;

		this.video = document.getElementById('video');

		// another reference to the parent object
		this.video.parentContainer = this;

		if (size > 0)
        {
            this.video.width = size * 16;
            this.video.height = size * 9;
        }

		var t = source.split('.');
        this.video.type = 'video/' + t[1];

        this.video.src = source;

        this.video.controls = false;
        this.video.disablePictureInPicture = true;
        this.video.preload = 'metadata';
        this.video.controlslist = 'nodownload';

        this.video.addEventListener('ended', function ()
        {
			this.isPlaying = false;

			this.parentContainer.playButton.src = 'images/play.svg';
        });

        this.video.addEventListener('loadedmetadata', function ()
        {
			this.parentContainer.UpdateTimer();
        });

        this.video.addEventListener('pause', function ()
        {
			this.isPlaying = false;
        });

        this.video.addEventListener('play', function ()
        {
			this.isPlaying = true;
        });

        this.video.addEventListener('playing', function ()
        {
			this.isPlaying = true;
        });

        this.video.addEventListener('seeking', function ()
        {
			this.pause();

			this.parentContainer.playButton.src = 'images/play.svg';
        });

        this.video.addEventListener('timeupdate', function ()
        {
			this.parentContainer.UpdateTimer();
        });
    }

	UpdateTimer()
    {
		this.timer.innerHTML = (this.video.duration - this.video.currentTime).toFixed(2);

		this.slider.value = (this.video.currentTime / this.video.duration).toFixed(2) * 100;

        this.duration.innerHTML = this.timer.innerHTML;
    }

    UpdateSlider()
	{
		this.video.currentTime = (this.video.duration * this.slider.value / 100);
    }

	TogglePlayingState()
	{
		if (this.video.isPlaying === true)
		{
			this.video.pause();

			this.video.isPlaying = false;

            this.playButton.src = 'images/play.svg';
		}
		else
		{
			this.video.play();

			this.video.isPlaying = true;

            this.playButton.src = 'images/pause.svg';
		}
	}

	Stop()
    {
		this.playButton.src = 'images/play.svg';

		this.slider.value = 0;

		this.video.pause();
		this.video.currentTime = 0;
	}

	ToggleMuteState()
	{
		if (this.video.muted === true)
		{
			this.video.muted = false;

			this.muteButton.src = 'images/mute.svg';
		}
		else
		{
			this.video.muted = true;

            this.muteButton.src = 'images/muted.svg';
		}
	}

	ToggleFullscreen()
	{
		this.video.requestFullscreen();
	}
}

function JavascriptInit()
{
    video = new Video(50, 'http://127.0.0.1:26105/Captures/Touchdown.mp4');
}

function SetVideoSourceName(n)
{
	video = new Video(50, n);
	
	console.log(video.video.src);
}
</script>
</head>

<body onload="JavascriptInit()">

<table>
	<tr>
		<td class="video">
			<table>
				<tr>
					<td colspan="3">
						<video id="video" onclick="video.TogglePlayingState();"></video>
					</td>
				</tr>
				<tr>
					<td id="controls" class="controls">
						<table>
							<tr>
								<td width="25">
									<img id="play" onclick="video.TogglePlayingState();" src="images/play.svg" width="25" height="25" />
								</td>
								<td width="25">
									<img id="stop" onclick="video.Stop();" src="images/stop.svg" width="25" height="25" />
								</td>
								<td width="25">
									<img id="mute" onclick="video.ToggleMuteState();" src="images/mute.svg" width="25" height="25" />
								</td>
								<td>
									<input id="range" class="slider" type="range" min="0" max="100" value="0">
								</td>
								<td class="timer" id="timer">
								</td>
								<td width="25">
									<img id="fullscreen" onclick="video.ToggleFullscreen();" src="images/fullscreen.svg" width="25" height="25" />
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
		<td class="list">
			<span onclick="SetVideoSourceName('http://127.0.0.1:26105/Captures/landingOnMatilda.mp4');">landingOnMatilda</span>
			<span onclick="SetVideoSourceName('http://127.0.0.1:26105/Captures/RIFT 3_2_2018 4_35_30 PM.mp4');">RIFT 3_2_2018 4_35_30 PM</span>
			<span onclick="SetVideoSourceName('http://127.0.0.1:26105/Captures/RIFT 3_2_2018 4_45_16 PM.mp4');">RIFT 3_2_2018 4_45_16 PM</span>
			<span onclick="SetVideoSourceName('http://127.0.0.1:26105/Captures/RIFT 3_2_2018 4_51_51 PM.mp4');">RIFT 3_2_2018 4_51_51 PM</span>
			<span onclick="SetVideoSourceName('http://127.0.0.1:26105/Captures/RIFT 3_3_2018 3_37_17 PM.mp4');">RIFT 3_3_2018 3_37_17 PM</span>
			<span onclick="SetVideoSourceName('http://127.0.0.1:26105/Captures/The Dry, No-Mouth Cast Net Method.mp4');">Cast Net</span>
			<span onclick="SetVideoSourceName('http://127.0.0.1:26105/Captures/Touchdown.mp4');">Touchdown</span>
			<span onclick="SetVideoSourceName('video.php?d=x7fBv9qw3');">Video with alias 128MB limit<br/>http://php.net/memory-limit</span>
			<span onclick="SetVideoSourceName('http://127.0.0.1:26105/Captures/WOTImmortalEasy.mp4');">WOTImmortalEasy</span>
			<span onclick="SetVideoSourceName('http://127.0.0.1:26105/Captures/WOTImmortalHard.mp4');">WOTImmortalHard</span>
			<span onclick="SetVideoSourceName('http://127.0.0.1:26105/Captures/ZhaitanBattle.mp4');">ZhaitanBattle</span>
		</td>
	</tr>
	<tr>
		<td class="title">
			<span id="title"></span>
			<span id="duration"></span>
		</td>
	</tr>
</table>

</body>
</html>