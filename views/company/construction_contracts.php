<style>
    sup{
        color:red;
    }
</style><section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">

	<h1 style="text-align: center;">Construction Contract</h1>

	<form onsubmit="return validation()" enctype='multipart/form-data'
			method="POST"
		action="<?php echo base_url("index.php/Services/accept_construction_contracts")?>">
		<div style="margin: 50px;">
			<div class="row">
			 <div class="col-md-6 form-group">
        <label>Type of Construction<sup>*</sup></label>
<select  id="type_of_construction" name="type_of_construction" class="form-control">
    <option value="">
   Please select</option>
    <option value="new_construction">
   New Construction</option>
    <option value="demolition_construction">
   Demolition with new construction</option>
    <option value="renovation">
   Renovation</option>
    
</select>    </div>
    </div>
    <div id="new_construction" style="display:none;"><hr><h3>Basic Details</h3><hr>
    <div class="row">

    			 <div class="col-md-3 form-group">
        <label>Type of Building / Property<sup>*</sup></label>
<select  id="type_of_property1" name="type_of_property1" class="form-control">
    <option value="">Please select</option>
    <option value="residential">Residential</option>
    <option value="commercial">Commercial</option>
    <option value="industrial">Industrial</option>
</select>    </div> 
	 <div class="col-md-3 form-group"  id="number_of_floors_div1" style="display:none;">
        <label>Number of floors<sup>*</sup></label>
<input  class="form-control" name="number_of_floors1" type="number"></div> 
<div class="col-md-3 form-group">
        <label>Total Sq.Ft. area of building (in sq.fts.)<sup>*</sup></label>
<input  class="form-control" name="total_sq_ft_area1" type="number"></div> 
<div class="col-md-3 form-group">
        <label>Total built up area (in sq.fts.)<sup>*</sup></label>
<input  class="form-control" name="total_builtup_area1" type="number"></div> 
		</div>
		
		<hr><h3>Type of contract willing to offer</h3><hr>
<div class="row">
		     <div class="col-md-3 form-group">
        <label>Select Contract Type<sup>*</sup></label>
        <select  id="contract1" name="contract_category1" class="form-control">
            <option value="">Please Select</option>
            <option value="Material supply Rate">Material supply Rate</option>
            <option value="Labour supply Rate">Labour supply Rate</option>
            <option value="Turnkey contract rate">Turnkey contract rate</option>
            <option value="Piecework contract rate">Piecework contract rate</option>
            <option value="Lumpsum contract">Lumpsum contract</option>
            <option value="Daily rate contract">Daily rate contract</option>
            
        </select>
 
</div>
 <div class="col-md-3 form-group" id="type_select1" style="text-align:left;">
</div>
 <div class="col-md-3 form-group" id="text_select1" style="text-align:left;">
 </div></div>

		<hr><h3>Scope of Work</h3><hr>
		<div class="row" id="new_scope_div1">
		</div>
		 <div class="row">
<div class="col-md-2"><input type="text" class="form-control" id="new_scope1" placeholder="Add New Scope"></div><div class="col-md-1"><a class="btn btn-info" id="new_scope_button1">Save</a></div>
		    </div>

		<hr><h3>Dates</h3><hr>
		
		<div class="row">
		    <div class="col-md-4">
		        <label>Project Start Date<sup>*</sup></label>
		        <input type="date"  name="project_start_date1" class="form-control">
		    </div>
		    		    <div class="col-md-4">
		        <label>Project End Date<sup>*</sup></label>
		        <input type="date"  name="project_end_date1" class="form-control">
		    </div>
		</div>
	
		
		</div>
	<div id="demolition_construction" style="display:none;"><hr><h3>Basic Details</h3><hr>
    <div class="row">

    			 <div class="col-md-3 form-group">
        <label>Type of Building / Property</label>
<select id="type_of_property2"  name="type_of_property2" class="form-control">
    <option value="">Please select</option>
    <option value="residential">Residential</option>
    <option value="commercial">Commercial</option>
    <option value="industrial">Industrial</option>
