<style>
    sup{
        color:red;
    }
</style>

<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">
       <h1 style="text-align: center;">Sell Property Form</h1>
	

	<form enctype='multipart/form-data'
			method="POST" onsubmit="return validateForm()"
		action="<?php echo base_url(index_page()."property/Property/accept_sell_property")?>">
		<div style="margin: 50px;">
			<div class="row">
			 <div class="col-md-4 form-group">
        <label> Type Of Sell Property <sup style="color:red;">*</sup></label>
  <select  id="main_type_of_property" name="main_type_of_property" class="form-control">
    <option value="">Please select</option>
    <option value="residential">Residential</option>
    <option value="commercial">Commercial</option>
    <option value="industrial">Industrial</option>
    <option value="institutional">Institutional</option>
    </select>    </div>
    </div>

    <div id="residential" style="display:none;">
    <h1 style="text-align: center;"> Residential Property </h1> 
	<div class="row">
		     <div class="col-md-4 form-group">
        <label>Residential Property Sub Type<sup style="color:red">*</sup></label>
        <select  id="sub_categories" name="sub_categories" class="form-control">
            <option value="">Please Select</option>
            <option value="normal_ready">Normal ready to move properties</option>
            <option value="single_ongoing">Single ongoing house from a large property launch</option>
            <option value="single_ready">Single ready to move house from a large property launch</option>   
        </select>
 
</div>
 </div>
</div>  <!--div id residential closed-->
	
  <div id="normal_ready" style="display:none;"><hr><h3>Normal Ready To Move Properties</h3><hr>
   
  <div class="row">
  <div class="col-md-3 form-group">
        <label>Select Property Type <sup style="color: red;">*</sup></label>
	  <select class="form-control  property_type1a"  id="property_type1a" name="property_type1a" >
							  
							<option value="">Please select</option> 
                     <option value="independent house">Independent house</option>
            <option value="duplex house">Duplex house</option>
            <option value="farm House">Farm House</option>
            <option value="villas">Villas</option>
            <option value="bungalows"> Bungalows</option>
			  <option value="single row house"> Single row house</option>

						
		 <option value="Other">Other</option>

						</select>
					
					<div class="col-md-10 manual_property_type1a"
						style="display: none;">
						<br> <input placeholder="Type here to add manually" 
							id="add_property_type1a1" class="form-control">
					</div>
					<div class="col-md-2 manual_property_type1a"
						style="display: none;">
						<br>
						<input onclick="add_property_type1a()" class="btn btn-default"
							type="button" value="Add">
					</div>
          </div>


    <div class="col-md-3 form group">
        <label>Company Name<sup style="color:red">*</sup></label>
        <input  class="form-control" name="name1a" type="text">
    </div>
    <div class="col-md-3 form-group">
        <label>Project Name </label>
        <input  class="form-control" name="project_name1a" type="text"></div> 

    
           <div class="col-md-3">
      <label for="chkRera1a">
    <input type="checkbox" id="chkRera1a" />
    Do you have  RERA Certificate?
</label>
<div id="dvRera1a" style="display: none">
    RERA Number:
    <input type="text" id="txtReraNumber1a" name="rera_number1a" />
</div>
<hr /> </div>
  
 
 </div>

   <div class="row">
   <div class="col-md-2 form-group">
          <label>Budget(Rs)<sup>*</sup></label>
           <input  class="form-control" name="budget1a" type="number">
             Negotiable
           <input type="checkbox" name="budget_negotiable1a" value="1"  />
           </div>
   <div class="col-md-2 form-group">
          <label>Booking Amount(Rs)<sup>*</sup></label>
           <input  class="form-control" name="booking_amount1a" type="number">
             Negotiable
           <input type="checkbox" name="booking_amount_negotiable1a" value="1"  />
           </div>
   <div class="col-md-2 form-group">
   <label>Maintenance Charges(Rs)</label>
   <input  class="form-control" name="maintenance1a" type="number"></div>	  

   
   <div class="col-md-2 form-group">
        <label>Plot Area<sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="plot_area1a" type="number">
        <select  id="" name="plot_area_measure_type1a" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div> </div>
   <div class="col-md-2 form-group">
        <label>Built-Up Area<sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="builtup_area1a" type="number">
        <select  id="" name="builtup_area_measure_type1a" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   <div class="col-md-2 form-group">
        <label>Carpet Area<sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="carpet_area1a" type="number">
        <select  id="" name="carpet_area_measure_type1a" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   
          
</div>  
   

<div class="row">
<div class="col-md-2 form-group">
        <label>BHK<sup>*</sup></label>
        <input class="form-control" name="bhk1a" type="number"></div>
<div class="col-md-2 form-group">
            <label>No.Of Bathrooms<sup>*</sup></label>
            <input class="form-control" name="number_of_bathroom1a" type="number"></div>
<div class="col-md-2 form-group">
            <label>Type Of Flooring<sup>*</sup></label>
            <select  id="type_of_flooring1a" name="type_of_flooring1a" class="form-control type_of_flooring1a">
            <option value="">Please Select</option>
            <option value="vitrified flooring">Vitrified flooring</option>
            <option value="granite flooring">Granite flooring</option>
            <option value="marble flooring">Marble flooring</option>      
            <option value="Other">Other</option>

</select>

<div class="col-md-10 manual_type_of_flooring1a"
style="display: none;">
<br> <input placeholder="Type here to add manually" 
  id="add_type_of_flooring1a1" class="form-control">
</div>
<div class="col-md-2 manual_type_of_flooring1a"
style="display: none;">
<br>
<input onclick="add_type_of_flooring1a()" class="btn btn-default"
  type="button" value="Add">
</div>
</div>
         
	


		     <div class="col-md-2 form-group">
        <label>Entrance Facing<sup>*</sup></label>
        <select  id="entrance_facing1a" name="entrance_facing1a" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option>             
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>             
            <option value="east">East</option>
            <option value="west">West</option>                          
        </select>
 
</div>
<div class="col-md-2 form-group">
        <label>Master Bedroom Facing</label>
        <select  id="bedroom_facing1a" name="bedroom_facing1a" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option>  
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>
            <option value="east">East</option>             
            <option value="west">West</option>                                     
        </select>
 
</div>
<div class="col-md-2 form-group">
        <label>Pooja Room Facing</label>
        <select  id="poojaroom_facing1a" name="poojaroom_facing1a" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option>  
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>             
            <option value="east">East</option>             
            <option value="west">West</option>                        
        </select>
 
</div>


 </div>
 
 <div class="row">
 <div class="col-md-2 form-group">
        <label>Kitchen Facing</label>
        <select  id="kitchen_facing1a" name="kitchen_facing1a" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option> 
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>             
            <option value="east">East</option>             
            <option value="west">West</option>                         
        </select>
 
</div>

        
      
  <div class="col-md-2 form-group">
         <label>Furnishing Status<sup>*</sup></label>
          <select  id="furnishing_status1a" name="furnishing_status1a" class="form-control">
            <option value="">Please Select</option>
            <option value="unfurnished">Unfurnished</option>
            <option value="semi furnished">Semi Furnished</option>
            <option value="furnished">Furnished</option>
                            
        </select>
 
