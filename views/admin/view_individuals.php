
<div class="content-wrapper">

	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"><?php if (isset($title)) echo $title?></h1>
				</div>

			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">

<form enctype='multipart/form-data'
		method="POST"
		action="<?php echo base_url("index.php/admin/Dashboard/accept_individual")?><?php if(isset($id)) echo '/'.$id?>">
	


			<div class="row">
				<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Name</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="individual_name_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="individual_name_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_individuals[individual_name]" value="<?php  if(isset($individual_name)) echo $individual_name;?>">
</div>

					</div>

				</div>

	<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Date of birth</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="dob_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="dob_checkbox">&nbsp;&nbsp;&nbsp;<input type="date" name="conbrid_individuals[dob]" value="<?php  if(isset($dob)) echo $dob;?>">
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Education qualification</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="education_qualification_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="education_qualification_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_individuals[education_qualification]" value="<?php  if(isset($education_qualification)) echo $education_qualification;?>">
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Preferred job designation</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="preferred_jd_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="preferred_jd_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_individuals[preferred_jd]" value="<?php  if(isset($preferred_jd)) echo $preferred_jd;?>">
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">KYC proof </h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="kyc_proof_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="kyc_proof_checkbox">&nbsp;&nbsp;&nbsp;<?php if(isset($kyc_proof)){?><img style="width:100%;" src="<?php echo base_url("images/".$kyc_proof)?>"><?php }?>
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Profile photo </h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="profile_photo_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="profile_photo_checkbox">&nbsp;&nbsp;&nbsp;<?php if(isset($profile_photo)){?><img style="width:100%;" src="<?php echo base_url("images/".$profile_photo)?>"><?php }?>
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Preferred job type</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="preferred_job_type_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="preferred_job_type_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_individuals[preferred_job_type]" value="<?php  if(isset($preferred_job_type)) echo $preferred_job_type;?>">
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Year of experience </h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="year_of_experience_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="year_of_experience_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_individuals[year_of_experience]" value="<?php  if(isset($year_of_experience)) echo $year_of_experience;?>">
</div>

					</div>

				</div>
				
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Resume</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="upload_resume_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="upload_resume_checkbox">&nbsp;&nbsp;&nbsp;<?php  if(isset($upload_resume)) echo '<a target="_blank" href="'.base_url("images/".$upload_resume).'">View Resume</a>'?>
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Work experience certificate</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="work_exp_certificate_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="work_exp_certificate_checkbox">&nbsp;&nbsp;&nbsp;<?php  if(isset($work_exp_certificate)) echo '<a target="_blank" href="'.base_url("images/".$work_exp_certificate).'">View Work Experience Certificate</a>'?>
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Field of interest</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="field_of_interest_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="field_of_interest_checkbox">&nbsp;&nbsp;&nbsp;<br>
							<select class="field_of_interest">
							    <?php 
							    foreach($conbrid_field_of_interest as $row){
							    ?>
							    <option value="<?=$row['name']?>"><?=$row['name']?></option>
							    <?php }?>
							</select><input type="button" value="Add" onClick="add_new_interest()"><br>
							<?php foreach($field_of_interest as $row){echo $row['field_of_interest']."<br>";}?>
							<div class="new_interest"></div>
                            </div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Key Skills</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="key_skills_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="key_skills_checkbox">&nbsp;&nbsp;&nbsp;<br>
							<input type="button" value="Add" onClick="add_new_skill()">
								<?php foreach($key_skills as $row){
								?><br><input type="text" name="conbrid_key_skills[<?=$row['id']?>][key_skills]" value="<?php echo $row['key_skills'];?>"><?php
								    
								}?>
								<div class="new_skill"></div>
                        </div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Technical Skills</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="technical_skills_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="technical_skills_checkbox">&nbsp;&nbsp;&nbsp;<br>
														<input type="button" value="Add" onClick="add_new_technical_skills()">

								<?php foreach($technical_skills as $row){
								        ?>
								        <br><input type="text" name="conbrid_technical_skills[<?=$row['id']?>][technical_skills]" value="<?php echo $row['technical_skills'];?>">
								        <?php 
								        //echo $row['technical_skills']."<br>";
								}
								?>
								<div class="new_technical_skill"></div>
                        </div>
                       

					</div>

				</div>
				
				 <div class="col-md-12">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Location details</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <div class="col-md-12" style="display: inline-flex;">
						        <lable ><b>Auto Capture details :</b></lable>
						        <?=isset($location_address)?$location_address:""?>
						    </div>
						    <div class="row" style="width:100%; padding-top:10px; padding-bottom:10px;">
						    <div class="col-md-12" style="display: inline-flex;">
						        <div class="col-md-1">
						        <lable ><b>Address :</b></lable>
						        </div>
						        <div class="col-md-11">
						        <input type="text" name="conbrid_individuals[address1]" value="<?=isset($address1)?$address1:""?>" style="width:100%;">
						        </div>
						    </div>
						    </div>
						    
						    <div class="row" style="width:100%; padding-top:10px; padding-bottom:10px;">
						    <div class="col-md-6" style="display: inline-flex;">
						        <div class="col-md-2">
						        <lable ><b>Landmark :</b></lable>
						        </div>
						        <div class="col-md-10">
						        <input type="text" name="conbrid_individuals[landmark]" value="<?=isset($landmark)?$landmark:""?>" style="width:100%;">
						        </div>
						    </div> 
						    
						    <div class="col-md-6" style="display: inline-flex;">
						        <div class="col-md-2">
						        <lable ><b>Area :</b></lable>
						        </div>
						        <div class="col-md-10">
						        <input type="text" name="conbrid_individuals[area]" value="<?=isset($area)?$area:""?>" style="width:100%;">
						        </div>
						    </div>  
						    </div>
						    
						    
						    <div class="row" style="width:100%; padding-top:10px; padding-bottom:10px;">
						    <div class="col-md-4" style="display: inline-flex;">
						        <div class="col-md-3">
						        <lable  ><b>Pincode :</b></lable>
						        </div>
						        <div class="col-md-9">
						        <input type="number" name="conbrid_individuals[pincode]" value="<?=isset($pincode)?$pincode:""?>" style="width:100%;">
						        </div>
						    </div>  
						    <div class="col-md-4" style="display: inline-flex;">
						        <div class="col-md-2">
						        <lable ><b>State :</b></lable>
						        </div>
						        <div class="col-md-10">
						        <select name="conbrid_individuals[state]" onchange="show_city(this)" style="width:100%;">
						            <?php 
						            foreach($conbrid_states as $row){
						            ?>
						            <option value="<?=$row['id']?>" <?=isset($state) && $state==$row['id'] ? "selected":""?> ><?=$row['name']?></option>
						            <?php } ?>
						        </select>
						        </div>
						    </div>    
						    <div class="col-md-4" style="display: inline-flex;">
						        <div class="col-md-2">
						        <lable ><b>City :</b></lable>
						        </div>
						        <div class="col-md-10">
						        <select name="conbrid_individuals[city]" style="width:100%;">
						            <?php 
						            foreach($conbrid_cities as $row){
						            ?>
						            <option value="<?=$row['city_name']?>" class="city_val state_<?=$row['state_id']?>"  <?=isset($city) && $city==$row['city_name'] ? "selected":""?>><?=$row['city_name']?></option>
						            <?php } ?>
						        </select>
						        </div>
						        
						    </div>    
						    </div>
						    
                        </div>
				</div>
				</div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Note </h3>
						</div>

						<div class="card-body" style="display: block;">
					
					<label>Enter a note here </label>
						    <textarea class="form-control" name="verification_note"></textarea>

					
				</div>
				</div>


                </div>
			</div>
			<input type="hidden" name="status_active" id="status_active" value="0">
		<input type="submit" value="Submit" class="btn btn-info">
			</form>
			
		</div>
	</section>
</div>

<script language="javascript"> 

/* var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
          if (mobile) {
         //     window.location.replace("https://google.com");
          }
          else
           // window.location.replace("https://google.com1");
*/
function add_new_skill(){
    $(".new_skill").append('<div><br><input type="text" name="conbrid_new_key_skills[]"><input type="button" value="Remove" onClick="$(this).parent().remove()" ></div>');
}
function add_new_technical_skills(){
    $(".new_technical_skill").append('<div><br><input type="text" name="conbrid_new_technical_skills[]"><input type="button" value="Remove" onClick="$(this).parent().remove()" ></div>');
}
function add_new_interest(){
    $(".new_interest").append('<div><br><input type="text" readonly name="conbrid_new_field_of_interest[]" value="'+$(".field_of_interest").val()+'"><input type="button" value="Remove" onClick="$(this).parent().remove()" ></div>');
}
function show_city(obj){
    $(".city_val").hide();
    $(".state_"+$(obj).val()).show();
}
$('.checkbox1').click(function() {
var boxes = $('.checkbox1:checked');
$("#status_active").val(boxes.length);

    
});
   </script>
