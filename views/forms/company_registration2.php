
<style>
p {
	font-size: 20px;
}

.preview-images-zone {
	background: white;
	width: 100%;
	border: 1px solid #ddd;
	min-height: 100px;
	/* display: flex; */
	padding: 5px 5px 0px 5px;
	position: relative;
	overflow: auto;
	width: 100%;
}

.preview-images-zone>.preview-image:first-child {
	height: 90px;
	width: 90px;
	position: relative;
	margin-right: 5px;
}

.preview-images-zone>.preview-image {
	height: 90px;
	width: 90px;
	position: relative;
	margin-right: 5px;
	float: left;
	margin-bottom: 5px;
}

.preview-images-zone>.preview-image>.image-zone {
	width: 100%;
	height: 100%;
}

.preview-images-zone>.preview-image>.image-zone>img {
	width: 100%;
	height: 100%;
}

.preview-images-zone>.preview-image>.tools-edit-image {
	position: absolute;
	z-index: 100;
	color: #fff;
	bottom: 0;
	width: 100%;
	text-align: center;
	margin-bottom: 10px;
	display: none;
}

.preview-images-zone>.preview-image>.image-cancel {
	font-size: 18px;
	position: absolute;
	top: 0;
	right: 0;
	font-weight: bold;
	margin-right: 10px;
	cursor: pointer;
	display: none;
	z-index: 100;
}

.preview-image:hover>.image-zone {
	cursor: move;
	opacity: .5;
}

.preview-image:hover>.tools-edit-image, .preview-image:hover>.image-cancel
	{
	display: block;
}

.ui-sortable-helper {
	width: 90px !important;
	height: 90px !important;
}

a.disabled {
	pointer-events: none;
	cursor: default;
}
</style>
<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">
	<h1 style="text-align: center;">Company Form</h1>
	<form enctype='multipart/form-data'
		onSubmit="return confirm('All your profile details given wont be editable after clicking submit button. CONBRID will send a notification once a year for you to update certain profile details');"
		method="POST"
		action="<?php echo base_url("index.php/Forms/accept_company_registration")?>">
		<div style="margin: 50px;">
			<div class="row">
			     <div class="col-md-12 form-group">
			         <label style="color:red" class="text-center;"><?php if(isset($verification_note)) echo "Note: ".$verification_note;?></label>
			         
			         
			     </div>
			<?php if(isset($existing_data[0]['profile_photo_checkbox']) &&$existing_data[0]['profile_photo_checkbox']==1) {?>
			
			 <div class="col-md-6 form-group">
        <label>Profile photo <sup style="color:red;">*</sup></label>
         <img id="profile_photo" <?php if(isset($profile_photo) && $profile_photo!=""){?>src="<?php echo base_url("images/company_images/profile_pic/".$profile_photo)?>"<?php }?> width="100" />
        <input accept="image/png, image/jpg, image/jpeg" class="form-control" type="file" name="profile_photo" id="" onchange="loadFile(event)">
        <label style="font-size:12px;">Profile photo should be the current photo of only sole proprietor/anyone of the partner/anyone of the directors/promoters/shareholders of the company or company logos and is compulsory</label>
    </div>
    <?php }?>
    	<?php if(isset($existing_data[0]['company_email_id_checkbox']) &&$existing_data[0]['company_email_id_checkbox']==1) {?>
		
    <div class="col-md-6 form-group">
        <label>Company email id<sup style="color:red;">*</sup></label>
        <input class="form-control" value="<?php if(isset($company_email_id)) echo $company_email_id;?>" required type="email" name="company_email_id" id="company_email_id">
        <label style="font-size:12px;"></label>
    </div>
    <?php }?>