</div>

        <div class="col-md-2 form-group">
         <label>Ownership Type</label>
           <select  id="ownership_type1a" name="ownership_type1a" class="form-control">
            <option value="">Please Select</option>
            <option value="freehold">Freehold</option>
            <option value="leasehold">Leasehold</option>
                           
        </select>
</div>
<div class="col-md-3 form-group">
        <label>Water Availability <sup>*</sup></label>
        <div style="display:inline-flex;">
        <label>Start</label>
        <input type="time" name="start_water_timing1a" class="form-control" >
        <label>End</label>
        <input type="time" name="end_water_timing1a" class="form-control" ></div>
  </div>
 <div class="col-md-3 form-group">
        <label>Electricity Availability <sup>*</sup></label>
        <div style="display:inline-flex;">
        <label>Start</label>
        <input type="time" name="start_electricity_timing1a" class="form-control" >
        <label>End</label>
        <input type="time" name="end_electricity_timing1a"  class="form-control" ></div>
  </div>

      
 </div>
 <div class="row">
 
<div class="col-md-3">
            <label>All Basic And Additional Amenities Of Property <sup style="color: red;">*</sup></label> 
		<textarea  class="form-control" name="basic_amenities1a" rows="3"></textarea>
		</div>

<div class="col-md-3 form group">
            <label>Nearby Hospitals/Schools/IT Companies </label> 
		<textarea  class="form-control" name="nearby1a" rows="3"></textarea>
		</div>

        
<div class="col-md-3 form group">
            <label>Offers If Any </label> 
		<textarea  class="form-control" name="offers1a" rows="3"></textarea>
		</div>
   </div>
 


</div> <!--   div id normal_ready 1a closed-->

<div id="single_ongoing" style="display:none;"><hr><h3>Single Ongoing House From A Large Property Launch</h3><hr>
   
  <div class="row">
      
  <div class="col-md-3 form-group">
        <label>Select Property Type <sup style="color: red;">*</sup></label>
	  <select class="form-control  property_type1b"  id="property_type1b" name="property_type1b"  >
						
							<option value="">Please select</option> 
                     <option value="Builder Floor apartment"> Builder Floor apartment</option>
            <option value="Multistorey apartment"> Multistorey apartment</option>
            <option value="gated community apartment"> gated community apartment</option>
            <option value="Studio apartment"> Studio apartment</option>
            <option value="single pent house"> Single pent house</option> 

						
		 <option value="Other">Other</option>

						</select>
					
					<div class="col-md-10 manual_property_type1b"
						style="display: none;">
						<br> <input placeholder="Type here to add manually" 
							id="add_property_type1b1" class="form-control">
					</div>
					<div class="col-md-2 manual_property_type1b"
						style="display: none;">
						<br>
						<input onclick="add_property_type1b()" class="btn btn-default"
							type="button" value="Add">
					</div>
          </div>

          <div class="col-md-3 form group">
        <label>Company Name<sup style="color:red">*</sup></label>
        <input  class="form-control" name="name1b" type="text">
    </div>
    <div class="col-md-3 form-group">
        <label>Project Name </label>
        <input  class="form-control" name="project_name1b" type="text"></div> 

    
           <div class="col-md-3">
      <label for="chkRera1b">
    <input type="checkbox" id="chkRera1b" />
    Do you have  RERA Certificate?
</label>
<div id="dvRera1b" style="display: none">
    RERA Number:
    <input type="text" id="txtReraNumber1b" name="rera_number1b" />
</div>
<hr /> </div>
  
 
 </div>

   <div class="row">
   <div class="col-md-2 form-group">
          <label>Budget(Rs)<sup>*</sup></label>
           <input  class="form-control" name="budget1b" type="number">
             Negotiable
           <input type="checkbox" name="budget_negotiable1b" value="1"  />
           </div>
   <div class="col-md-2 form-group">
          <label>Booking Amount(Rs)<sup>*</sup></label>
           <input  class="form-control" name="booking_amount1b" type="number">
             Negotiable
           <input type="checkbox" name="booking_amount_negotiable1b" value="1"  />
           </div>
   <div class="col-md-2 form-group">
   <label>Maintenance Charges(Rs)</label>
   <input  class="form-control" name="maintenance1b" type="number"></div>	  

   
   <div class="col-md-2 form-group">
        <label>Plot Area<sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="plot_area1b" type="number">
        <select  id="" name="plot_area_measure_type1b" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div> </div>
   <div class="col-md-2 form-group">
        <label>Built-up Area<sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="builtup_area1b" type="number">
        <select  id="" name="builtup_area_measure_type1b" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   <div class="col-md-2 form-group">
        <label>Carpet Area<sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="carpet_area1b" type="number">
        <select  id="" name="carpet_area_measure_type1b" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   
          
</div>  
   

<div class="row">
<div class="col-md-2 form-group">
        <label>BHK<sup>*</sup></label>
        <input class="form-control" name="bhk1b" type="number"></div>
<div class="col-md-2 form-group">
            <label>No.Of Bathrooms<sup>*</sup></label>
            <input class="form-control" name="number_of_bathroom1b" type="number"></div>
<div class="col-md-2 form-group">
            <label>Type Of Flooring<sup>*</sup></label>
            <select  id="type_of_flooring1b" name="type_of_flooring1b" class="form-control type_of_flooring1b">
            <option value="">Please Select</option>
            <option value="vitrified flooring">Vitrified flooring</option>
            <option value="granite flooring">Granite flooring</option>
            <option value="marble flooring">Marble flooring</option>      
            <option value="Other">Other</option>

</select>

<div class="col-md-10 manual_type_of_flooring1b"
style="display: none;">
<br> <input placeholder="Type here to add manually" 
  id="add_type_of_flooring1b1" class="form-control">
</div>
<div class="col-md-2 manual_type_of_flooring1b"
style="display: none;">
<br>
<input onclick="add_type_of_flooring1b()" class="btn btn-default"
  type="button" value="Add">
</div>
</div>
         
	


		     <div class="col-md-2 form-group">
        <label>Entrance Facing<sup>*</sup></label>
        <select  id="entrance_facing1b" name="entrance_facing1b" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option>             
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>             
            <option value="east">East</option>
            <option value="west">West</option>                          
        </select>
 
</div>
<div class="col-md-2 form-group">
        <label>Master Bedroom Facing</label>
        <select  id="bedroom_facing1b" name="bedroom_facing1b" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option>  
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>
            <option value="east">East</option>             
            <option value="west">West</option>                                     
        </select>
 
</div>
<div class="col-md-2 form-group">
        <label>Pooja Room Facing</label>
        <select  id="poojaroom_facing1b" name="poojaroom_facing1b" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option>  
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>             
            <option value="east">East</option>             
            <option value="west">West</option>                        
        </select>
 
</div>


 </div>
 
 <div class="row">
 <div class="col-md-2 form-group">
        <label>Kitchen Facing</label>
        <select  id="kitchen_facing1b" name="kitchen_facing1b" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option> 
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>             
            <option value="east">East</option>             
            <option value="west">West</option>                         
        </select>
 
