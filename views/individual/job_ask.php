<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">

	<h1 style="text-align: center;">Ask a job</h1>
<button onclick="window.location.href='<?=base_url(index_page()."Services/company_job_post_details")?>'" type="button" class="btn btn-primary">View Job Ask Details</button>

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

			 <div class="col-md-3 form-group">
        <label>Select CTC range</label>
<select id="annual_ctc" class="form-control">
    <option value=""></option>
    <option value="0 and 500000">0-5 Lakhs</option>
    <option value="500000 and 1000000">5-10 Lakhs</option>
    <option value="1000000 and 1500000">10-15 Lakhs</option>
    <option value="1500000 and 2000000">15-20 Lakhs</option>
    <option value="2000000 and 10000000000">20 Lakhs and above</option>
    
</select>    </div>
<div class="col-md-2 form-group">
        <label>Action</label><br>
<button onclick="show_job_posts()" type="button" class="btn btn-info">Show</button>
    </div>
    </div>	
<div class="col-md-12 form-group">
	 		     <p style="display:none" id="result_count">There are <b>0</b> matches found for your search</p>
    </div>
<img style="width:70px; display:none;" id="loader_gif" src="<?php echo base_url('images/loader.gif')?>">

<button type="button" class="btn btn-primary" style="display:none;" onclick="generate_post()" id="send_notification_button"></button>

		</div>
</section>
<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('.select2').select2();
function show_job_posts(){
    $.ajax({
                   url: '<?php echo base_url("JobAsk/show_job_posts")?>',
                   data: {"annual_ctc":$("#annual_ctc").val()},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {
 var returnarray=JSON.parse(returnHtml);
//console.log(returnarray);
 $("#result_count").html('There are <b>'+returnarray+'</b> matches found for your search');
   $("#result_count").css("display","block");
   
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

