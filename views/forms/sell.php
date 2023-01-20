<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">

	<h1 style="text-align: center;">Property Form</h1>

	<form enctype='multipart/form-data'
			method="POST"
		action="<?php echo base_url("Forms/acceptproperty")?>">
		<div style="margin: 50px;">
			<div class="row">
			 <div class="col-md-6 form-group">
        <label>Type Of Rental Property<sup style="color:red;">*</sup></label>
  <select  id="type_of_property" name="type_of_property" class="form-control">
    <option value="">Please select</option>
    <option value="residential">Residential</option>
    <option value="commercial">Commercial</option>
    <option value="industrial">Industrial</option>
	<option value="institutional">Institutional</option>
    </select>    </div>
    </div>

    <div id="residential" style="display:none;"><hr><h3>Basic Details</h3><hr>
    
	<div class="row">
		     <div class="col-md-3 form-group">
        <label>Select Sub Categories<sup style="color:red">*</sup></label>
        <select  id="sub_categories" name="sub_categories" class="form-control">
            <option value="">Please Select</option>
            <option value="independent house">Independent house</option>
            <option value="duplex house">Duplex house</option>
            <option value="farm House">Farm House</option>
            <option value="villas">Villas</option>
            <option value="bungalows"> Bungalows</option>
            <option value="house in a Builder Floor apartment">House in a Builder Floor apartment</option>
            <option value="house in a Multistorey apartment">  House in a Multistorey apartment</option>
			<option value=" house in a Gated Community apartment">  House in a Gated Community apartment</option>
			<option value="house in a Studio apartment"> House in a Studio apartment</option>
			<option value="single row house"> Single row house</option>
			
        </select>
 
</div>
 </div>
	
	
  <div class="row">

	  
     <div class="col-md-3 form-group">
        <label>Property address<sup>*</sup></label>
        <input  class="form-control" name="property_address" type="text"></div> 
     <div class="col-md-3 form-group">
        <label>Built-up area of the property<sup>*</sup></label>
    	<input  class="form-control" name="builtup_area" type="text"></div> 
	<div class="col-md-3 form-group">
        <label>Property features and details(description)<sup>*</sup></label>
        <input  class="form-control" name="description" type="text"></div> 
	
		</div>

        <div class="row">

<div class="col-md-6 form-group">
    <label>Property Image <sup style="color: red;">*</sup></label> 
    <img  id="image" width="100" />
    <input class="form-control"  accept="image/png, image/jpg, image/jpeg" required type="file" onchange="loadFile1(event)" name="image" id=""> 
     
    
       
        
</div>
</div>


		
		
<div class="row">
		     <div class="col-md-3 form-group">
        <label>Select Facing<sup>*</sup></label>
        <select  id="property_facing" name="property_facing" class="form-control">
            <option value="">Please Select</option>
            <option value="entrance facing">Entrance facing</option>
            <option value="master bedroom facing">Master bedroom facing</option>
            <option value="pooja room facing">Pooja room facing</option>
            <option value="kitchen facing">Kitchen facing</option>             
        </select>
 
</div>
 </div>

 <div class="row">

	  
<div class="col-md-3 form-group">
   <label>Monthly rent amount<sup>*</sup></label>
   <input  class="form-control" name="monthly_rent" type="number"></div> 
<div class="col-md-3 form-group">
   <label>Security deposit amount<sup>*</sup></label>
   <input  class="form-control" name="security_deposit" type="number"></div> 