</div>

        
      
  <div class="col-md-2 form-group">
         <label>Furnishing Status<sup>*</sup></label>
          <select  id="furnishing_status1b" name="furnishing_status1b" class="form-control">
            <option value="">Please Select</option>
            <option value="unfurnished">Unfurnished</option>
            <option value="semi furnished">Semi Furnished</option>
            <option value="furnished">Furnished</option>
                            
        </select>
 
</div>

        <div class="col-md-2 form-group">
         <label>Ownership Type</label>
           <select  id="ownership_type1b" name="ownership_type1b" class="form-control">
            <option value="">Please Select</option>
            <option value="freehold">Freehold</option>
            <option value="leasehold">Leasehold</option>
                           
        </select>
</div>
<div class="col-md-3 form-group">
        <label>Water Availability <sup>*</sup></label>
        <div style="display:inline-flex;">
        <label>Start</label>
        <input type="time" name="start_water_timing1b" class="form-control" >
        <label>End</label>
        <input type="time" name="end_water_timing1b" class="form-control" ></div>
  </div>
 <div class="col-md-3 form-group">
        <label>Electricity Availability <sup>*</sup></label>
        <div style="display:inline-flex;">
        <label>Start</label>
        <input type="time" name="start_electricity_timing1b" class="form-control" >
        <label>End</label>
        <input type="time" name="end_electricity_timing1b"  class="form-control" ></div>
  </div>

      
 </div>
 <div class="row">
<div class="col-md-3">
            <label>All Basic And Additional Amenities Of Property <sup style="color: red;">*</sup></label> 
		<textarea  class="form-control" name="basic_amenities1b" rows="3"></textarea>
		</div>

<div class="col-md-3 form group">
            <label>Nearby Hospitals/Schools/IT Companies </label> 
		<textarea  class="form-control" name="nearby1b" rows="3"></textarea>
		</div>

        
<div class="col-md-3 form group">
            <label>Offers If Any </label> 
		<textarea  class="form-control" name="offers1b" rows="3"></textarea>
		</div>
   </div>
 
</div> <!--  kdjoewjr div id single_ongoing 1b closed-->

<div id="single_ready" style="display:none;"><hr><h3>Single Ready To Move House From A Large Property Launch</h3><hr>
   
<div class="row">
<div class="col-md-3 form-group">
        <label>Select Property Type <sup style="color: red;">*</sup></label>
	  <select class="form-control  property_type1c"  id="property_type1c" name="property_type1c" >
							  
							<option value="">Please select</option> 
                     <option value="Builder Floor apartment"> Builder Floor apartment</option>
            <option value="Multistorey apartment"> Multistorey apartment</option>
            <option value="gated community apartment"> gated community apartment</option>
            <option value="Studio apartment"> Studio apartment</option>
            <option value="single pent house"> Single pent house</option> 

						
		 <option value="Other">Other</option>

						</select>
					
					<div class="col-md-10 manual_property_type1c"
						style="display: none;">
						<br> <input placeholder="Type here to add manually" 
							id="add_property_type1c1" class="form-control">
					</div>
					<div class="col-md-2 manual_property_type1c"
						style="display: none;">
						<br>
						<input onclick="add_property_type1c()" class="btn btn-default"
							type="button" value="Add">
					</div>
          </div>
          <div class="col-md-3 form group">
        <label>Company Name<sup style="color:red">*</sup></label>
        <input  class="form-control" name="name1c" type="text">
    </div>
    <div class="col-md-3 form-group">
        <label>Project Name </label>
        <input  class="form-control" name="project_name1c" type="text"></div> 

    
           <div class="col-md-3">
      <label for="chkRera1c">
    <input type="checkbox" id="chkRera1c" />
    Do you have  RERA Certificate?
</label>
<div id="dvRera1c" style="display: none">
    RERA Number:
    <input type="text" id="txtReraNumber1c" name="rera_number1c" />
</div>
<hr /> </div>
  
 
 </div>

   <div class="row">
   <div class="col-md-2 form-group">
          <label>Budget(Rs)<sup>*</sup></label>
           <input  class="form-control" name="budget1c" type="number">
             Negotiable
           <input type="checkbox" name="budget_negotiable1c" value="1"  />
           </div>
   <div class="col-md-2 form-group">
          <label>Booking Amount(Rs)<sup>*</sup></label>
           <input  class="form-control" name="booking_amount1c" type="number">
             Negotiable
           <input type="checkbox" name="booking_amount_negotiable1c" value="1"  />
           </div>
   <div class="col-md-2 form-group">
   <label>Maintenance Charges(Rs)</label>
   <input  class="form-control" name="maintenance1c" type="number"></div>	  

   
   <div class="col-md-2 form-group">
        <label>Plot Area<sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="plot_area1c" type="number">
        <select  id="" name="plot_area_measure_type1c" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div> </div>
   <div class="col-md-2 form-group">
        <label>Built-Up Area<sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="builtup_area1c" type="number">
        <select  id="" name="builtup_area_measure_type1c" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   <div class="col-md-2 form-group">
        <label>Carpet Area<sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="carpet_area1c" type="number">
        <select  id="" name="carpet_area_measure_type1c" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   
          
</div>  
   

<div class="row">
<div class="col-md-2 form-group">
        <label>BHK<sup>*</sup></label>
        <input class="form-control" name="bhk1c" type="number"></div>
<div class="col-md-2 form-group">
            <label>No.Of Bathrooms<sup>*</sup></label>
            <input class="form-control" name="number_of_bathroom1c" type="number"></div>
<div class="col-md-2 form-group">
            <label>Type Of Flooring<sup>*</sup></label>
            <select  id="type_of_flooring1c" name="type_of_flooring1c" class="form-control type_of_flooring1c">
            <option value="">Please Select</option>
            <option value="vitrified flooring">Vitrified flooring</option>
            <option value="granite flooring">Granite flooring</option>
            <option value="marble flooring">Marble flooring</option>      
            <option value="Other">Other</option>

</select>

<div class="col-md-10 manual_type_of_flooring1c"
style="display: none;">
<br> <input placeholder="Type here to add manually" 
  id="add_type_of_flooring1c1" class="form-control">
</div>
<div class="col-md-2 manual_type_of_flooring1c"
style="display: none;">
<br>
<input onclick="add_type_of_flooring1c()" class="btn btn-default"
  type="button" value="Add">
</div>
</div>
         
	


		     <div class="col-md-2 form-group">
        <label>Entrance Facing<sup>*</sup></label>
        <select  id="entrance_facing1c" name="entrance_facing1c" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option>             
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>             
            <option value="east">East</option>
            <option value="west">West</option>                          
        </select>
 
</div>
<div class="col-md-2 form-group">
        <label>Master Bedroom Facing</label>
        <select  id="bedroom_facing1c" name="bedroom_facing1c" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option>  
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>
            <option value="east">East</option>             
            <option value="west">West</option>                                     
        </select>
 
</div>
<div class="col-md-2 form-group">
        <label>Pooja Room Facing</label>
        <select  id="poojaroom_facing1c" name="poojaroom_facing1c" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option>  
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>             
            <option value="east">East</option>             
            <option value="west">West</option>                        
        </select>
 
