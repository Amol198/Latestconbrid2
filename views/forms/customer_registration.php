
<style>p{
font-size:20px;}
a.disabled {
  pointer-events: none;
  cursor: default;
}

</style>
<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">
    <h1 style="text-align:center;">Customer Form</h1>
	<form enctype='multipart/form-data' onSubmit="return confirm('All your profile details given wont be editable after clicking submit button. CONBRID will send a notification once a year for you to update certain profile details')" method="POST"
		action="<?php echo base_url("index.php/Forms/accept_customer_registration")?>">
	
<div  style="margin:50px;">
    <div class="row">
        <div class="col-md-12 form-group">
        <label>Profile photo <sup style="color:red;">*</sup></label>
        		<input accept="image/png, image/jpg, image/jpeg"  onchange="loadFile(event)" type="file" name="profile_photo" id=""></textarea>
       		<img style="border:1px solid;height:150px; width:100px;" id="profile_photo" />
		 <label style="font-size:12px;">Your Profile photo should compulsorily have your current photo</label>
   
   
    </div>
    <div class="col-md-4 form-group">
        <label>Name <sup style="color:red;">*</sup></label>
        <input required class="form-control" type="text" name="customer_name"  id="">
        
    </div>
    <div class="col-md-4 form-group">
        <label>Date of birth <sup style="color:red;">*</sup></label>
        <input required class="form-control" type="date" name="date_of_birth" id="">
        
    </div>
        <div class="col-md-4 form-group">
        <label>Contact Number<sup style="color:red;">*</sup></label>
        <input required class="form-control" type="text" name="contact_number" id="">
        
    </div>

        </div>
   
  
    <div class="row">

 <div class="col-md-6 form-group">
					<label>KYC proof <sup style="color: red;">*</sup></label> <img
						id="kyc_proof" width="100" /> <input class="form-control"
						accept="image/png, image/jpg, image/jpeg" required type="file"
						onchange="loadFile1(event)" name="kyc_proof" id=""> <label
						style="font-size: 12px;">You can upload PAN Card or Aadhaar Card
						or Driving License or Voter ID</label>
				</div>
    
        </div>
   <div class="row">

				<div class="col-md-12 form-group" style="text-align: right;">

					<input type="submit" class="btn btn-info" value="Submit">
				</div>
			</div>

          
    </div>
</form>
</div>

</section>
<script type="text/javascript">
            function PreviewImage() {
                pdffile=document.getElementById("kyc_proof").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#viewer').attr('src',pdffile_url);
            }
             var loadFile = function(event) {
	var image = document.getElementById('profile_photo');
	image.src = URL.createObjectURL(event.target.files[0]);
};
   var loadFile1 = function(event) {
	var image = document.getElementById('kyc_proof');
	image.src = URL.createObjectURL(event.target.files[0]);
};
        </script>
