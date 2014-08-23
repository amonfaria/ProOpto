<!DOCTYPE html>
<head>
<title>WebCam Access</title>
</head>
<body>

<video autoplay></video>
<script src=”webcam.js”></script>
<canvas id=’canvas’ width=’300′
height=’300′></canvas>
<script language=’JavaScript’>
document.getElementById(‘capture’).onclick =
function() {
var video = document.
querySelector(‘video’);
var canvas = document.
getElementById(‘canvas’);
var ctx = canvas.getContext(’2d’);
ctx.drawImage(video,0,0);
}
</script>


<div id=”webcam”></div>
<p><a href=”JavaScript:webcam.
capture();void(0);”>Smile!</a></p>
<script type=”text/JavaScript”>
jQuery(“#webcam”).webcam({
width: 320,
height: 240,
mode: “callback”,
swffile: “jscam.swf”,
});
</script>


</body>
</html>