</div>


 </div>
 
 <div class="row">
 <div class="col-md-2 form-group">
        <label>Kitchen Facing</label>
        <select  id="kitchen_facing1c" name="kitchen_facing1c" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-east</option>
            <option value="north-west">North-west</option>
            <option value="south">South</option> 
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>             
            <option value="east">East</option>             
            <option value="west">West</option>                         
        </select>
 
</div>

        
      
  <div class="col-md-2 form-group">
         <label>Furnishing Status<sup>*</sup></label>
          <select  id="furnishing_status1c" name="furnishing_status1c" class="form-control">
            <option value="">Please Select</option>
            <option value="unfurnished">Unfurnished</option>
            <option value="semi furnished">Semi Furnished</option>
            <option value="furnished">Furnished</option>
                            
        </select>
 
</div>

        <div class="col-md-2 form-group">
         <label>Ownership Type</label>
           <select  id="ownership_type1c" name="ownership_type1c" class="form-control">
            <option value="">Please Select</option>
            <option value="freehold">Freehold</option>
            <option value="leasehold">Leasehold</option>
                           
        </select>
</div>
<div class="col-md-3 form-group">
        <label>Water Availability <sup>*</sup></label>
        <div style="display:inline-flex;">
        <label>Start</label>
        <input type="time" name="start_water_timing1c" class="form-control" >
        <label>End</label>
        <input type="time" name="end_water_timing1c" class="form-control" ></div>
  </div>
 <div class="col-md-3 form-group">
        <label>Electricity Availability <sup>*</sup></label>
        <div style="display:inline-flex;">
        <label>Start</label>
        <input type="time" name="start_electricity_timing1c" class="form-control" >
        <label>End</label>
        <input type="time" name="end_electricity_timing1c"  class="form-control" ></div>
  </div>

      
 </div>
 <div class="row">

<div class="col-md-3">
            <label>All Basic And Additional Amenities Of Property <sup style="color: red;">*</sup></label> 
		<textarea  class="form-control" name="basic_amenities1c" rows="3"></textarea>
		</div>

<div class="col-md-3 form group">
            <label>Nearby Hospitals/Schools/IT Companies </label> 
		<textarea  class="form-control" name="nearby1c" rows="3"></textarea>
		</div>

        
<div class="col-md-3 form group">
            <label>Offers If Any </label> 
		<textarea  class="form-control" name="offers1c" rows="3"></textarea>
		</div>
   </div>
 

</div> <!--  div id single_ready 1c closed-->



<div id="commercial" style="display:none;"><hr><h3> Commercial Property </h3><hr>

    
<div class="row">
<div class="col-md-3 form-group">
        <label>Select Property Type <sup style="color: red;">*</sup></label>
	  <select class="form-control  property_type2"  id="property_type2" name="property_type2" >
							
							<option value="">Please select</option> 
                                                 <option value="Office Space (Class A)">Office Space (Class A)</option>
            <option value="Office Space (Class B)">Office Space (Class B)</option>
            <option value="Office Space (Class C)">Office Space (Class C)</option>
            <option value="Retail(retail store)">Retail(retail store)</option>
            <option value="Retail(shopping centers)"> Retail(shopping centers)</option>
            <option value="Retail(shops)">Retail(shops)</option>
            <option value="Healthcare(Hospitals)">  Healthcare(Hospitals)</option>
			<option value="Healthcare(Nursing Homes)"> Healthcare(Nursing Homes)</option>
			<option value="Healthcare(Medical Centers)"> Healthcare(Medical Centers)</option>
			<option value="Leisure(cafes)"> Leisure(cafes)</option>
            <option value="Leisure(restaurants)"> Leisure(restaurants)</option>
            <option value="Leisure(hotels)"> Leisure(hotels)</option>
            <option value="Leisure(pubs)"> Leisure(pubs)</option>
            <option value="Leisure(sports complex)"> Leisure(sports complex)</option>
						
		 <option value="Other">Other</option>

						</select>
					
					<div class="col-md-10 manual_property_type2"
						style="display: none;">
						<br> <input placeholder="Type here to add manually" 
							id="add_property_type21" class="form-control">
					</div>
					<div class="col-md-2 manual_property_type2"
						style="display: none;">
						<br>
						<input onclick="add_property_type2()" class="btn btn-default"
							type="button" value="Add">
					</div>
          </div>
<div class="col-md-3 form-group">
    <label>Company Name<sup style="color:red;">*</sup></label>
    <input  class="form-control" name="name2" type="text"></div> 
<div class="col-md-3 form-group">
    <label>Project Name</label>
    <input  class="form-control" name="project_name2" type="text"></div> 
    
    <div class="col-md-3 form-group">
          <label>Budget(Rs)<sup>*</sup></label>
           <input  class="form-control" name="budget2" type="number">
             Negotiable
           <input type="checkbox" name="budget_negotiable2" value="1"  />
           </div>


</div>
 
    <div class="row">

  <div class="col-md-2 form-group">
    <label>Maintenance Charges(Rs)</label>
    <input  class="form-control" name="maintenance2" type="text"></div>  

    <div class="col-md-2 form-group">
        <label>Built-Up Area <sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="builtup_area2" type="number">
        <select  id="" name="builtup_area_measure_type2" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   <div class="col-md-2 form-group">
            <label>Type Of Flooring<sup>*</sup></label>
            <select  id="type_of_flooring2" name="type_of_flooring2" class="form-control type_of_flooring2">
            <option value="">Please Select</option>
            <option value="vitrified flooring">Vitrified flooring</option>
            <option value="granite flooring">Granite flooring</option>
            <option value="marble flooring">Marble flooring</option>      
            <option value="Other">Other</option>

</select>

<div class="col-md-10 manual_type_of_flooring2"
style="display: none;">
<br> <input placeholder="Type here to add manually" 
  id="add_type_of_flooring21" class="form-control">
</div>
<div class="col-md-2 manual_type_of_flooring2"
style="display: none;">
<br>
<input onclick="add_type_of_flooring2()" class="btn btn-default"
  type="button" value="Add">
</div>
</div>

<div class="col-md-3">
      <label for="chkRera2">
    <input type="checkbox" id="chkRera2" />
    Do you have  RERA Certificate?
</label>
<div id="dvRera2" style="display: none">
    RERA Number:
    <input type="text" id="txtReraNumber2" name="rera_number2" />
</div>
<hr /> </div>

		    <div class="col-md-3">
            <label>Property Features And Details <sup style="color: red;">*</sup></label> 
		<textarea  class="form-control" name="description2" rows="4"></textarea>
		</div>
</div>
    
</div>  <!--div id commercial closed-->


<div id="industrial" style="display:none;"><hr><h3> Industrial Property </h3><hr>


 <div class="row">
