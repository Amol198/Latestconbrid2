<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">
	<h1 style="text-align: center;">Video and Address Verification</h1>
<h5 style="color:red;text-align: center;" id="location_h5"></h5>


	<input type="hidden" id="demo" name="location_address"> 
	<div id="main_div" style="margin: 50px;">
		<div class="row">
			<div class="col-md-6 form-group">
				<button class="btn btn-success"  id="start-camera">Start Camera</button>
				<button class="btn btn-info"  id="start-record">Start Recording</button>
				<button class="btn btn-primary" >Switch Camera</button>
				<input type="hidden" id="camera_position" value="user">
				<button class="btn btn-danger" style="display: none;"
					id="stop-record">Stop Recording</button>
				<a id="download-video" style="display: none;" download="test.webm">Download
					Video</a><br>
				<video style="border: 1px solid;" id="video" width="320"
					height="240" autoplay></video>
				<label style="font-size: 12px; color: red;" id="video_label"></label>

				<div id="countdown"></div>
			</div>
			<div class="col-md-6 form-group">
				<label>Address<sup style="color: red;">*</sup></label>
				<textarea class="form-control" name="address1" id="address1"></textarea>
				<label style="font-size: 12px; color: red;" id="address1_label"></label>
				<br> <label>Landmark<sup style="color: red;">*</sup></label> <input
					class="form-control" name="landmark" id="landmark"> <label
					style="font-size: 12px; color: red;" id="landmark_label"></label> <br>
				<label>Area<sup style="color: red;">*</sup></label> <input
					class="form-control" name="area" id="area"> <label
					style="font-size: 12px; color: red;" id="area_label"></label> <br>
	<label>State<sup style="color: red;">*</sup></label> 
				<select id="state" name="state" onchange="get_cities()" class="form-control">
    <option value="">
        Select state</option>
    <?php foreach($states as $row){?>
    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
    
    <?php }?>
    
</select>
				
				
				<label
					style="font-size: 12px; color: red;" id="state_label"></label>
					<br>
				<label>City<sup style="color: red;">*</sup></label> <select id="city" class="form-control">
    <option value="">
        Select city</option>
</select>  <label
					style="font-size: 12px; color: red;" id="city_label"></label> <br>
			
				<label>Pincode<sup style="color: red;">*</sup></label> <input
					class="form-control" name="pincode" id="pincode"> <label
					style="font-size: 12px; color: red;" id="pincode_label"></label>

			</div>

		</div>

		<div class="row">

			<div class="col-md-12 form-group" style="text-align: right;">

				<button type="button" class="btn btn-info" onclick="submit_form()">Submit</button>
			</div>
		</div>
	</div>



</section>

<script>
$( document ).ready(function() {
getLocation();
setTimeout(function(){
  locationonoff();
 },3000);

});
function locationonoff(){
    var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
          if (mobile) {
         //     window.location.replace("https://google.com");
          }
          else{
         //  $("#main_div").html("<h5>Please do verification on mobile. You cannot do verification on laptop</h5>");
           // window.location.replace("https://google.com1");
          // return false;
          }
    if($("#demo").val()==""){
        $("#location_h5").html("Your have disabled your location . Please allow it and reload the page.");

        $("#main_div").css("display","none");
    }
}


var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.value = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  
  x.value = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;
getReverseGeocodingData(position.coords.latitude,position.coords.longitude);
    
}
function getReverseGeocodingData(lat, lng) { 
   
   $.get({ url: 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+lat+','+lng+'&sensor=false&key=AIzaSyDm3Bv4BEX9hJPtOxA3Y2HHPL6bLGjpvrI', success(data) {
    x.value=data.results[0].formatted_address;
    //setTimeout(function(){
    //  document.getElementById('start-camera').click();
 //}, 3000);
     
}});
}




//Video recording part starts

let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let start_button = document.querySelector("#start-record");
let stop_button = document.querySelector("#stop-record");
let download_link = document.querySelector("#download-video");
var file="blank";
let camera_stream = null;
let media_recorder = null;
let blobs_recorded = [];

camera_button.addEventListener('click', async function() {
var video_params={ audio: true, video: { facingMode: { exact: "user" } } };
   	camera_stream = await navigator.mediaDevices.getUserMedia(video_params);
	video.srcObject = camera_stream;
//	setTimeout(function(){document.getElementById('start-record').click();}, 5000);
});