<div class="col-md-3 form-group">
   <label>Maintenance charges<sup>*</sup></label>
   <input  class="form-control" name="maintenance" type="number"></div> 

   </div>

   <div class="row">
		     <div class="col-md-3 form-group">
        <label>Notice Period<sup>*</sup></label>
        <select  id="notice" name="notice_period" class="form-control">
            <option value="">Please Select</option>
            <option value="1 month">1 month</option>
            <option value="2 months">2 months</option>
            <option value="3 months">3 months</option>
            <option value="4 months">4 months</option>             
			<option value="5 months">5 months</option>             
			<option value="6 months">6 months</option>             
        </select>
 
      </div>
          <div class="col-md-3 form-group">
            <label>Rental Period<sup>*</sup></label>
            <select  id="rental" name="rental_period" class="form-control">
            <option value="">Please Select</option>
            <option value="7 months">7 months</option>
            <option value="8 months">8 months</option>
            <option value="9 months">9 months</option>
            <option value="10 months">10 months</option>             
			<option value="11 months">11 months</option>             
			<option value="12 months">12 months</option>             
        </select>
         </div>
      </div>

       <div class="row">
		    <div class="col-md-4">
		        <label>Rental agreement start date<sup>*</sup></label>
		        <input type="date"  name="rental_aggr_date" class="form-control">
		    </div>
       </div>

	   <div class="row">
          <div class="col-md-5 form-group">
            <label>Penalty for breach of agreement if any(description tab)<sup>*</sup></label>
            <input  class="form-control" name="penalty" type="text"></div> 
         <div class="col-md-3 form-group">
            <label>E-Stamp Certificate number<sup>*</sup></label>
            <input  class="form-control" name="estamp_number" type="text"></div> 
        <div class="col-md-3 form-group">
           <label>Stamp duty type<sup>*</sup></label>
           <input  class="form-control" name="stamp_duty_type" type="text" placeholder="Lease of immovable property" disabled></div> 
    
       </div>
		
		<hr><h3>Dates</h3><hr>
		
		<div class="row">
		    <div class="col-md-4">
		        <label>Certificate issued date as per your E-Stamp rental agreement<sup>*</sup></label>
		        <input type="date"  name="certi_issue_date" class="form-control">
		    </div>
		</div>

		<hr><h3>Upload the original E-Stamp rental agreement</h3><hr>
		
		  <div class="row">
			  <div class="col-md-4">
                 <label>Choose the file <sup>*</sup></label>
				 <input type="file" accept="application/pdf"  name="estamp_file" class="form-control">


			  </div>
		  </div>
</div> <!--  kdjoewjr div id residentioal closed-->

<div id="commercial" style="display:none;"><hr><h3>Basic Details</h3><hr>
    
	<div class="row">
		     <div class="col-md-3 form-group">
        <label>Select Sub Categories<sup style="color:red">*</sup></label>
        <select  id="sub_categories" name="sub_categories" class="form-control">
            <option value="">Please Select</option>
            <option value="office">Office</option>
            <option value="retail">Retail</option>
            <option value="health">Health Care</option>
            <option value="nursing">Nursing</option>
            <option value="leisure">Leisure</option>
            
			
        </select>
 
</div>
 </div>
	
	
  <div class="row">

	  
     <div class="col-md-3 form-group">
        <label>Property address<sup>*</sup></label>
        <input  class="form-control" name="property_address" type="text"></div> 
     <div class="col-md-3 form-group">
        <label>Built-up area of the property<sup>*</sup></label>
    	<input  class="form-control" name="builtup_area" type="text"></div> 
	<div class="col-md-3 form-group">
        <label>Property features and details(description)<sup>*</sup></label>
        <input  class="form-control" name="description" type="text"></div> 
	
		</div>

        <div class="row">

<div class="col-md-6 form-group">
    <label>Property Image <sup style="color: red;">*</sup></label> 
    <img  id="image" width="100" />
    <input class="form-control"  accept="image/png, image/jpg, image/jpeg" required type="file" onchange="loadFile1(event)" name="image" id=""> 
     
    
       
        
</div>
</div>


		
		
<div class="row">
		     <div class="col-md-3 form-group">
        <label>Select Facing<sup>*</sup></label>
        <select  id="property_facing" name="property_facing" class="form-control">
            <option value="">Please Select</option>
            <option value="entrance facing">Entrance facing</option>
            <option value="master bedroom facing">Master bedroom facing</option>
            <option value="pooja room facing">Pooja room facing</option>
            <option value="kitchen facing">Kitchen facing</option>             
        </select>
 
</div>
 </div>

 <div class="row">

	  
<div class="col-md-3 form-group">
   <label>Monthly rent amount<sup>*</sup></label>
   <input  class="form-control" name="monthly_rent" type="number"></div> 