<div class="col-md-3 form-group">
        <label>Select Property Type <sup style="color: red;">*</sup></label>
	  <select class="form-control  property_type3"  id="property_type3" name="property_type3"  >
							  
							<option value="">Please select</option> 
              <option value="factory">Factory</option>
                                     <option value="warehouse">Warehouse</option>
						
		 <option value="Other">Other</option>

						</select>
					
					<div class="col-md-10 manual_property_type3"
						style="display: none;">
						<br> <input placeholder="Type here to add manually" 
							id="add_property_type31" class="form-control">
					</div>
					<div class="col-md-2 manual_property_type3"
						style="display: none;">
						<br>
						<input onclick="add_property_type3()" class="btn btn-default"
							type="button" value="Add">
					</div>
          </div>
<div class="col-md-3 form-group">
    <label>Company Name<sup style="color:red;">*</sup></label>
    <input  class="form-control" name="name3" type="text"></div> 
<div class="col-md-3 form-group">
    <label>Project Name</label>
    <input  class="form-control" name="project_name3" type="text"></div> 
    
    <div class="col-md-3 form-group">
          <label>Budget(Rs)<sup>*</sup></label>
           <input  class="form-control" name="budget3" type="number">
             Negotiable
           <input type="checkbox" name="budget_negotiable3" value="1"  />
           </div>


</div>
 
    <div class="row">

  <div class="col-md-2 form-group">
    <label>Maintenance charges(Rs)</label>
    <input  class="form-control" name="maintenance3" type="text"></div>  

    <div class="col-md-2 form-group">
        <label>Built-Up Area <sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="builtup_area3" type="number">
        <select  id="" name="builtup_area_measure_type3" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   <div class="col-md-3">
      <label for="chkRera3">
    <input type="checkbox" id="chkRera3" />
    Do you have  RERA Certificate?
</label>
<div id="dvRera3" style="display: none">
    RERA Number:
    <input type="text" id="txtReraNumber3" name="rera_number3" />
</div>
<hr /> </div>
		    <div class="col-md-3">
            <label>Property Features And Details <sup style="color: red;">*</sup></label> 
		<textarea  class="form-control" name="description3" rows="4"></textarea>
		</div>
</div>
</div>  <!--div id industrial closed-->

<div id="institutional" style="display:none;"><hr><h3> Institutional Property </h3><hr>

<div class="row">
<div class="col-md-3 form-group">
        <label>Select Property Type <sup style="color: red;">*</sup></label>
	  <select class="form-control  property_type4"  id="property_type4" name="property_type4"  >
							  
							<option value="">Please select</option> 
              <option value="school">School</option>
            <option value="pre-university">Pre-University</option>
            <option value="university/college">University/College</option>
						
		 <option value="Other">Other</option>

						</select>
					
					<div class="col-md-10 manual_property_type4"
						style="display: none;">
						<br> <input placeholder="Type here to add manually" 
							id="add_property_type41" class="form-control">
					</div>
					<div class="col-md-2 manual_property_type4"
						style="display: none;">
						<br>
						<input onclick="add_property_type4()" class="btn btn-default"
							type="button" value="Add">
					</div>
          </div>
<div class="col-md-3 form-group">
    <label>Company Name<sup style="color:red;">*</sup></label>
    <input  class="form-control" name="name4" type="text"></div> 
<div class="col-md-3 form-group">
    <label>Project Name</label>
    <input  class="form-control" name="project_name4" type="text"></div> 
    
    <div class="col-md-3 form-group">
          <label>Budget(Rs)<sup>*</sup></label>
           <input  class="form-control" name="budget4" type="number">
             Negotiable
           <input type="checkbox" name="budget_negotiable4" value="1"  />
           </div>


</div>
 
    <div class="row">

  <div class="col-md-2 form-group">
    <label>Maintenance charges(Rs)</label>
    <input  class="form-control" name="maintenance4" type="text"></div>  

    <div class="col-md-2 form-group">
        <label>Built-Up Area <sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="builtup_area4" type="number">
        <select  id="" name="builtup_area_measure_type4" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div>
  </div>
   <div class="col-md-2 form-group">
            <label>Type Of Flooring<sup>*</sup></label>
            <select  id="type_of_flooring4" name="type_of_flooring4" class="form-control type_of_flooring4">
            <option value="">Please Select</option>
            <option value="vitrified flooring">Vitrified flooring</option>
            <option value="granite flooring">Granite flooring</option>
            <option value="marble flooring">Marble flooring</option>      
            <option value="Other">Other</option>

</select>

<div class="col-md-10 manual_type_of_flooring4"
style="display: none;">
<br> <input placeholder="Type here to add manually" 
  id="add_type_of_flooring41" class="form-control">
</div>
<div class="col-md-2 manual_type_of_flooring4"
style="display: none;">
<br>
<input onclick="add_type_of_flooring4()" class="btn btn-default"
  type="button" value="Add">
</div>
</div>
<div class="col-md-3">
      <label for="chkRera4">
    <input type="checkbox" id="chkRera4" />
    Do you have  RERA Certificate?
</label>
<div id="dvRera4" style="display: none">
    RERA Number:
    <input type="text" id="txtReraNumber4" name="rera_number4" />
</div>
<hr /> </div>
	

		    <div class="col-md-3">
            <label>Property features and details <sup style="color: red;">*</sup></label> 
		<textarea  class="form-control" name="description4" rows="4"></textarea>
		</div>
</div>
  </div>  <!--div institutional closed -->




<div id="video_verification_div"  style="display:none;">		
			<hr><h3>Video and Address Verification</h3><hr>
<!-- Image upload start -->

<fieldset class="form-group">
        <a href="javascript:void(0)" class="btn btn-info" onclick="$('#pro-image').click()">Upload Image</a>
        <input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
    </fieldset>
    <div class="preview-images-zone">
    </div>
    <!-- Image upload end -->

	<div class="row">

                <div class="col-md-6 form-group">
				<a class="btn btn-success"  id="start-camera">Start Camera</a>
				<a class="btn btn-info"  id="start-record">Start Recording</a>
				<a class="btn btn-primary" >Switch Camera</a>
				<input type="hidden" id="camera_position" value="user">
				<a class="btn btn-danger" style="display: none;"
					id="stop-record">Stop Recording</a>
				<a id="download-video" style="display: onchangenone;" download="test.webm">Download
					Video</a><br>
				<video style="border: 1px solid;" id="video" width="320"
					height="240" autoplay></video>
				<label style="font-size: 12px; color: red;" id="video_label"></label>

				<div id="countdown"></div>
			</div> 
			<div class="col-md-6 form-group">
                
            <label>Upload Pancard <sup>*</sup></label>
					<input class="form-control" onchange="PreviewPAN()"
						accept="application/pdf"  type="file" name="pancard"
						id="pancard"> 
					<div style="clear: both">
						<iframe id="pancard1" frameborder="0" scrolling="no" width="200"
							height="300"></iframe>
					</div>
                    
               
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
		</div>  </div> <!--this two div are from 1 div id video verification and div margin style   -->	
	</form>
	

</section>




