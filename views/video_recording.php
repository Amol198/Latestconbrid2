<?php include 'common/header.php';?>
<?php include 'common/left.php';?>
<style>p{
font-size:20px;}
a.disabled {
  pointer-events: none;
  cursor: default;
}

</style>
<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">

<button id="start-camera">Start Camera</button>
<video id="video" width="320" height="240" autoplay></video>
<button id="start-record">Start Recording</button>
<button id="stop-record">Stop Recording</button>
<a id="download-video" download="test.webm">Download Video</a>
<form action="https://conbrid.unitglo.com/Challenge_Members/accept_video_recording" method="post">
    <input type="file" id="abc" name="abc">
    <input type="submit" value="save" class="btn btn-info">    
    
</form>
</section>
<script>
    let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let start_button = document.querySelector("#start-record");
let stop_button = document.querySelector("#stop-record");
let download_link = document.querySelector("#download-video");

let camera_stream = null;
let media_recorder = null;
let blobs_recorded = [];

camera_button.addEventListener('click', async function() {
   	camera_stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
	video.srcObject = camera_stream;
});

start_button.addEventListener('click', function() {
    // set MIME type of recording as video/webm
    media_recorder = new MediaRecorder(camera_stream, { mimeType: 'video/webm' });

    // event : new recorded video blob available 
    media_recorder.addEventListener('dataavailable', function(e) {
		blobs_recorded.push(e.data);
    });

    // event : recording stopped & all blobs sent
    media_recorder.addEventListener('stop', function() {
    	// create local object URL from the recorded video blobs
    	let video_local = URL.createObjectURL(new Blob(blobs_recorded, { type: 'video/webm' }));
    	download_link.href = video_local;
    console.log(video_local);
    });

    // start recording with each recorded blob having 1 second video
    media_recorder.start(1000);
});

stop_button.addEventListener('click', function() {
	media_recorder.stop(); 
});
    
</script>

										<?php include 'common/footer.php';?>