<div class="col-md-3 form-group">
   <label>Security deposit amount<sup>*</sup></label>
   <input  class="form-control" name="security_deposit" type="number"></div> 
<div class="col-md-3 form-group">
   <label>Maintenance charges<sup>*</sup></label>
   <input  class="form-control" name="maintenance" type="number"></div> 

   </div>

   <div class="row">
		     <div class="col-md-3 form-group">
        <label>Notice Period<sup>*</sup></label>
        <select  id="notice" name="notice_period" class="form-control">
            <option value="">Please Select</option>
            <option value="1 month">1 month</option>
            <option value="2 months">2 months</option>
            <option value="3 months">3 months</option>
            <option value="4 months">4 months</option>             
			<option value="5 months">5 months</option>             
			<option value="6 months">6 months</option>             
        </select>
 
      </div>
          <div class="col-md-3 form-group">
            <label>Rental Period<sup>*</sup></label>
            <select  id="rental" name="rental_period" class="form-control">
            <option value="">Please Select</option>
            <option value="7 months">7 months</option>
            <option value="8 months">8 months</option>
            <option value="9 months">9 months</option>
            <option value="10 months">10 months</option>             
			<option value="11 months">11 months</option>             
			<option value="12 months">12 months</option>             
        </select>
         </div>
      </div>

       <div class="row">
		    <div class="col-md-4">
		        <label>Rental agreement start date<sup>*</sup></label>
		        <input type="date"  name="rental_aggr_date" class="form-control">
		    </div>
       </div>

	   <div class="row">
          <div class="col-md-5 form-group">
            <label>Penalty for breach of agreement if any(description tab)<sup>*</sup></label>
            <input  class="form-control" name="penalty" type="text"></div> 
         <div class="col-md-3 form-group">
            <label>E-Stamp Certificate number<sup>*</sup></label>
            <input  class="form-control" name="estamp_number" type="text"></div> 
        <div class="col-md-3 form-group">
           <label>Stamp duty type<sup>*</sup></label>
           <input  class="form-control" name="stamp_duty_type" type="text" placeholder="Lease of immovable property" disabled></div> 
    
       </div>
		
		<hr><h3>Dates</h3><hr>
		
		<div class="row">
		    <div class="col-md-4">
		        <label>Certificate issued date as per your E-Stamp rental agreement<sup>*</sup></label>
		        <input type="date"  name="certi_issue_date" class="form-control">
		    </div>
		</div>

		<hr><h3>Upload the original E-Stamp rental agreement</h3><hr>
		
		  <div class="row">
			  <div class="col-md-4">
                 <label>Choose the file <sup>*</sup></label>
				 <input type="file" accept="application/pdf"  name="estamp_file" class="form-control">


			  </div>
		  </div>
</div> <!--  kdjoewjr div id commercial closed-->


<div id="industrial" style="display:none;"><hr><h3>Basic Details</h3><hr>
    
	<div class="row">
		     <div class="col-md-3 form-group">
        <label>Select Sub Categories<sup style="color:red">*</sup></label>
        <select  id="sub_categories" name="sub_categories" class="form-control">
            <option value="">Please Select</option>
            <option value="factory">Factory</option>
            <option value="warehouse">Warehouse</option>
            
			
        </select>
 
</div>
 </div>
	
	
  <div class="row">

	  
     <div class="col-md-3 form-group">
        <label>Property address<sup>*</sup></label>
        <input  class="form-control" name="property_address" type="text"></div> 
     <div class="col-md-3 form-group">
        <label>Built-up area of the property<sup>*</sup></label>
    	<input  class="form-control" name="builtup_area" type="text"></div> 
	<div class="col-md-3 form-group">
        <label>Property features and details(description)<sup>*</sup></label>
        <input  class="form-control" name="description" type="text"></div> 
	
		</div>

 <div class="row">

<div class="col-md-6 form-group">
    <label>Property Image <sup style="color: red;">*</sup></label> 
    <img  id="image" width="100" />
    <input class="form-control"  accept="image/png, image/jpg, image/jpeg" required type="file" onchange="loadFile1(event)" name="image" id=""> 
     
    
       
        