<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
 function validateForm(){
   switch($("select[name=main_type_of_property]").val()){
     case "residential":
      if($("#sub_categories").val()=="normal_ready"){
       

        if($("select[name=property_type1a]").val()==""){
			alert("please select property type");
            return false;
		}
    else if ($("input[name=name1a]").val()==""){
            alert("please enter company name");
            return false;
     }
      
     
     else if ($("input[name=budget1a]").val()==""){
            alert("please enter budget amount");
            return false;
     }
     else if ($("input[name=booking_amount1a]").val()==""){
            alert("please enter booking amount");
            return false;
     }
     
     else if ($("input[name=plot_area1a]").val()==""){
            alert("please enter plot area");
            return false;
     }
     else if ($("input[name=builtup_area1a]").val()==""){
            alert("please enter built up area");
            return false;
     }
     
     else if ($("input[name=carpet_area1a]").val()==""){   
            alert("please enter carpet area ");
            return false;
     }
     else if ($("input[name=bhk1a]").val()==""){
            alert("please enter number of BHK");
            return false;
     }
     else if ($("input[name=number_of_bathroom1a]").val()==""){
            alert("please enter no.of bathroom ");
            return false;
     }
       
     else if ($("select[name=type_of_flooring1a]").val()==""){
            alert("please select type of flooring");
            return false;
     }
     else if ($("select[name=entrance_facing1a]").val()==""){
            alert("please select entrance facing ");
            return false;
     }
     else if ($("select[name=furnishing_status1a]").val()==""){
            alert("please select furnishing status ");
            return false;
     }
     else if ($("input[name=start_water_timing1a]").val()==""){
            alert("please enter water time start ");
            return false;
     }
     else if ($("input[name=end_water_timing1a]").val()==""){
            alert("please enter water time end ");
            return false;
     }
     else if ($("input[name=start_electricity_timing1a]").val()==""){
            alert("please enter electricity time start  ");
            return false;
     }
     else if ($("input[name=end_electricity_timing1a]").val()==""){
            alert("please enter electricity  time  end  ");
            return false;
     }
     

     else if ($("textarea[name=basic_amenities1a]").val()==""){
            alert("please enter basic and additional amenities");
            return false;
     }

     else if ($("input[name=pancard]").val()==""){
            alert("please upload pancard document ");
            return false;
     }
     else if ($("textarea[name=address1]").val()==""){
            alert("please enter address ");
            return false;
     }
     else if ($("input[name=landmark]").val()==""){
            alert("please enter landmark ");
            return false;
     }
     else if ($("input[name=area]").val()==""){
            alert("please enter area ");
            return false;
     }else if ($("select[name=state_id]").val()==""){
            alert("please select state ");
            return false;
     }else if ($("input[name=city_id]").val()==""){
            alert("please select city ");
            return false;
     }else if ($("input[name=pincode]").val()==""){
            alert("please enter pincode ");
            return false;
     }
     else{
        return true
     }

       
      }
      if($("#sub_categories").val()=="single_ongoing"){
       

       if($("select[name=property_type1b]").val()==""){
     alert("please select property type");
           return false;
   }
   else if ($("input[name=name1b]").val()==""){
           alert("please enter company name");
           return false;
    }
     
    else if ($("input[name=budget1b]").val()==""){
           alert("please enter budget amount");
           return false;
    }
    else if ($("input[name=booking_amount1b]").val()==""){
           alert("please enter booking amount");
           return false;
    }
    
    else if ($("input[name=plot_area1b]").val()==""){
           alert("please enter plot area");
           return false;
    }
    else if ($("input[name=builtup_area1b]").val()==""){
           alert("please enter built up area");
           return false;
    }
    
    else if ($("input[name=carpet_area1b]").val()==""){   
           alert("please enter carpet area ");
           return false;
    }
    else if ($("input[name=bhk1b]").val()==""){
           alert("please enter number of BHK");
           return false;
    }
    else if ($("input[name=number_of_bathroom1b]").val()==""){
           alert("please enter no.of bathroom ");
           return false;
    }
      
    else if ($("select[name=type_of_flooring1b]").val()==""){
           alert("please select type of flooring");
           return false;
    }
    else if ($("select[name=entrance_facing1b]").val()==""){
           alert("please select entrance facing ");
           return false;
    }
    else if ($("select[name=furnishing_status1b]").val()==""){
           alert("please select furnishing status ");
           return false;
    }
    else if ($("input[name=start_water_timing1b]").val()==""){
           alert("please enter water time start ");
           return false;
    }
    else if ($("input[name=end_water_timing1b]").val()==""){
           alert("please enter water time end ");
           return false;
    }
    else if ($("input[name=start_electricity_timing1b]").val()==""){
           alert("please enter electricity time start  ");
           return false;
    }
    else if ($("input[name=end_electricity_timing1b]").val()==""){
           alert("please enter electricity  time  end  ");
           return false;
    }
    
    else if ($("textarea[name=basic_amenities1b]").val()==""){
           alert("please enter basic and additional amenities");
           return false;
    }

    else if ($("input[name=pancard]").val()==""){
           alert("please upload pancard document ");
           return false;
    }
    else if ($("textarea[name=address1]").val()==""){
           alert("please enter address ");
           return false;
    }
    else if ($("input[name=landmark]").val()==""){
           alert("please enter landmark ");
           return false;
    }
    else if ($("input[name=area]").val()==""){
           alert("please enter area ");
           return false;
    }else if ($("select[name=state_id]").val()==""){
           alert("please select state ");
           return false;
    }else if ($("input[name=city_id]").val()==""){
           alert("please select city ");
           return false;
    }else if ($("input[name=pincode]").val()==""){
           alert("please enter pincode ");
           return false;
    }
    else{
       return true
    }

      
     }
     if($("#sub_categories").val()=="single_ready"){
       

       if($("select[name=property_type1c]").val()==""){
     alert("please select property type");
           return false;
   }
   else if ($("input[name=name1c]").val()==""){
           alert("please enter company name");
           return false;
    }
     
    
    else if ($("input[name=budget1c]").val()==""){
           alert("please enter budget amount");
           return false;
    }
    else if ($("input[name=booking_amount1c]").val()==""){
           alert("please enter booking amount");
           return false;
    }
    
    else if ($("input[name=plot_area1c]").val()==""){
           alert("please enter plot area");
           return false;
    }
    else if ($("input[name=builtup_area1c]").val()==""){
           alert("please enter built up area");
           return false;
    }
    
    else if ($("input[name=carpet_area1c]").val()==""){   
           alert("please enter carpet area ");
           return false;
    }
    else if ($("input[name=bhk1c]").val()==""){
           alert("please enter number of BHK");
           return false;
    }
    else if ($("input[name=number_of_bathroom1c]").val()==""){
           alert("please enter no.of bathroom ");
           return false;
    }
      
    else if ($("select[name=type_of_flooring1c]").val()==""){
           alert("please select type of flooring");
           return false;
    }
    else if ($("select[name=entrance_facing1c]").val()==""){
           alert("please select entrance facing ");
           return false;
    }
    else if ($("select[name=furnishing_status1c]").val()==""){
           alert("please select furnishing status ");
           return false;
    }
    else if ($("input[name=start_water_timing1c]").val()==""){
           alert("please enter water time start ");
           return false;
    }
    else if ($("input[name=end_water_timing1c]").val()==""){
           alert("please enter water time end ");
           return false;
    }
    else if ($("input[name=start_electricity_timing1c]").val()==""){
           alert("please enter electricity time start  ");
           return false;
    }
    else if ($("input[name=end_electricity_timing1c]").val()==""){
           alert("please enter electricity  time  end  ");
           return false;
    }
    

    else if ($("textarea[name=basic_amenities1c]").val()==""){
           alert("please enter basic and additional amenities");
           return false;
    }

    else if ($("input[name=pancard]").val()==""){
           alert("please upload pancard document ");
           return false;
    }
    else if ($("textarea[name=address1]").val()==""){
           alert("please enter address ");
           return false;
    }
    else if ($("input[name=landmark]").val()==""){
           alert("please enter landmark ");
           return false;
    }
    else if ($("input[name=area]").val()==""){
           alert("please enter area ");
           return false;
    }else if ($("select[name=state_id]").val()==""){
           alert("please select state ");
           return false;
    }else if ($("input[name=city_id]").val()==""){
           alert("please select city ");
           return false;
    }else if ($("input[name=pincode]").val()==""){
           alert("please enter pincode ");
           return false;
    }
    else{
       return true
    }

      
     }
     break;
     case "commercial":
      if($("select[name=property_type2]").val()==""){
     alert("please select property type");
           return false;
   }
   else if ($("input[name=name2]").val()==""){
           alert("please enter company name");
           return false;
    }
     
    
    else if ($("input[name=budget2]").val()==""){
           alert("please enter budget amount");
           return false;
    }
    
    else if ($("input[name=builtup_area2]").val()==""){
           alert("please enter built up area");
           return false;
    }
      
    else if ($("select[name=type_of_flooring2]").val()==""){
           alert("please select type of flooring");
           return false;
    }
   

    else if ($("textarea[name=description2]").val()==""){
           alert("please enter property features and details description ");
           return false;
    }

    else if ($("input[name=pancard]").val()==""){
           alert("please upload pancard document ");
           return false;
    }
    else if ($("textarea[name=address1]").val()==""){
           alert("please enter address ");
           return false;
    }
    else if ($("input[name=landmark]").val()==""){
           alert("please enter landmark ");
           return false;
    }
    else if ($("input[name=area]").val()==""){
           alert("please enter area ");
           return false;
    }else if ($("select[name=state_id]").val()==""){
           alert("please select state ");
           return false;
    }else if ($("input[name=city_id]").val()==""){
           alert("please select city ");
           return false;
    }else if ($("input[name=pincode]").val()==""){
           alert("please enter pincode ");
           return false;
    }
    else{
       return true
    }

      break;

      case "industrial":
        if($("select[name=property_type3]").val()==""){
     alert("please select property type");
           return false;
   }
   else if ($("input[name=name3]").val()==""){
           alert("please enter company name");
           return false;
    }
    else if ($("input[name=budget3]").val()==""){
           alert("please enter budget amount");
           return false;
    }
    
    else if ($("input[name=builtup_area3]").val()==""){
           alert("please enter built up area");
           return false;
    }
      
    
   

    else if ($("textarea[name=description3]").val()==""){
           alert("please enter property features and details description ");
           return false;
    }

    else if ($("input[name=pancard]").val()==""){
           alert("please upload pancard document ");
           return false;
    }
    else if ($("textarea[name=address1]").val()==""){
           alert("please enter address ");
           return false;
    }
    else if ($("input[name=landmark]").val()==""){
           alert("please enter landmark ");
           return false;
    }
    else if ($("input[name=area]").val()==""){
           alert("please enter area ");
           return false;
    }else if ($("select[name=state_id]").val()==""){
           alert("please select state ");
           return false;
    }else if ($("input[name=city_id]").val()==""){
           alert("please select city ");
           return false;
    }else if ($("input[name=pincode]").val()==""){
           alert("please enter pincode ");
           return false;
    }
    else{
       return true
    }


        break;
        case "institutional":
          if($("select[name=property_type4]").val()==""){
     alert("please select property type");
           return false;
   }
   else if ($("input[name=name4]").val()==""){
           alert("please enter company name");
           return false;
    }
     
    
    else if ($("input[name=budget4]").val()==""){
           alert("please enter budget amount");
           return false;
    }
    
    else if ($("input[name=builtup_area4]").val()==""){
           alert("please enter built up area");
           return false;
    }
      
    else if ($("select[name=type_of_flooring4]").val()==""){
           alert("please select type of flooring");
           return false;
    }
   

    else if ($("textarea[name=description4]").val()==""){
           alert("please enter property features and details description ");
           return false;
    }

    else if ($("input[name=pancard]").val()==""){
           alert("please upload pancard document ");
           return false;
    }
    else if ($("textarea[name=address1]").val()==""){
           alert("please enter address ");
           return false;
    }
    else if ($("input[name=landmark]").val()==""){
           alert("please enter landmark ");
           return false;
    }
    else if ($("input[name=area]").val()==""){
           alert("please enter area ");
           return false;
    }else if ($("select[name=state_id]").val()==""){
           alert("please select state ");
           return false;
    }else if ($("input[name=city_id]").val()==""){
           alert("please select city ");
           return false;
    }else if ($("input[name=pincode]").val()==""){
           alert("please enter pincode ");
           return false;
    }
    else{
       return true
    }


          break;
      
      default :
      return false;
      break;




    }}

     

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




