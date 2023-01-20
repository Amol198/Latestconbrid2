<style>
sup {
	color: red;
}

.checked {
	color: orange;
}
</style>

<?php 
$notification_details1 = $notification_details;
foreach($notification_details1 as $notification_details){
?>
<section id="team-sev" class="padding bg_light" 
	style="margin-top: 157px;">

	<h1 style="text-align: center;">Job Post</h1>
	
	<div class="row"
		style="background: white; margin: 20px; text-align:center">
	    <div class="col-md-9" style=" 
	    <?php 
	    if($notification_details['conbrid_individual_notification_status']==0){
	    ?>
	    -webkit-filter: blur(5px);
        -moz-filter: blur(5px);
        -o-filter: blur(5px);
        -ms-filter: blur(5px);
        filter: blur(5px);
        background-color: #ccc;
        <?php } ?>
">
	        <div class="col-md-12">
	            <img width=100 height=100 src="<?=base_url("images/company_images/profile_pic/".$notification_details['profile_photo'])?>">
	            </div>
	             <div class="col-md-12">
	                 <lable><?=($notification_details['individual_name'])?></lable>
	                 <div class="col-md-12">
			<label>3 Star Ratings</label><br>
			<span class="fa fa-star checked"></span> <span
				class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span> <span class="fa fa-star"></span>
			<br>
			<br>
		</div>
	            </div>
    	       
	            <table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Name</b></th>
	                    <td><?=($notification_details['individual_name'])?></td>
	                </tr>
	            </table>
				<table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Date Of Birth</b></th>
	                    <td><?=($notification_details['dob'])?></td>
	                </tr>
	            </table>
				<table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Mobile No</b></th>
	                    <td><?=($notification_details['mobile_no'])?></td>
	                </tr>
	            </table>
				<table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Email</b></th>
	                    <td><?=($notification_details['email'])?></td>
	                </tr>
	            </table>
				<table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Job Description</b></th>
	                    <td><?=($notification_details['preferred_jd'])?></td>
	                </tr>
	            </table>
				
				<table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Job Type</b></th>
	                    <td><?=($notification_details['preferred_job_type'])?></td>
	                </tr>
	            </table>
				<table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Experience</b></th>
	                    <td><?=($notification_details['year_of_experience'])?></td>
	                </tr>
	            </table>
				<table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Education Qualification</b></th>
	                    <td><?=($notification_details['education_qualification'])?></td>
	                </tr>
	            </table>
				
				<table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Address</b></th>
	                    <td><?=($notification_details['address1'])?></td>
	                </tr>
	            </table>
				<table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Landmark</b></th>
	                    <td><?=($notification_details['landmark'])?></td>
	                </tr>
	            </table>
	            <table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Area</b></th>
	                    <td><?=($notification_details['area'])?></td>
	                </tr>
	            </table>
	            <table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>City</b></th>
	                    <td><?=($notification_details['city'])?></td>
	                </tr>
	            </table>
				<table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>State</b></th>
	                    <td><?=($notification_details['state'])?></td>
	                </tr>
	            </table>
	            <table border="1" style="width:100%">
	                <tr>
	                    <th width='25%'><b>Pincode</b></th>
	                    <td><?=($notification_details['pincode'])?></td>
	                </tr>
	            </table>
	       
	    </div>
	    <div class="col-md-3">
	        
		<br>
		<br>
		
		<!--<div class="col-md-12">-->
		<!--	<label>Glowing Lead</label><br> <img style="width: 100px;"-->
		<!--		src="<?php echo base_url("assets/images/circle-glowing.gif")?>">-->
		<!--</div>-->
		<?php 
		if($notification_details['conbrid_individual_notification_status']==0){
		?>
		<div class="col-md-12">
			<label>View Details</label><br> <img style="width: 100px;"
				src="<?php echo base_url("assets/images/starimage.png")?>" onclick="window.location.href='<?=base_url("Services/read_view_job_post/".$notification_details['conbrid_individual_notification_id'])?>'" >
				<br>
		</div>
		<?php 
		}
		?>
		<div class="col-md-12">
			<label>Call</label><br> <img style="width: 100px;"
				src="<?php echo base_url("assets/images/callicon.png")?>" onclick="window.open('tel:<?=$notification_details['mobile_no']?>')">
				<br>
		</div>
		<div class="col-md-12">
			<label>Message</label><br> <img style="width: 100px;"
				src="<?php echo base_url("assets/images/messageicon.png")?>" onclick="window.open('sms:<?=$notification_details['mobile_no']?>')">
		</div>
</div>
	</div>
	<br>
</section>
<?php } ?>
<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('.select2').select2();

</script>