</select>    </div> 
	 <div class="col-md-3 form-group" id="number_of_floors_div2" style="display:none;">
        <label>Number of floors<sup>*</sup></label>
<input class="form-control"  name="number_of_floors2" type="number"></div> 
<div class="col-md-3 form-group">
        <label>Total Sq.Ft. area of building (in sq.fts.)<sup>*</sup></label>
<input class="form-control"  name="total_sq_ft_area2" type="number"></div> 
<div class="col-md-3 form-group">
        <label>Total built up area (in sq.fts.)<sup>*</sup></label>
<input class="form-control"  name="total_builtup_area2" type="number"></div> 

		</div>
     <hr> <h3>Separate demolition rate</h3>     <hr>

		<div class="row">
 
 <div class="col-md-3 form-group" style="text-align:left;">
        <label>Select Type<sup>*</sup></label>
    <select id=""  name="demolition_rate_type2" class="form-control">
     <option value="lumpsum">Lumpsum</option>
    <option value="daily_labour_rate">Daily Labour rate</option>
   <option value="sq_ft">Per Sq.Ft.</option>
    <option value="sq_m">Per Sq.M.</option>
</select>
    
</div>
 <div class="col-md-3 form-group" style="text-align:left;">
      <label>Enter rate<sup>*</sup></label>
        <input  class="form-control" name="demolition_rate2" type="number">
</div></div>
		<hr><h3>Type of contract preferred for the new construction excluding demolition</h3><hr>

<div class="row">
		     <div class="col-md-3 form-group">
      <label>Select Contract Type<sup>*</sup></label>
          <select  id="contract2" name="contract_category2" class="form-control">
            <option value="">Please Select</option>
            <option value="Material supply Rate">Material supply Rate</option>
            <option value="Labour supply Rate">Labour supply Rate</option>
            <option value="Turnkey contract rate">Turnkey contract rate</option>
            <option value="Piecework contract rate">Piecework contract rate</option>
            <option value="Lumpsum contract">Lumpsum contract</option>
            <option value="Daily rate contract">Daily rate contract</option>
            
        </select>
 
</div>
 <div class="col-md-3 form-group" id="type_select2" style="text-align:left;">
</div>
 <div class="col-md-3 form-group" id="text_select2" style="text-align:left;">
 </div></div>
		<hr><h3>Scope of Work</h3><hr>
		<div class="row" id="new_scope_div2">
		   
		  </div>
  
  
  
  
  <div class="row">
<div class="col-md-2"><input type="text" class="form-control" id="new_scope2" placeholder="Add New Scope"></div><div class="col-md-1"><a class="btn btn-info" id="new_scope_button2">Save</a></div>
		    </div>

		<hr><h3>Dates</h3><hr>
		
		<div class="row">
		    <div class="col-md-4">
		        <label>Project Start Date<sup>*</sup></label>
		        <input  type="date" name="project_start_date2" class="form-control">
		    </div>
		    		    <div class="col-md-4">
		        <label>Project End Date<sup>*</sup></label>
		        <input  type="date" name="project_end_date2" class="form-control">
		    </div>
		</div>
	
		
		</div>
	<div id="renovation" style="display:none;"><hr><h3>Basic Details</h3><hr>
    <div class="row">

    			 <div class="col-md-3 form-group">
        <label>Type of Building / Property<sup>*</sup></label>
<select  id="type_of_property3" name="type_of_property3" class="form-control">
    <option value="0">Please select</option>
    <option value="residential">Residential</option>
    <option value="commercial">Commercial</option>
    <option value="industrial">Industrial</option>
</select>    </div> 
	 <div class="col-md-3 form-group"  id="number_of_floors_div3" style="display:none;">
        <label>Number of floors<sup>*</sup></label>
<input  class="form-control" name="number_of_floors3" type="number"></div> 
 <div class="col-md-2 form-group" style="text-align:left;">
        <label>Select Type of contract<sup>*</sup></label>
    <select   id="type_of_contract" name="type_of_contract" class="form-control">
    <option value="lumpsum">Lumpsum</option>
    <option value="daily_labour_rate">Daily Labour rate</option>
    <option value="sq_ft">Per Sq.Ft.</option>
    <option value="sq_m">Per Sq.M.</option>
        <option value="item_rate">Item rate contract</option>
