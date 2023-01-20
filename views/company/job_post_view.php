<?php 

$notification_details = $notification_details[0];
?>
<style>
sup {
	color: red;
}

.checked {
	color: orange;
}
		.element {
  border-radius: 50%;
  width: 70px;
  height: 70px;
  box-shadow: 0px 0px 28px -17px red;
  animation: glowShadow 1.5s linear infinite alternate;
}

.img {
  animation: glowImage 1.5s linear infinite alternate;
}

@keyframes glowShadow{
  to {
    box-shadow: 0px 0px 15px 15px red;
  }
}

@keyframes glowImage{
  to {
    -webkit-filter: brightness(2);
     filter: brightness(2);
  }
}

</style>
<section id="team-sev" class="padding bg_light" 
	style="margin-top: 157px;">

	<h1 style="text-align: center;">Job Post</h1>
	
	<div class="row">
	    <div class="col-md-2">&nbsp;</div>
	    <div class="col-md-9 row" style="background: white; text-align:center;"><br>
	        <div class="col-md-6" style="text-align:left!important;">
	            <img width=200 height=200 src="<?=base_url("images/company_images/profile_pic/".$notification_details['profile_photo'])?>">
	            </div>
	             <div class="col-md-6">
	       	<label>3 Star Ratings</label><br>
			<span class="fa fa-star checked"></span> <span
				class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span> <span class="fa fa-star"></span>
			<br>
			<br>
		   Company Name: <label><?php echo $notification_details['company_name'];?></label><br>
	               Post Description: <label><?php echo $notification_details['job_description'];?></label><br>
	            <br><br><br>
	            </div>
	           
	              
	         <div class="col-md-12">
	         <a href="#interested_popup" class="btn btn-info" data-toggle="modal"><i class="fa fa-check" aria-hidden="true"></i> I am interested</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	         <a href="#not_interested_popup" class="btn btn-danger" data-toggle="modal"><i class="fa fa-times" aria-hidden="true"></i> I am not interested</a>
	         <br><br>
	         </div>
    	       
	    </div>
	   

</div>
</section>
<div id="not_interested_popup" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to proceed? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<a class="btn btn-secondary" data-dismiss="modal">Cancel</a>
				<a href="<?php echo base_url("Services/update_job_post/3/".$notification_details['notification_id']."")?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> I am not interested</a>
			</div>
		</div>
	</div>
</div>     
<div id="interested_popup" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
			</div>
			<div class="modal-body">
				<p>Do you really want to proceed? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<a class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<a href="<?php echo base_url("Services/update_job_post/2/".$notification_details['notification_id']."")?>" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i> I am interested</a>
			</div>
		</div>
	</div>
</div>     

<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('.select2').select2();
</script>