</div>
			<div class="row">


    	<?php if(isset($existing_data[0]['company_name_checkbox']) &&$existing_data[0]['company_name_checkbox']==1) {?>
		
				<div class="col-md-6 form-group">
					<label>Company name <sup style="color: red;">*</sup></label> <input
						class="form-control" value="<?php if(isset($company_name)) echo $company_name;?>" type="text" required name="company_name" id="company_name">

				</div>
				<?php }?>
		<?php if(isset($existing_data[0]['company_office_number_checkbox']) &&$existing_data[0]['company_office_number_checkbox']==1) {?>
		
<div class="col-md-6 form-group">
					<label>Company office number</label> <input
						class="form-control" value="<?php if(isset($company_office_number)) echo $company_office_number;?>" type="text" name="company_office_number" id="company_office_number">

				</div>
<?php }?>

			</div>


			<div class="row">
				<?php if(isset($existing_data[0]['office_address_checkbox']) &&$existing_data[0]['office_address_checkbox']==1) {?>
		<div class="col-md-6 form-group">
					<label>Company office address/principal place of business <sup
						style="color: red;">*</sup></label>
					<textarea class="form-control" required name="office_address" id="office_address"><?php if(isset($office_address)) echo $office_address;?></textarea>

				</div><?php }?>
				<?php if(isset($existing_data[0]['gstin_number_checkbox']) &&$existing_data[0]['gstin_number_checkbox']==1) {?>
		<div class="col-md-6 form-group">
					<label>GSTIN Number<sup style="color: red;">*</sup></label> <input 
						class="form-control" type="text" value="<?php if(isset($gstin_number)) echo $gstin_number;?>" required name="gstin_number" id="gstin_number"> <label
						style="font-size: 12px;"></label>

				</div><?php }?>
			</div>

			<div class="row">
	<?php if(isset($existing_data[0]['cin_number_checkbox']) && $existing_data[0]['cin_number_checkbox']==1) {?>

				<div class="col-md-6 form-group">
<?php if(isset($_SESSION['userdata']['company_type']) && $_SESSION['userdata']['company_type']=="Limited Liability Partnership")	{?>
	<label>LLPIN number <sup style="color: red;">*</sup></label>
					<input class="form-control" required type="text" value="<?php if(isset($cin_number)) echo $cin_number;?>" name="llpin_number" id="llpin_number">

<?php } elseif(isset($_SESSION['userdata']['company_type']) && $_SESSION['userdata']['company_type']=="Private Limited Company"){?>
	<label>CIN number <sup style="color: red;">*</sup></label>
					<input class="form-control" value="<?php if(isset($cin_number)) echo $cin_number;?>" required type="text" name="cin_number" id="cin_number">

<?php }?>
				
				</div><?php }?>
	<?php if(isset($existing_data[0]['about_company_checkbox']) && $existing_data[0]['about_company_checkbox']==1) {?>
	
				<div class="col-md-6 form-group">
					<label>About the company<sup style="color: red;">*</sup></label>
					<textarea class="form-control" required name="about_company" id="about_company"><?php if(isset($about_company)) echo $about_company;?></textarea>


				</div><?php }?>
			</div>
			<div class="row">
	<?php if(isset($existing_data[0]['services_checkbox']) &&$existing_data[0]['services_checkbox']==1) {?>
	
				<div class="col-md-6 form-group">
					<div class="row service_row">
						<div class="service_line">
							<div class="col-xs-10">
								<label>Services offered by the company</label>
								<input class="form-control" id="add_service">
							</div>
							<div class="col-xs-2">
								<label>Add</label><a onclick="add_services()"
									class="btn btn-default">Add</a>
							</div>
						</div>
					</div>
				</div>
				<?php }?>
			</div>

			<div class="row">
	<?php if(isset($existing_data[0]['company_website_checkbox'])  &&$existing_data[0]['company_website_checkbox']==1) {?>
	
				<div class="col-md-6 form-group">
					<label>Company Website</label> <input class="form-control"
						type="text" value="<?php if(isset($company_website)) echo $company_website;?>" name="company_website" id="company_website">

				</div><?php }?>
					<?php if(isset($existing_data[0]['company_profile_checkbox']) &&$existing_data[0]['company_profile_checkbox']==1) {?>
	
				<div class="col-md-6 form-group">
					<label>Company Profile</label> <input class="form-control"
						type="text" value="<?php if(isset($company_profile)) echo $company_profile;?>" name="company_profile" id="company_profile">

				</div><?php }?>
			</div>
							<div class="row">
	<?php if(isset($existing_data[0]['carrers_checkbox']) &&$existing_data[0]['carrers_checkbox']==1) {?>
	
				<div class="col-md-6 form-group">
					<div class="row career_row">
						<div class="career_line">
							<div class="col-xs-10">
								<label>Careers and Job offers<sup style="color: red;">*</sup></label>
								<input class="form-control" id="add_career">
							</div>
							<div class="col-xs-2">
								<label>Add</label><a onclick="add_careers()"
									class="btn btn-default">Add</a>
							</div>
						</div>
					</div>
				</div><?php }?>
					<?php if(isset($existing_data[0]['number_of_employees_checkbox']) &&$existing_data[0]['number_of_employees_checkbox']==1) {?>
	
				<div class="col-md-6 form-group">
					<label>Number of employees in the company</label> <input class="form-control"
						type="number" value="<?php if(isset($number_of_employees)) echo $number_of_employees;?>" name="number_of_employees" id="number_of_employees">

				</div>
<?php }?>
			</div>
			<div class="row">
	<?php if(isset($existing_data[0]['construction_packages_checkbox']) && $existing_data[0]['construction_packages_checkbox']==1) {?>
	
<?php if(isset($_SESSION['userdata']['login_type']) && $_SESSION['userdata']['login_type']!="Builder and developer company"){?>

				<div class="col-md-6 form-group">
					<label>Construction packages <sup style="color: red;">*</sup><br></label>
					<textarea class="form-control" required name="construction_packages" id="construction_packages"><?php if(isset($construction_packages)) echo $construction_packages;?></textarea>
					<label style="font-size:12px;">Only construction and architectural rates of your company are allowed in this description tab for Builders to give new construction contracts/construction projects to your company</label>
				</div>
			<?php }}?>
				<?php if(isset($existing_data[0]['profile_photo_checkbox']) &&$existing_data[0]['profile_photo_checkbox']==1) {?>
	
		<div class="col-md-6 form-group row">
					<div class="col-md-12"><label>Working Hours <sup style="color: red;">*</sup></label></div>
					<div class="row">
<div class="col-md-3"><label>Day</label></div><div class="col-md-4"><label>Start Time</label></div><div class="col-md-4"><label>End Time</label></div><div class="col-md-1"><label>OFF</label></div>
</div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="Monday">Monday</div><div class="col-md-4"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-4"><input name="endtime[]" class="form-control datetime" type="time"></div>   <div class="col-md-1"><input type="hidden" class="closest_checkbox" value="0" name="weeklyoff[]"><input type="checkbox" value="1" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="Tuesday">Tuesday</div><div class="col-md-4"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-4"><input name="endtime[]" class="form-control datetime" type="time"></div>  <div class="col-md-1"><input type="hidden" class="closest_checkbox" value="0" name="weeklyoff[]"><input type="checkbox" value="2" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="Wednesday">Wednesday</div><div class="col-md-4"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-4"><input name="endtime[]" class="form-control datetime" type="time"></div><div class="col-md-1"><input type="hidden" class="closest_checkbox" value="0" name="weeklyoff[]"><input type="checkbox" value="3" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="Thursday">Thursday</div><div class="col-md-4"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-4"><input name="endtime[]" class="form-control datetime" type="time"></div> <div class="col-md-1"><input type="hidden" class="closest_checkbox" value="0" name="weeklyoff[]"><input type="checkbox" value="4" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="Friday">Friday</div><div class="col-md-4"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-4"><input name="endtime[]" class="form-control datetime" type="time"></div>   <div class="col-md-1"><input type="hidden" class="closest_checkbox" value="0" name="weeklyoff[]"><input type="checkbox" value="5" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="Saturday">Saturday</div><div class="col-md-4"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-4"><input name="endtime[]" class="form-control datetime" type="time"></div> <div class="col-md-1"><input type="hidden" class="closest_checkbox" value="0" name="weeklyoff[]"><input type="checkbox" value="6" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="Sunday">Sunday</div><div class="col-md-4"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-4"><input name="endtime[]" class="form-control datetime" type="time"></div>   <div class="col-md-1"><input type="hidden" class="closest_checkbox" value="0" name="weeklyoff[]"><input type="checkbox" value="7" class="checkbox1"></div></div>
				</div>
			<?php }?>
		
			</div>
			<hr>
			<div class="row" style="display:none;">
				<div class="col-md-12 form-group">
					<div class="row project_row">
						<div class="project_line">
							<div class="col-xs-5">
								<label>Ongoing and Completed projects <sup style="color: red;">*</sup></label>
								<textarea class="form-control" id="add_project"></textarea>


							</div>
							<div class="col-xs-5">
								<fieldset class="">
									<a href="javascript:void(0)" onclick="$('#pro-image').click()">Click here to upload images</a> <input type="file" id="pro-image" name="pro-image"
										style="display: none;" class="form-control" multiple>
								</fieldset>
								<div class="preview-images-zone"></div>

							</div>
							<div class="col-xs-1">
								<label>Add</label><a onclick="add_projects()"
									class="btn btn-default">Add</a>
							</div>
						</div>
					</div>
				</div>
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('.checkbox1').change(function() {
        $(this).closest(".row").find(".datetime").val("");
   if ($(this).is(':checked')) {
       $(this).closest(".row").find(".closest_checkbox").val("1");
    } else {
       $(this).closest(".row").find(".closest_checkbox").val("0");
    }
    });
    $('.datetime').change(function() {
        $(this).closest(".row").find(".checkbox1").prop("checked",false);
    });