</div>
</div>


		
		
<div class="row">
		     <div class="col-md-3 form-group">
        <label>Select Facing<sup>*</sup></label>
        <select  id="property_facing" name="property_facing" class="form-control">
            <option value="">Please Select</option>
            <option value="entrance facing">Entrance facing</option>
            <option value="master bedroom facing">Master bedroom facing</option>
            <option value="pooja room facing">Pooja room facing</option>
            <option value="kitchen facing">Kitchen facing</option>             
        </select>
 
</div>
 </div>

 <div class="row">

	  
<div class="col-md-3 form-group">
   <label>Monthly rent amount<sup>*</sup></label>
   <input  class="form-control" name="monthly_rent" type="number"></div> 
<div class="col-md-3 form-group">
   <label>Security deposit amount<sup>*</sup></label>
   <input  class="form-control" name="security_deposit" type="number"></div> 
<div class="col-md-3 form-group">
   <label>Maintenance charges<sup>*</sup></label>
   <input  class="form-control" name="maintenance" type="number"></div> 

   </div>

   <div class="row">
		     <div class="col-md-3 form-group">
        <label>Notice Period<sup>*</sup></label>
        <select  id="notice" name="notice_period" class="form-control">
            <option value="">Please Select</option>
            <option value="1 month">1 month</option>
            <option value="2 months">2 months</option>
            <option value="3 months">3 months</option>
            <option value="4 months">4 months</option>             
			<option value="5 months">5 months</option>             
			<option value="6 months">6 months</option>             
        </select>
 
      </div>
          <div class="col-md-3 form-group">
            <label>Rental Period<sup>*</sup></label>
            <select  id="rental" name="rental_period" class="form-control">
            <option value="">Please Select</option>
            <option value="7 months">7 months</option>
            <option value="8 months">8 months</option>
            <option value="9 months">9 months</option>
            <option value="10 months">10 months</option>             
			<option value="11 months">11 months</option>             
			<option value="12 months">12 months</option>             
        </select>
         </div>
      </div>

       <div class="row">
		    <div class="col-md-4">
		        <label>Rental agreement start date<sup>*</sup></label>
		        <input type="date"  name="rental_aggr_date" class="form-control">
		    </div>
       </div>

	   <div class="row">
          <div class="col-md-5 form-group">
            <label>Penalty for breach of agreement if any(description tab)<sup>*</sup></label>
            <input  class="form-control" name="penalty" type="text"></div> 
         <div class="col-md-3 form-group">
            <label>E-Stamp Certificate number<sup>*</sup></label>
            <input  class="form-control" name="estamp_number" type="text"></div> 
        <div class="col-md-3 form-group">
           <label>Stamp duty type<sup>*</sup></label>
           <input  class="form-control" name="stamp_duty_type" type="text" placeholder="Lease of immovable property" disabled></div> 
    
       </div>
		
		<hr><h3>Dates</h3><hr>
		
		<div class="row">
		    <div class="col-md-4">
		        <label>Certificate issued date as per your E-Stamp rental agreement<sup>*</sup></label>
		        <input type="date"  name="certi_issue_date" class="form-control">
		    </div>
		</div>

		<hr><h3>Upload the original E-Stamp rental agreement</h3><hr>
		
		  <div class="row">
			  <div class="col-md-4">
                 <label>Choose the file <sup>*</sup></label>
				 <input type="file" accept="application/pdf"  name="estamp_file" class="form-control">


			  </div>
		  </div>
</div> <!--  div id industrial closed-->


<div id="institutional" style="display:none;"><hr><h3>Basic Details</h3><hr>
    
	<div class="row">
		     <div class="col-md-3 form-group">
        <label>Select Sub Categories<sup style="color:red">*</sup></label>
        <select  id="sub_categories" name="sub_categories" class="form-control">
            <option value="">Please Select</option>
            <option value="school">School</option>
            <option value="preuniversity">Pre-University</option>
            <option value="college">University/College</option>
            
        </select>
 