$('#main_type_of_property').on('change', function() {
 if(this.value=="residential"){
      
     
     $("#residential").show();
     $("#commercial").hide();
     $("#industrial").hide();
     $("#institutional").hide();
     $("#video_verification_div").hide();

        $('#sub_categories').on('change', function() { 
           if(this.value=="normal_ready"){
            $("#video_verification_div").show();
            $("#normal_ready").show();
            $("#single_ongoing").hide();
            $("#single_ready").hide();
            $("#commercial").hide();
            $("#industrial").hide();
            $("#institutional").hide();

        }if(this.value=="single_ongoing"){
            $("#video_verification_div").show();
            $("#single_ongoing").show();
            $("#normal_ready").hide();
            $("#single_ready").hide();
            $("#commercial").hide();
            $("#industrial").hide();
            $("#institutional").hide();
        }
          else if(this.value=="single_ready"){
            $("#video_verification_div").show();
            $("#single_ready").show();
            $("#single_ongoing").hide();
            $("#normal_ready").hide();
            $("#commercial").hide();
            $("#industrial").hide();
            $("#institutional").hide();
          }

          });
           
      }
      else if(this.value=="commercial"){
        $("#video_verification_div").show();
        $("#commercial").show();
        $("#industrial").hide();
        $("#residential").hide();
        $("#institutional").hide();
        $("#normal_ready").hide();
            $("#single_ongoing").hide();
            $("#single_ready").hide();
      }
      else if(this.value=="industrial"){
        $("#video_verification_div").show();
        $("#industrial").show();
        $("#residential").hide();
        $("#commercial").hide();
        $("#institutional").hide();
        $("#normal_ready").hide();
            $("#single_ongoing").hide();
            $("#single_ready").hide();
      }
      else if(this.value=="institutional"){
        $("#video_verification_div").show();
        $("#institutional").show();
        $("#industrial").hide();
        $("#residential").hide();
        $("#commercial").hide();
        $("#normal_ready").hide();
            $("#single_ongoing").hide();
            $("#single_ready").hide();
      }
      
      
	  
	  
     else{
     $("#video_verification_div").hide();
     $("#residential").hide();
     $("#commercial").hide();
     $("#industrial").hide();
     $("#institutional").hide();   
     }

});
    //  RERA NUMBER