/*function camera_position(){
    if($("#camera_position").val()=="user"){
    var video_params={ audio: true, video: { facingMode: { exact: "environment" } } };
   	camera_stream = await navigator.mediaDevices.getUserMedia(video_params);
	video.srcObject = camera_stream;
	$("#camera_position").val()=="environment";
    }else{
    var video_params={ audio: true, video: { facingMode: { exact: "user" } } };
   	camera_stream = await navigator.mediaDevices.getUserMedia(video_params);
	video.srcObject = camera_stream;
	$("#camera_position").val()=="user";
        
    }
}*/

start_button.addEventListener('click', function() {
    // set MIME type of recording as video/webm
    media_recorder = new MediaRecorder(camera_stream, { mimeType: 'video/webm' });
//console.log(media_recorder);
    // event : new recorded video blob available 
    media_recorder.addEventListener('dataavailable', function(e) {
		blobs_recorded.push(e.data);
    });
    var timeleft = 60;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("countdown").innerHTML = "Finished";
    document.getElementById('stop-record').click();
  } else {
    document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
  }
  timeleft -= 1;
}, 1000);
    

    // event : recording stopped & all blobs sent
    media_recorder.addEventListener('stop', function() { 
       // console.log(blobs_recorded);
        
    	// create local object URL from the recorded video blobs
    	var video_local = URL.createObjectURL(new Blob(blobs_recorded, { type: 'video/webm' }));
    	file = new File(blobs_recorded, 'recording.webm');

    	download_link.href = video_local;
    //	console.log(video_local);
  $("#download-video").css("display","block");
    });

    // start recording with each recorded blob having 1 second video
    media_recorder.start(1000);
});

stop_button.addEventListener('click', function() { 
	media_recorder.stop();  
});
function submit_form(){
var address1=$("#address1").val();
var landmark=$("#landmark").val();
var location_address=$("#demo").val();
var area=$("#area").val();
var city=$("#city").val();
var state=$("#state").val();
var pincode=$("#pincode").val();
$("#video_label").html("");
$("#address1_label").html("");
$("#landmark_label").html("");
$("#area_label").html("");
$("#city_label").html("");
$("#state_label").html("");
$("#pincode_label").html("");
if(file=="blank"){
$("#video_label").html("Please record a video");
return false;
}
if(address1==""){
$("#address1_label").html("Please enter address 1");
return false;
}else if(landmark==""){
$("#landmark_label").html("Please enter landmark");
return false;
}else if(area==""){
$("#area_label").html("Please enter area");
return false;
}else if(city==""){
$("#city_label").html("Please enter city");
return false;
}else if(state==""){
$("#state_label").html("Please enter state");
return false;
}else if(pincode==""){
$("#pincode_label").html("Please enter pincode");
return false;
}
else{
const formData = new FormData();

//console.log(file);
formData.append('files', file);
formData.append('address1', address1);
formData.append('landmark', landmark);
formData.append('area', area);
formData.append('city', city);
formData.append('state', state);
formData.append('pincode', pincode); 
formData.append('location_address', location_address); 

$.ajax({
                   url: '<?php echo base_url("Video_verification/accept_video")?>',
                   data: formData,
                   type: 'POST',
                   processData: false,
    contentType: false,
    async: false, success: function (returnHtml) {
                   	window.location.href="<?php echo base_url("Dashboard")?>";
              }
              });
}
    
}


</script>
<script language="javascript"> 
function get_cities(){
    $.ajax({
                   url: '<?php echo base_url("Video_verification/get_cities")?>',
                   data: {"state_id":$("#state").val()},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {

 var returnarray=JSON.parse(returnHtml);
option_append="<option value='0'>Select city</option>";
                            $.each(returnarray, function( index, value ) {
                                option_append+="<option value='"+value.city_name+"'>"+value.city_name+"</option>";

                                
                            });
$("#city").html(option_append);
              }
              });
}
 var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
          if (mobile) {
         //     window.location.replace("https://google.com");
          }
          else{
        //   $("#main_div").html("<h5>Please do verification on mobile. You cannot do verification on laptop</h5>");
           // window.location.replace("https://google.com1");
}
   </script>