</div>
 </div>
	
	
  <div class="row">

	  
     <div class="col-md-3 form-group">
        <label>Property address<sup>*</sup></label>
        <input  class="form-control" name="property_address" type="text"></div> 
     <div class="col-md-3 form-group">
        <label>Built-up area of the property<sup>*</sup></label>
    	<input  class="form-control" name="builtup_area" type="text"></div> 
	<div class="col-md-3 form-group">
        <label>Property features and details(description)<sup>*</sup></label>
        <input  class="form-control" name="description" type="text"></div> 
	
		</div>

        <div class="row">

<div class="col-md-6 form-group">
    <label>Property Image <sup style="color: red;">*</sup></label> 
    <img  id="image" width="100" />
    <input class="form-control"  accept="image/png, image/jpg, image/jpeg" required type="file" onchange="loadFile1(event)" name="image" id=""> 
     
    
       
        
</div>
</div>


		
		
<div class="row">
		     <div class="col-md-3 form-group">
        <label>Select Facing<sup>*</sup></label>
        <select  id="property_facing" name="property_facing" class="form-control">
            <option value="">Please Select</option>
            <option value="entrance facing">Entrance facing</option>
            <option value="master bedroom facing">Master bedroom facing</option>
            <option value="pooja room facing">Pooja room facing</option>
            <option value="kitchen facing">Kitchen facing</option>             
        </select>
 
</div>
 </div>

 <div class="row">

	  
<div class="col-md-3 form-group">
   <label>Monthly rent amount<sup>*</sup></label>
   <input  class="form-control" name="monthly_rent" type="number"></div> 
<div class="col-md-3 form-group">
   <label>Security deposit amount<sup>*</sup></label>
   <input  class="form-control" name="security_deposit" type="number"></div> 
<div class="col-md-3 form-group">
   <label>Maintenance charges<sup>*</sup></label>
   <input  class="form-control" name="maintenance" type="number"></div> 

   </div>

   <div class="row">
		     <div class="col-md-3 form-group">
        <label>Notice Period<sup>*</sup></label>
        <select  id="notice" name="notice_period" class="form-control">
            <option value="">Please Select</option>
            <option value="1 month">1 month</option>
            <option value="2 months">2 months</option>
            <option value="3 months">3 months</option>
            <option value="4 months">4 months</option>             
			<option value="5 months">5 months</option>             
			<option value="6 months">6 months</option>             
        </select>
 
      </div>
          <div class="col-md-3 form-group">
            <label>Rental Period<sup>*</sup></label>
            <select  id="rental" name="rental_period" class="form-control">
            <option value="">Please Select</option>
            <option value="7 months">7 months</option>
            <option value="8 months">8 months</option>
            <option value="9 months">9 months</option>
            <option value="10 months">10 months</option>             
			<option value="11 months">11 months</option>             
			<option value="12 months">12 months</option>             
        </select>
         </div>
      </div>

       <div class="row">
		    <div class="col-md-4">
		        <label>Rental agreement start date<sup>*</sup></label>
		        <input type="date"  name="rental_aggr_date" class="form-control">
		    </div>
       </div>

	   <div class="row">
          <div class="col-md-5 form-group">
            <label>Penalty for breach of agreement if any(description tab)<sup>*</sup></label>
            <input  class="form-control" name="penalty" type="text"></div> 
         <div class="col-md-3 form-group">
            <label>E-Stamp Certificate number<sup>*</sup></label>
            <input  class="form-control" name="estamp_number" type="text"></div> 
        <div class="col-md-3 form-group">
           <label>Stamp duty type<sup>*</sup></label>
           <input  class="form-control" name="stamp_duty_type" type="text" placeholder="Lease of immovable property" disabled></div> 
    
       </div>
		
		<hr><h3>Dates</h3><hr>
		
		<div class="row">
		    <div class="col-md-4">
		        <label>Certificate issued date as per your E-Stamp rental agreement<sup>*</sup></label>
		        <input type="date"  name="certi_issue_date" class="form-control">
		    </div>
		</div>

		<hr><h3>Upload the original E-Stamp rental agreement</h3><hr>
		
		  <div class="row">
			  <div class="col-md-4">
                 <label>Choose the file <sup>*</sup></label>
				 <input type="file" accept="application/pdf"  name="estamp_file" class="form-control">


			  </div>
		  </div>