</select>
    
</div>
<div class="col-md-3 form-group" id="rate_of_contract_div">
        <label>Rate of contract<sup>*</sup></label>
        <input  class="form-control" name="rate_of_contract" type="number">
</div>

		</div>
		
		<hr><h3>Dates</h3><hr>
		
		<div class="row">
		    <div class="col-md-4">
		        <label>Project Start Date<sup>*</sup></label>
		        <input  type="date" name="project_start_date3" class="form-control">
		    </div>
		    		    <div class="col-md-4">
		        <label>Project End Date<sup>*</sup></label>
		        <input   type="date" name="project_end_date3" class="form-control">
		    </div>
		</div>
	

		</div>
		<hr><h3>Describe about your Construction contract<sup>*</sup></h3><hr>
		<div class="row">
		    <div class="col-md-6">
		<textarea  class="form-control" name="description" rows="6"></textarea>
		</div></div>
		
		
		
    <div id="video_verification_div"  style="display:none;">		
			<hr><h3>Video and Address Verification</h3><hr>

	<div class="row">
			<div class="col-md-6 form-group">
				<a class="btn btn-success"  id="start-camera">Start Camera</a>
				<a class="btn btn-info"  id="start-record">Start Recording</a>
				<a class="btn btn-primary" >Switch Camera</a>
				<input type="hidden" id="camera_position" value="user">
				<a class="btn btn-danger" style="display: none;"
					id="stop-record">Stop Recording</a>
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
				<select id="state_id" name="state_id" onchange="get_cities()" class="form-control">
    <option value="">
        Select state</option>
    <?php foreach($states as $row){?>
    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
    
    <?php }?>
    
</select>
				
				
				<label
					style="font-size: 12px; color: red;" id="state_label"></label>
					<br>
				<label>City<sup style="color: red;">*</sup></label> <select id="city_id" name="city_id" class="form-control">
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
		    <div class="col-md-11" style="text-align:right;"><br>
		    <input type="submit" class="btn btn-default" value="Submit">
		    
		    </div>
		    
		</div>
</div>
</div></form>
	
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
$('#type_of_construction').on('change', function() {
 if(this.value=="new_construction"){
       $.ajax({
                   url: '<?php echo base_url("Services/get_scope_of_work")?>',
                   data: {"construction_type":"1"},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {
$("#new_scope_div1").html("");
  var returnarray=JSON.parse(returnHtml);
                            $.each(returnarray, function( index, value ) {
$("#new_scope_div1").append('  <div class="col-md-2"><input type="checkbox" name="scope_of_work[]" value="'+value.id+'">&nbsp;&nbsp; '+value.name+'</div>');
});
              }
              });
     $("#video_verification_div").show();
     $("#new_construction").show();
     $("#demolition_construction").hide();
     $("#renovation").hide();
      }else if(this.value=="demolition_construction"){
           $.ajax({
                   url: '<?php echo base_url("Services/get_scope_of_work")?>',
                   data: {"construction_type":"2"},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {
$("#new_scope_div2").html("");
  var returnarray=JSON.parse(returnHtml);
                            $.each(returnarray, function( index, value ) {
$("#new_scope_div2").append('  <div class="col-md-2"><input type="checkbox" name="scope_of_work[]" value="'+value.id+'">&nbsp;&nbsp; '+value.name+'</div>');
});
              }
              });
     $("#video_verification_div").show();
     $("#new_construction").hide();
     $("#demolition_construction").show();
     $("#renovation").hide();
     }
     else if(this.value=="renovation"){
     $("#video_verification_div").show();
     $("#new_construction").hide();
     $("#demolition_construction").hide();
     $("#renovation").show();
     }
     else{
     $("#video_verification_div").hide();
     $("#new_construction").hide();
     $("#demolition_construction").hide();
     $("#renovation").hide();
         
     }

});
$('#type_of_property1').on('change', function() {
    if(this.value=="industrial"){
         $("#number_of_floors_div1").hide();
    
    }else{
    $("#number_of_floors_div1").show();
        
    }
});
$('#type_of_property2').on('change', function() {
    if(this.value=="industrial"){
         $("#number_of_floors_div2").hide();
    
    }else{
    $("#number_of_floors_div2").show();
        
    }
});
$('#type_of_property3').on('change', function() {
    if(this.value=="industrial"){
         $("#number_of_floors_div3").hide();
    
    }else{
    $("#number_of_floors_div3").show();
        
    }
});
$('#type_of_contract').on('change', function() {
    if(this.value=="item_rate"){
         $("#rate_of_contract_div").hide();
    
    }else{
    $("#rate_of_contract_div").show();
        
    }
});
$('#new_scope_button2').on('click', function() {
    if($("#new_scope2").val()==""){
alert("Please enter in Scope of work");
    
    }else{
$("#new_scope_div2").append(' <div class="col-md-2"><input type="checkbox">&nbsp;&nbsp; '+$("#new_scope2").val()+'</div>');
        $("#new_scope2").val("");
    }
});
$('#new_scope_button1').on('click', function() {
    if($("#new_scope1").val()==""){
alert("Please enter in Scope of work");
    
    }else{
$("#new_scope_div1").append(' <div class="col-md-2"><input type="checkbox">&nbsp;&nbsp; '+$("#new_scope1").val()+'</div>');
        $("#new_scope1").val("");
    }
});