$('.select2').select2();

function add_services(){
    if($("#add_service").val()==""){
        alert("Please enter something in Services");
    }else{
    $(".service_row").append('<div class="service_line"><div class="col-xs-10"><input type="hidden" name="add_service[]" value="'+$("#add_service").val()+'" >'+$("#add_service").val()+'</div><div class="col-xs-2"><a class="btn btn-danger remove_service_row">X</a></div></div>');
$("#add_service").val("");
}}
function add_careers(){
    if($("#add_career").val()==""){
        alert("Please enter something in Careers");
    }else{
    $(".career_row").append('<div class="career_line"><div class="col-xs-10"><input type="hidden" name="add_career[]" value="'+$("#add_career").val()+'" >'+$("#add_career").val()+'</div><div class="col-xs-2"><a class="btn btn-danger remove_career_row">X</a></div></div>');
$("#add_career").val("");
}}
function add_projects(){
    if($("#add_project").val()==""){
        alert("Please enter something in Projects");
    }else{
    $(".project_row").append($(".preview-images-zone").html());
//$("#add_project").val("");
}}
$(document).on('click', '.remove_client_row', function(){ 
    this.closest(".client_line").remove();
}); 
$(document).on('click', '.remove_service_row', function(){ 
    this.closest(".service_line").remove();
}); 
$(document).on('click', '.remove_career_row', function(){ 
    this.closest(".career_line").remove();
}); 

$(document).on('click', '.remove_project_row', function(){ 
    this.closest(".project_line").remove();
}); </script>
<script>
$(document).ready(function() {
    document.getElementById('pro-image').addEventListener('change', readImage, false);
    
    $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove(); 
    });
});



var num = 1;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}

  var loadFile = function(event) {
	var image = document.getElementById('profile_photo');
	image.src = URL.createObjectURL(event.target.files[0]);
};

</script>