</div> <!--  kdjoewjr div id residentioal closed-->




		  
<div id="video_verification_div"  style="display:none;">		
			<hr><h3>Video and Address Verification</h3><hr>

	<div class="row">
			<!--<div class="col-md-6 form-group">
				<a class="btn btn-success"  id="start-camera">Start Camera</a>
				<a class="btn btn-info"  id="start-record">Start Recording</a>
				<a class="btn btn-primary" >Switch Camera</a>
				<input type="hidden" id="camera_position" value="user">
				<a class="btn btn-danger" style="display: none;"
					id="stop-record">Stop Recording</a>
				<a id="download-video" style="display: none;" download="test.webm">Download
					Video</a><br>
				<video style="border: 1px solid;" id="video" width="320"
					height="240" autoplay></video>
				<label style="font-size: 12px; color: red;" id="video_label"></label>

				<div id="countdown"></div>
			</div> -->
			<div class="col-md-6 form-group"> 
				<label>Address<sup style="color: red;">*</sup></label>
				<textarea class="form-control" name="address1" id="address1"></textarea>
				<label style="font-size: 12px; color: red;" id="address1_label"></label>
				<br> <label>Landmark<sup style="color: red;">*</sup></label> <input
					class="form-control" name="landmark" id="landmark"> <label
					style="font-size: 12px; color: red;" id="landmark_label"></label> <br>
				<label>Area<sup style="color: red;">*</sup></label> <input
					class="form-control" name="area" id="area"> <label
					style="font-size: 12px; color: red;" id="area_label"></label> <br>

	<label>State<sup style="color: red;">*</sup></label> 
				<select id="state_id" name="state_id" onchange="get_cities()" class="form-control">
    <option value=""> Select state</option>
    <?php foreach($states as $row){?>
    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
     
    <?php }?>
    
</select>		
	     		<label	style="font-size: 12px; color: red;" id="state_label"></label> <br>
				<label>City<sup style="color: red;">*</sup></label>
				<select id="city_id" class="form-control">
                <option value="">Select city</option>
                 </select> 
			   <label style="font-size: 12px; color: red;" id="city_label"></label> <br>
			
				<label>Pincode<sup style="color: red;">*</sup></label> <input
					class="form-control" name="pincode" id="pincode"> <label
					style="font-size: 12px; color: red;" id="pincode_label"></label>
			</div>
		</div>

		 <div class="row">
		    <div class="col-md-11" style="text-align:right;"><br>
		    <input type="submit" class="btn btn-info" value="Submit">
		    </div>
		</div>
		</div>  </div> <!--this two div are from 1 div id residential and div margin style   -->
		
	</form>
	

</section>




<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('.select2').select2();

function get_cities(){
    
    $.ajax({
                   url: '<?php echo base_url("index.php/Forms/get_cities")?>',
                   data: {"state_id":$("#state_id").val()},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {

 var returnarray=JSON.parse(returnHtml);
option_append="<option value='0'>Select city</option>";
                            $.each(returnarray, function( index, value ) {
                                option_append+="<option value='"+value.city_name+"'>"+value.city_name+"</option>";

                                
                            });
$("#city_id").html(option_append);
              }
              });
}




$('#type_of_property').on('change', function() {
 if(this.value=="residential"){
      
     $("#video_verification_div").show();
     $("#residential").show();
     
     
      }
      else if(this.value=="commercial"){
        $("#video_verification_div").show();
        $("#commercial").show();
       
      }
      else if(this.value=="industrial"){
        $("#video_verification_div").show();
        $("#industrial").show();
       
      }
      else if(this.value=="institutional"){
        $("#video_verification_div").show();
        $("#institutional").show();
       
      }
	  
	  
     else{
     $("#video_verification_div").hide();
     $("#residential").hide();
     $("#commercial").hide();
     $("#industrial").hide();
     $("#institutional").hide();
     
     
         
     }

});




</script>
