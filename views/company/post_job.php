<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">

	<h1 style="text-align: center;">Post a job</h1>
<button onclick="window.location.href='<?=base_url(index_page()."Services/company_job_post_details")?>'" type="button" class="btn btn-primary">Job Post Details</button>

	<form enctype='multipart/form-data'
			method="POST"
		action="<?php echo base_url("index.php/Forms/accept_company_registration")?>">
		<div style="margin: 50px;">
			<div class="row">
			 <div class="col-md-3 form-group">
        <label>Select state</label>
<select id="state_id" onchange="get_cities()" class="form-control">
    <option value="0">
        Select state</option>
    <?php foreach($states as $row){?>
    <option value="<?php echo $row['id']?>"><?php echo $row['name']." <strong>(".$row['total_count'].")</strong>"?></option>
    
    <?php }?>
    
</select>    </div>
    
    			 <div class="col-md-3 form-group">
        <label>Select City</label>
<select onchange="get_sub_category()" id="city_id" class="form-control">
    <option value="0">
        Select city</option>
</select>    </div> 
<div class="col-md-2 form-group">
        <label>Type</label>
<select id="individual_type" class="form-control">
    <option value="Individual Civil engineer">Individual Civil engineer</option>
    <option value="Individual project manager">Individual project manager</option>
    <option value="Individual Architect">Individual Architect</option>
</select>    </div>	 
<div class="col-md-2 form-group">
        <label>Annual CTC (enter whole numbers)</label>
<input type="number" id="annual_ctc" name="annual_ctc" min="0" value="0" step="1">
</div> 

<div class="col-md-2 form-group">
        <label>Action</label><br>
<button onclick="get_individuals()" type="button" class="btn btn-info">Show</button>
    </div>
    </div>	<div class="row filter_div" style="display:none;">
         <div class="col-md-12 form-group">
	         <label>Enter Description</label><br>
	<textarea required name="job_description" id="job_description" class="form-control"></textarea></div>
         <div class="col-md-2 form-group">
              <label>Technical Skills</label><br>
		<select style="width:100px;" id="technical_id"  class="form-control select2" multiple>
    <?php foreach($technical_skills as $row){?>
    <option value="<?php echo $row['technical_skills']?>"><?php echo $row['technical_skills']?></option>
    
    <?php }?>
    
</select>  </div>   <div class="col-md-2 form-group">
	         <label>Key Skills</label><br>
	<select  style="width:100px;" id="key_id" class="form-control select2" multiple>
    <?php foreach($key_skills as $row){?>
    <option value="<?php echo $row['key_skills']?>"><?php echo $row['key_skills']?></option>
    
    <?php }?>
    
</select>  </div>
 <div class="col-md-2 form-group">
	         <label>Job designation</label>
<select class="form-control" id="job_designation" name="preferred_jd">
						<option value="">Please select</option>
						<option value="Assistant project manager">Assistant project
							manager</option>
						<option value="Project manager">Project manager</option>
						<option value="Senior or Chief project manager">Senior or Chief
							project manager</option>

					</select> </div>
 <div class="col-md-2 form-group">
	         <label>Job type</label>
	<select class="form-control"  id="job_type" name="preferred_job_type">
						<option value="">Please select</option>
						<option value="Part time">Part time</option>
						<option value="Full time">Full time</option>
						<option value="Internship">Internship</option>

					</select>  </div>
    <div class="col-md-3 form-group">
        <label>Action</label><br>
<button onclick="get_individuals()" type="button" class="btn btn-primary">Filter</button>
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
                   url: '<?php echo base_url("Services/get_cities_count")?>',
                   data: {"state_id":$("#state_id").val()},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {

 var returnarray=JSON.parse(returnHtml);
option_append="<option value='0'>Select city</option>";
                            $.each(returnarray, function( index, value ) {
                                option_append+="<option value='"+value.city_name+"'>"+value.city_name+" ("+value.total_count+")</option>";

                                
                            });
$("#city_id").html(option_append);
              }
              });
}
function get_sub_category(){
    $.ajax({
                   url: '<?php echo base_url("Services/get_sub_category_count")?>',
                   data: {"city_id":$("#city_id").val()},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {

 var returnarray=JSON.parse(returnHtml);
option_append="";
                            $.each(returnarray, function( index, value ) {
                                option_append+="<option value='"+value.sub_category+"'>"+value.sub_category+" ("+value.total_count+")</option>";

                                
                            });
$("#individual_type").html(option_append);
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
if($("#job_description").val()==""){
    alert("Please enter description");
    return false;
}

    var job_description=$("#job_description").val();
    var job_designation=$("#job_designation").val();
    var job_type=$("#job_type").val();
    var individual_type=$("#individual_type").val();
    var city_id=$("#city_id").val();
    var state_id=$("#state_id").val();
    var annual_ctc=$("#annual_ctc").val();
    if(state_id==0){
        alert("Please select state");
        return false;
    }else if(city_id==0){
        alert("Please select city");
    return false;
        }
        else if(annual_ctc<=0){
        alert("Please enter annual ctc");
    return false;
        }
    else{
    $("#loader_gif").css("display","block");
    $.ajax({
                   url: '<?php echo base_url("Services/generate_post")?>',
                   data: {"annual_ctc":annual_ctc,"job_description":job_description,"state_id":state_id,"key_id":key_id,"technical_id":technical_id,"city_id":city_id,"individual_type":individual_type,"job_designation":job_designation,"job_type":job_type},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {
                        console.log(returnHtml);
      setTimeout(function(){
            window.location.href = '<?php echo base_url("Dashboard")?>';
         }, 3000);
   
 

              }
              });
}
}
</script>

