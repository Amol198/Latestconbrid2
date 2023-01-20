
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
		action="<?php echo base_url(index_page()."admin/Dashboard/accept_individual_location")?><?php if(isset($id)) echo '/'.$id?>">




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
						        <input type="text" name="address1" value="<?=isset($address1)?$address1:""?>" style="width:100%;">
						        </div>
						    </div>
						    </div>
						    
						    <div class="row" style="width:100%; padding-top:10px; padding-bottom:10px;">
						    <div class="col-md-6" style="display: inline-flex;">
						        <div class="col-md-2">
						        <lable ><b>Landmark :</b></lable>
						        </div>
						        <div class="col-md-10">
						        <input type="text" name="landmark" value="<?=isset($landmark)?$landmark:""?>" style="width:100%;">
						        </div>
						    </div> 
						    
						    <div class="col-md-6" style="display: inline-flex;">
						        <div class="col-md-2">
						        <lable ><b>Area :</b></lable>
						        </div>
						        <div class="col-md-10">
						        <input type="text" name="area" value="<?=isset($area)?$area:""?>" style="width:100%;">
						        </div>
						    </div>  
						    </div>
						    
						    
						    <div class="row" style="width:100%; padding-top:10px; padding-bottom:10px;">
						    <div class="col-md-4" style="display: inline-flex;">
						        <div class="col-md-3">
						        <lable  ><b>Pincode :</b></lable>
						        </div>
						        <div class="col-md-9">
						        <input type="number" name="pincode" value="<?=isset($pincode)?$pincode:""?>" style="width:100%;">
						        </div>
						    </div>  
						    <div class="col-md-4" style="display: inline-flex;">
						        <div class="col-md-2">
						        <lable ><b>State :</b></lable>
						        </div>
						        <div class="col-md-10">
						        <select name="state" onchange="show_city(this)" style="width:100%;">
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
						        <select name="city" style="width:100%;">
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

				<div class="col-12">
			<!--<input type="hidden" name="status_active" id="status_active" value="0">
									-->
		       <input type="submit" value="Submit" class="btn btn-info">
									</div>
                                    </form>
                                    </div>
	</section>
</div>

