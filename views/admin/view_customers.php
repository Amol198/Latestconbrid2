
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
		action="<?php echo base_url("index.php/admin/Dashboard/accept_customer")?><?php if(isset($id)) echo '/'.$id?>">
	


			<div class="row">
				<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Name</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="customer_name_checkbox" value="0">
							<input type="checkbox" value="1" name="customer_name_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_customers[customer_name]" value="<?php  if(isset($customer_name)) echo $customer_name;?>">
</div>

					</div>

				</div>

	<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Date of birth</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="date_of_birth_checkbox" value="0">
							<input type="checkbox" value="1" name="date_of_birth_checkbox">&nbsp;&nbsp;&nbsp;<input type="date" name="conbrid_customers[date_of_birth]" value="<?php  if(isset($date_of_birth)) echo $date_of_birth;?>">
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Contact number</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="contact_number_checkbox" value="0">
							<input type="checkbox" value="1" name="contact_number_checkbox">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_customers[contact_number]" value="<?php  if(isset($contact_number)) echo $contact_number;?>">
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
							<input type="checkbox" value="1" name="profile_photo_checkbox">&nbsp;&nbsp;&nbsp;<?php if(isset($profile_photo)){?><img style="width:100%;" src="<?php echo base_url("images/customer_images/profile_pic/".$profile_photo)?>"><?php }?>
</div>

					</div>

				</div>
					<div class="col-md-4">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">KYC proof</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <input type="hidden" name="kyc_proof_checkbox" value="0">
							<input type="checkbox" value="1" name="kyc_proof_checkbox">&nbsp;&nbsp;&nbsp;<?php if(isset($kyc_proof)){?><img style="width:100%;" src="<?php echo base_url("images/customer_images/kyc_proof/".$kyc_proof)?>"><?php }?>
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
   </script>