$('#contract1').on('change', function() {
    $("#type_select1").html("");
    $("#text_select1").html("");
if(this.value=="Material supply Rate" || this.value=="Labour supply Rate" || this.value=="Piecework contract rate"){
   $("#type_select1").html('<label>Select Type</label><select  name="contract_type" class="form-control"><option value="sq_ft">Per Sq.Ft.</option><option value="sq_m">Per Sq.M.</option></select>');
   $("#text_select1").html(' <label>Enter rate</label><input  class="form-control" name="contract_rate" type="number">');
}else if(this.value=="Turnkey contract rate"){
   $("#type_select1").html('<label>Select Type</label><select   name="contract_type" class="form-control"><option value="sq_ft">Per Sq.Ft.</option><option value="sq_m">Per Sq.M.</option><option value="daily_labour_rate">Daily Labour Rate</option><option value="lumpsum">Lumpsum</option></select>');
   $("#text_select1").html(' <label>Enter rate</label><input  class="form-control" name="contract_rate" type="number">');
}else if(this.value=="Lumpsum contract" || this.value=="Daily rate contract"){
   $("#type_select1").html(' <label>Enter rate</label><input   class="form-control" name="contract_rate" type="number">');
}});
$('#contract2').on('change', function() {
    $("#type_select2").html("");
    $("#text_select2").html("");
if(this.value=="Material supply Rate" || this.value=="Labour supply Rate" || this.value=="Piecework contract rate"){
   $("#type_select2").html('<label>Select Type</label><select   name="contract_type" class="form-control"><option value="sq_ft">Per Sq.Ft.</option><option value="sq_m">Per Sq.M.</option></select>');
   $("#text_select2").html(' <label>Enter rate</label><input  class="form-control" name="contract_rate" type="number">');
}else if(this.value=="Turnkey contract rate"){
   $("#type_select2").html('<label>Select Type</label><select   name="contract_type" class="form-control"><option value="sq_ft">Per Sq.Ft.</option><option value="sq_m">Per Sq.M.</option><option value="daily_labour_rate">Daily Labour Rate</option><option value="lumpsum">Lumpsum</option></select>');
   $("#text_select2").html(' <label>Enter rate</label><input  class="form-control" name="contract_rate" type="number">');
}else if(this.value=="Lumpsum contract" || this.value=="Daily rate contract"){
   $("#type_select2").html(' <label>Enter rate</label><input  class="form-control" name="contract_rate" type="number">');
}});
function validation(){
/*    if($("#type_of_construction").val()==""){
        alert("Please select type of construction"){
            
        }else if($("#type_of_construction").val()=="new_construction"){
if()
    }
*/
    
    return true;
}
</script>

