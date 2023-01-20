
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
		action="<?php echo base_url("index.php/admin/Dashboard/accept_company")?><?php if(isset($id)) echo '/'.$id?>">
	


			<div class="row">
				<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Name</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="company_name_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="company_name_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_companies[company_name]" value="<?php  if(isset($company_name)) echo $company_name;?>"> 
</div>

					</div>

				</div>

	<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Email ID</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="company_email_id_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="company_email_id_checkbox">&nbsp;&nbsp;&nbsp;<input type="email" name="conbrid_companies[company_email_id]" value="<?php  if(isset($company_email_id)) echo $company_email_id;?>">
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
							<input type="checkbox" class="checkbox1" value="1" name="profile_photo_checkbox">&nbsp;&nbsp;&nbsp;<?php if(isset($profile_photo)){?><img style="width:100%;" src="<?php echo base_url("images/company_images/profile_pic/".$profile_photo)?>"><?php }?>
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Company office number</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="company_office_number_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="company_office_number_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_companies[company_office_number]" value="<?php  if(isset($company_office_number)) echo $company_office_number;?>">
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Office address</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="office_address_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="office_address_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_companies[office_address]" value="<?php  if(isset($office_address)) echo $office_address;?>">
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">GSTIN</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="gstin_number_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="gstin_number_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_companies[gstin_number]" value="<?php if(isset($gstin_number)) echo $gstin_number;?>">
</div>

					</div>

				</div>
				
				
							    <?php if(isset($company_type) && $company_type=="Limited Liability Partnership"){?>
							<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">	<h3 class="card-title">LLPIN number</h3>
<div class="card-body" style="display: block;">
						    <input type="hidden" name="cin_number_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="cin_number_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_companies[cin_number]" value="<?php if(isset($cin_number)) echo $cin_number;?>">
</div>
						</div></div></div>	<?php    }elseif(isset($company_type) && $company_type=="Private Limited Company"){?>
							<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">		<h3 class="card-title">CIN number</h3>
<div class="card-body" style="display: block;">
						    <input type="hidden" name="cin_number_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="cin_number_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_companies[cin_number]" value="<?php if(isset($cin_number)) echo $cin_number;?>">
</div>
						</div></div></div>	<?php
							    }?>
							   
						
				
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">About company</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="about_company_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="about_company_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_companies[about_company]" value="<?php  if(isset($about_company)) echo $about_company;?>">
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Company website</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="company_website_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="company_website_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_companies[company_website]" value="<?php  if(isset($company_website)) echo $company_website;?>">
							<?php  if(isset($company_website)) echo "<a target='_blank' href='".$company_website."'>".$company_website."</a>";?>
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Company profile</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="company_profile_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="company_profile_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_companies[company_profile]" value="<?php  if(isset($company_profile)) echo $company_profile;?>">
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Number of employees</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="number_of_employees_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="number_of_employees_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_companies[number_of_employees]" value="<?php  if(isset($number_of_employees)) echo $number_of_employees;?>">
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Construction packages</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="construction_packages_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="construction_packages_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_companies[construction_packages]" value="<?php  if(isset($construction_packages)) echo $construction_packages;?>">
</div>

					</div>

				</div>
				
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Services offered</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="services_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="services_checkbox">&nbsp;&nbsp;&nbsp;<br>
							<input type="button" value="Add" onClick="add_new_service()">
							<?php foreach($services as $row){
								?><br><input type="text" name="conbrid_add_service[<?=$row['id']?>][service]" value="<?php echo $row['service'];?>"><?php
								    
								}?>
								<div class="new_service" ></div>
								
								
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Careers</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="carrers_checkbox" value="0">
							<input type="checkbox" class="checkbox1" value="1" name="carrers_checkbox">&nbsp;&nbsp;&nbsp;<br> 
								<?php //foreach($carrers as $row){echo $row['career']."<br>";}?>
								<input type="button" value="Add" onClick="add_new_career()">
							<?php foreach($carrers as $row){
								?><br><input type="text" name="conbrid_add_career[<?=$row['id']?>][career]" value="<?php echo $row['career'];?>"><?php
								    
								}?>
								<div class="new_career" ></div>
								
</div>

					</div>

				</div>
				</div><div class="row">
				
					<div class="col-md-6">
					<label>Enter a note here </label>
						    <textarea class="form-control" name="verification_note"></textarea>

<br>

					
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
function add_new_service(){
    $(".new_service").append('<div><br><input type="text" name="conbrid_add_new_service[]"><input type="button" value="Remove" onClick="$(this).parent().remove()" ></div>');
}
function add_new_career(){
    $(".new_career").append('<div><br><input type="text" name="conbrid_add_new_career[]"><input type="button" value="Remove" onClick="$(this).parent().remove()" ></div>');
}
$('.checkbox1').click(function() {
var boxes = $('.checkbox1:checked');
$("#status_active").val(boxes.length);

    
});
   </script>
