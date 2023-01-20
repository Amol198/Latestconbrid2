<?php 

//$notification_details = $notification_details[0];
?>
<style>
sup {
	color: red;
}

.checked {
	color: orange;
}
		.element {
  background: #f59191;
  animation: glowShadow 1.5s linear infinite alternate;
}

.img {
  animation: glowImage 1.5s linear infinite alternate;
}

@keyframes glowShadow{
  to {
    background: #f59191;
  }
}

@keyframes glowImage{
  to {
    -webkit-filter: brightness(2);
     filter: brightness(2);
  }
}

.element2 {
  box-shadow: 0px 0px 28px -17px #87CEEB;
  animation: glowShadow2 1.5s linear infinite alternate;
}

.img2 {
  animation: glowImage2 1.5s linear infinite alternate;
}

@keyframes glowShadow2{
  to {
    box-shadow: 0px 0px 15px 15px #87CEEB;
  }
}

@keyframes glowImage2{
  to {
    -webkit-filter: brightness(2);
     filter: brightness(2);
  }
}



</style>
<section id="team-sev" class="padding bg_light" 
	style="margin-top: 157px;">

	<h1 style="text-align: center;">Glowing Leads</h1>
	
	<div class="row">
<?php foreach($notification_details as $row){
if($row['notification_status']==2){
?>
<div class="col-md-5 row element" style="background: white; margin: 20px; text-align:center">
   <br><br>
   <div class="col-md-12">
       <h3>Name: <?php echo $row['individual_name'];?></h3>(High Probability)<br>
       
   </div>
<div class="col-md-4">
		    <h2>3.0</h2>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
	</div>
	 	<div class="col-md-4">
			<label>View Details</label><br> <img style="width: 100px;"
				src="<?php echo base_url("assets/images/starimage.png")?>" >
				<br>
		</div>
		<div class="col-md-4">
			<label>Call</label><br> <img style="width: 100px;"
				src="<?php echo base_url("assets/images/callicon.png")?>" onclick="window.open('tel:<?=$notification_details[0]['mobile_no']?>')">
				<br>
	<br><br><br>
		</div>
		</div>
<?php } else{?>

<div class="col-md-5 row element2" style="background: white; margin: 20px; text-align:center">
   <br><br>
   <div class="col-md-12">
       <h3>Name: <?php echo $row['individual_name'];?></h3><br>
       
   </div>
<div class="col-md-4">
		    <h2>3.0</h2>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
	</div>
	 	<div class="col-md-4">
			<label>View Details</label><br> <img style="width: 100px;"
				src="<?php echo base_url("assets/images/starimage.png")?>">
				<br>
		</div>
	
		<div class="col-md-4">
			<label>Message</label><br> <img style="width: 100px;"
				src="<?php echo base_url("assets/images/messageicon.png")?>" onclick="window.open('sms:<?=$notification_details[0]['mobile_no']?>')">
	<br><br><br><br>
	

</div>
		</div>
<?php }}?>
</div>



	<br>
</section>
<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('.select2').select2();

</script>