$(function () {
        $("#chkRera1a").click(function () {
            if ($(this).is(":checked")) {
                $("#dvRera1a").show();
            } else {
                $("#dvRera1a").hide();
            }
        });
    });

    $(function () {
        $("#chkRera1b").click(function () {
            if ($(this).is(":checked")) {
                $("#dvRera1b").show();
            } else {
                $("#dvRera1b").hide();
            }
        });
    });

    $(function () {
        $("#chkRera1c").click(function () {
            if ($(this).is(":checked")) {
                $("#dvRera1c").show();
            } else {
                $("#dvRera1c").hide();
            }
        });
    });

    $(function () {
        $("#chkRera2").click(function () {
            if ($(this).is(":checked")) {
                $("#dvRera2").show();
            } else {
                $("#dvRera2").hide();
            }
        });
    });

    $(function () {
        $("#chkRera3").click(function () {
            if ($(this).is(":checked")) {
                $("#dvRera3").show();
            } else {
                $("#dvRera3").hide();
            }
        });
    });

    $(function () {
        $("#chkRera4").click(function () {
            if ($(this).is(":checked")) {
                $("#dvRera4").show();
            } else {
                $("#dvRera4").hide();
            }
        });
    });

  // TO ADD OPTON MANUALLY3###

//residential---1
   //-----1a
$('.property_type1a').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_property_type1a").css("display","block");
    $(".property_type1a option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_property_type1a").css("display","none");

}

});
function add_property_type1a(){
        var newval=$("#add_property_type1a1").val();
        if(newval==""){
            alert("Please type something in property");
        }else{
        $(".property_type1a").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".property_type1a").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_property_type1a1").val("");
    $(".manual_property_type1a").css("display","none");
    }}

//-----1b
$('.property_type1b').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_property_type1b").css("display","block");
    $(".property_type1b option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_property_type1b").css("display","none");

}

});
function add_property_type1b(){
        var newval=$("#add_property_type1b1").val();
        if(newval==""){
            alert("Please type something in property");
        }else{
        $(".property_type1b").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".property_type1b").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_property_type1b1").val("");
    $(".manual_property_type1b").css("display","none");
    }}

//-----1c
$('.property_type1c').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_property_type1c").css("display","block");
    $(".property_type1c option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_property_type1c").css("display","none");

}

});
function add_property_type1c(){
        var newval=$("#add_property_type1c1").val();
        if(newval==""){
            alert("Please type something in property");
        }else{
        $(".property_type1c").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".property_type1c").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_property_type1c1").val("");
    $(".manual_property_type1c").css("display","none");
    }}


//commercial---2
    $('.property_type2').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_property_type2").css("display","block");
    $(".property_type2 option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_property_type2").css("display","none");

}

});
function add_property_type2(){
        var newval=$("#add_property_type21").val();
        if(newval==""){
            alert("Please type something in field of interests");
        }else{
        $(".property_type2").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".property_type2").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_property_type21").val("");
    $(".manual_property_type2").css("display","none");
    }}

//  industrial---3
$('.property_type3').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_property_type3").css("display","block");
    $(".property_type3 option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_property_type3").css("display","none");

}

});
function add_property_type3(){
        var newval=$("#add_property_type31").val();
        if(newval==""){
            alert("Please type something property");
        }else{
        $(".property_type3").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".property_type3").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_property_type31").val("");
    $(".manual_property_type3").css("display","none");
    }}


//institutional---4
$('.property_type4').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_property_type4").css("display","block");
    $(".property_type4 option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_property_type4").css("display","none");

}

});
function add_property_type4(){
        var newval=$("#add_property_type41").val();
        if(newval==""){
            alert("Please type something in property");
        }else{
        $(".property_type4").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".property_type4").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_property_type41").val("");
    $(".manual_property_type4").css("display","none");
    }}

//    ADD MANUALLY TYPE OF FLOORING
//residential---1
   //-----1a
   $('.type_of_flooring1a').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_type_of_flooring1a").css("display","block");
    $(".type_of_flooring1a option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_type_of_flooring1a").css("display","none");

}

});
function add_type_of_flooring1a(){
        var newval=$("#add_type_of_flooring1a1").val();
        if(newval==""){
            alert("Please add something in type of flooring");
        }else{
        $(".type_of_flooring1a").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".type_of_flooring1a").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_type_of_flooring1a1").val("");
    $(".manual_type_of_flooring1a").css("display","none");
    }}

//-----1b
$('.type_of_flooring1b').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_type_of_flooring1b").css("display","block");
    $(".type_of_flooring1b option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_type_of_flooring1b").css("display","none");

}

});
function add_type_of_flooring1b(){
        var newval=$("#add_type_of_flooring1b1").val();
        if(newval==""){
            alert("Please add something in type of flooring");
        }else{
        $(".type_of_flooring1b").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".type_of_flooring1b").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_type_of_flooring1b1").val("");
    $(".manual_type_of_flooring1b").css("display","none");
    }}

//-----1c
$('.type_of_flooring1c').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_type_of_flooring1c").css("display","block");
    $(".type_of_flooring1c option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_type_of_flooring1c").css("display","none");

}

});
function add_type_of_flooring1c(){
        var newval=$("#add_type_of_flooring1c1").val();
        if(newval==""){
            alert("Please add something in type of flooring");
        }else{
        $(".type_of_flooring1c").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".type_of_flooring1c").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_type_of_flooring1c1").val("");
    $(".manual_type_of_flooring1c").css("display","none");
    }}

// commercial
$('.type_of_flooring2').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_type_of_flooring2").css("display","block");
    $(".type_of_flooring2 option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_type_of_flooring2").css("display","none");

}

});
function add_type_of_flooring2(){
        var newval=$("#add_type_of_flooring21").val();
        if(newval==""){
            alert("Please add something in type of flooring");
        }else{
        $(".type_of_flooring2").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".type_of_flooring2").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_type_of_flooring21").val("");
    $(".manual_type_of_flooring2").css("display","none");
    }}

    // industrial has no type of flooring
    
    //institutional
    $('.type_of_flooring4').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_type_of_flooring4").css("display","block");
    $(".type_of_flooring4 option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_type_of_flooring4").css("display","none");

}

});
function add_type_of_flooring4(){
        var newval=$("#add_type_of_flooring41").val();
        if(newval==""){
            alert("Please add something in type of flooring");
        }else{
        $(".type_of_flooring4").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".type_of_flooring4").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_type_of_flooring41").val("");
    $(".manual_type_of_flooring4").css("display","none");
    }}

    //   #######  LOAD PRE VIEW FOR PANCARD   ######## 
    function PreviewPAN() {
                pdffile=document.getElementById("pancard").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#pancard1').attr('src',pdffile_url);
            }



</script>
