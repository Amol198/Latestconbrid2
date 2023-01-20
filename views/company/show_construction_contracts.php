<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">

	<h1 style="text-align: center;">Search Contract</h1>

	<form enctype='multipart/form-data'
			method="POST"
		action="">
		<div style="margin: 50px;">
			<div class="row">
			 <div class="col-md-3 form-group">
        <label>Select state</label>
<select id="state_id" onchange="get_cities()" class="form-control">
    <option value="0">
        Select state</option>
    <?php foreach($states as $row){?>
    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
    
    <?php }?>
    
</select>    </div>
    
    			 <div class="col-md-3 form-group">
        <label>Select City</label>
<select id="city_id" class="form-control">
    <option value="0">
        Select city</option>
</select>    </div> 
<div class="col-md-3 form-group">
        <label>Action</label><br>
<button onclick="get_individuals()" type="button" class="btn btn-info">Show</button>
    </div>
    </div>	
	<div class="col-md-12 form-group">
	 		     <p style="display:none" id="result_count">There are <b>0</b> matches found for your search</p>
    </div>
<img style="width:70px; display:none;" id="loader_gif" src="<?php echo base_url('images/loader.gif')?>">

<button type="button" class="btn btn-primary" style="display:none;" onclick="generate_post()" id="send_notification_button"></button>

		</div>
	</form>
	
</section>
<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('.select2').select2();

function get_cities(){
    $.ajax({
                   url: '<?php echo base_url("Services/get_cities")?>',
                   data: {"state_id":$("#state_id").val()},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {

 var returnarray=JSON.parse(returnHtml);
option_append="<option value='0'>Select city</option>";
                            $.each(returnarray, function( index, value ) {
                                option_append+="<option value='"+value.city_name+"'>"+value.city_name+"</option>";

                                
                            });
$("#city_id").html(option_append);
              }
              });
}
function get_individuals(){
         $("#send_notification_button").css("display","none");

    var key_id="";
    var technical_id="";
    if($("#key_id").val()!=""){
    key_id=$("#key_id").val();
        }
        if($("#technical_id").val()!=""){
    technical_id=$("#technical_id").val();
        }
    var job_designation=$("#job_designation").val();
    var job_type=$("#job_type").val();
    var individual_type=$("#individual_type").val();
    var city_id=$("#city_id").val();
    var state_id=$("#state_id").val();
    if(state_id==0){
        alert("Please select state");
        return false;
    }else if(city_id==0){
        alert("Please select city");
    return false;
        }
    else{
    $("#loader_gif").css("display","block");
    $.ajax({
                   url: '<?php echo base_url("Services/get_individuals")?>',
                   data: {"state_id":state_id,"key_id":key_id,"technical_id":technical_id,"city_id":city_id,"individual_type":individual_type,"job_designation":job_designation,"job_type":job_type},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {

 var returnarray=JSON.parse(returnHtml);

if(typeof(returnarray[0]['total_individuals']) != "undefined" && returnarray[0]['total_individuals'] !== null){
    $("#result_count").html('There are <b>'+returnarray[0]['total_individuals']+'</b> matches found for your search');
       if(returnarray[0]['total_individuals']!=0){
         $(".filter_div").css("display","block"); 
         $("#send_notification_button").css("display","block");
         $("#send_notification_button").text("Send notification to "+returnarray[0]['total_individuals']+" Individuals");
       }
       else{

         
       }

   
}else{
$("#result_count").html("There are <b>0</b> matches found for your search");
}
$("#result_count").css("display","block");

    $("#loader_gif").css("display","none"); 
              }
              });
}
}
function generate_post(){
    var key_id="";
    var technical_id="";
    if($("#key_id").val()!=""){
    key_id=$("#key_id").val();
        }
        if($("#technical_id").val()!=""){
    technical_id=$("#technical_id").val();
        }
    var job_designation=$("#job_designation").val();
    var job_type=$("#job_type").val();
    var individual_type=$("#individual_type").val();
    var city_id=$("#city_id").val();
    var state_id=$("#state_id").val();
    if(state_id==0){
        alert("Please select state");
        return false;
    }else if(city_id==0){
        alert("Please select city");
    return false;
        }
    else{
    $("#loader_gif").css("display","block");
    $.ajax({
                   url: '<?php echo base_url("Services/generate_post")?>',
                   data: {"state_id":state_id,"key_id":key_id,"technical_id":technical_id,"city_id":city_id,"individual_type":individual_type,"job_designation":job_designation,"job_type":job_type},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {
       setTimeout(function(){
            window.location.href = '<?php echo base_url("Dashboard")?>';
         }, 3000);
   
 

              }
              });
}
}
</script>

