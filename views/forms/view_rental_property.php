<style>
    sup{
        color:red;
    }
</style>



<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">

	<h1 style="text-align: center;">Rental Property Form</h1>
       
	<form enctype='multipart/form-data'
			method="POST"  onsubmit="return validateForm()"
		action="<?php echo base_url(index_page()."property/Property/accept_rental_property")?>">
		<div style="margin: 50px;"> <title><?php echo $page_title; ?></title>
			<div class="row">
			 <div class="col-md-3 form-group">
        <label>Type of Rental Property<sup>*</sup></label>
  <select  id="main_type_of_property" name="main_type_of_property" class="form-control">
    <option value="">Please select</option>
    <option value="residential">Residential</option>
    <option value="commercial">Commercial</option>
    <option value="industrial">Industrial</option>
    <option value="institutional">Institutional</option>
    </select>    </div>
    </div>

    <div id="residential" style="display:none;"><hr><h3>Residential Property</h3><hr>
    
	<div class="row">
       <div class="col-md-3 form-group">
        <label>Select Property Type <sup style="color: red;">*</sup></label>
	  <select class="form-control  property_type1"  id="property_type1" name="property_type1"  >
							
	     <option value="">Please select</option> 
            <option value="independent house">Independent House</option>
            <option value="duplex house">Duplex House</option>
            <option value="farm House">Farm House</option>
            <option value="villas">Villas</option>
            <option value="bungalows"> Bungalows</option>
            <option value=" Builder Floor apartment">  Builder Floor Apartment</option>
            <option value="Multistorey apartment">  Multistorey Apartment</option>
	     <option value="Gated Community apartment">  Gated Community Apartment</option>
	     <option value="Studio apartment"> Studio Apartment</option>
	     <option value="Single row house"> Single Row House</option>
            <option value="Single pent house">Single Pent House</option>	 

						
		 <option value="Other">Other</option>

				</select>
	       				
					<div class="col-md-10 manual_property_type1"
						style="display: none;">
						<br> <input placeholder="Type here to add manually" 
							id="add_property_type11" class="form-control">
					</div>
					<div class="col-md-2 manual_property_type1"
						style="display: none;">
						<br>
						<input onclick="add_property_type1()" class="btn btn-default"
							type="button" value="Add">
					</div>
                                   </div>
        <div class="col-md-3 form-group">
        <label>Property Features And Details(Description)<sup>*</sup></label>
        <textarea  class="form-control" name="description1" rows="4"></textarea></div>  
        
        <div class="col-md-2 form-group">
        <label>Entrance Facing<sup>*</sup></label>
        <select  id="entrance_facing1" name="entrance_facing1" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-East</option>
            <option value="north-west">North-West</option>
            <option value="south">South</option>             
            <option value="south-east">South-east</option>             
            <option value="south-west">South-west</option>             
            <option value="east">East</option>
            <option value="west">West</option>                          
        </select>
 
</div>
<div class="col-md-2 form-group">
        <label>Master Bedroom Facing</label>
        <select  id="bedroom_facing1" name="bedroom_facing1" class="form-control">
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
        <select  id="poojaroom_facing1" name="poojaroom_facing1" class="form-control">
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
        <select  id="kitchen_facing1" name="kitchen_facing1" class="form-control">
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
          <label>Monthly Rent Amount(Rs)<sup>*</sup></label>
           <input  class="form-control" name="monthly_rent1" type="number">
             Negotiable
           <input type="checkbox" name="monthly_rent_negotiable1" value="1"  />
           </div>
           <div class="col-md-2 form-group">
           <label>Security Deposit Amount(Rs)</label>
            <input  class="form-control" name="security_deposit1" type="number">
             Negotiable
           <input type="checkbox" name="security_deposit_negotiable1"  value="1"/>
            </div>  
           <div class="col-md-2 form-group">
   <label>Maintenance Charges(Rs)</label>
   <input  class="form-control" name="maintenance1" type="number"></div> 
   <div class="col-md-2 form-group">
        <label>Built-up Area <sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="builtup_area1" type="number">
        <select  id="" name="builtup_area_measure_type1" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   <div class="col-md-2">
		        <label>Rental Agreement Start Date<sup>*</sup></label>
		        <input type="date"  name="rental_aggr_date1" class="form-control">
		    </div>
            

         </div>
      
	  <div class="row">
         <div class="col-md-3 form-group" >
        <label>Rental Period<sup>*</sup></label>
        <select  id="rental_period1" name="rental_period1" class="form-control">
            <option value="">Please Select</option>
            <option value="1">1 month</option>
            <option value="2">2 months</option>
            <option value="3">3 months</option>
            <option value="4">4 months</option>             
	     <option value="5">5 months</option>
            <option value="6">6 months</option>  
            <option value="7">7 months</option>
            <option value="8">8 months</option>
            <option value="9">9 months</option>
            <option value="10">10 months</option>             
	     <option value="11">11 months</option>             
	    
                 
        </select>
      </div>
       
            <div class="col-md-3 form-group">
					<label>Upload E-Stamp Registered Rental Agreement<sup>*</sup></label>
					<input class="form-control" onchange="PreviewEstamp1()"
						accept="application/pdf"  type="file" name="e_stamp1"
						id="e_stamp1"> 
					<div style="clear: both">
						<iframe id="e_stamp11" frameborder="0" scrolling="no" width="100"
							height="150"></iframe>
					</div>
				</div>
                <div class="col-md-3 form-group">
					<label>Upload Electricity Bill As An Owner Proof<sup>*</sup></label>
					<input class="form-control" onchange="PreviewElectricity1()"
						accept="application/pdf"  type="file" name="electricity1"
						id="electricity1"> 
					<div style="clear: both">
						<iframe id="electricity11" frameborder="0" scrolling="no" width="100"
							height="150"></iframe>
					</div>
				</div>
          


		</div>

		  
</div> <!--  div id residential closed-->

<div id="commercial" style="display:none;"><hr><h3>Commercial Property</h3><hr>
    
<div class="row">
		     
<div class="col-md-3 form-group">
        <label>Select Property Type <sup style="color: red;">*</sup></label>
	  <select class="form-control  property_type2"  id="property_type2" name="property_type2"  >
							  
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
        <label>Property Features And Details(Description)<sup>*</sup></label>
        <textarea  class="form-control" name="description2" rows="4"></textarea></div>  
<div class="col-md-2 form-group">
        <label>Entrance Facing<sup>*</sup></label>
        <select  id="entrance_facing2" name="entrance_facing2" class="form-control">
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
        <select  id="bedroom_facing2" name="bedroom_facing2" class="form-control">
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
        <select  id="poojaroom_facing2" name="poojaroom_facing2" class="form-control">
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
        <select  id="kitchen_facing2" name="kitchen_facing2" class="form-control">
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
          <label>Monthly Rent Amount(Rs)<sup>*</sup></label>
           <input  class="form-control" name="monthly_rent2" type="number">
           Negotiable
            <input type="checkbox" name="monthly_rent_negotiable2" value="1"  />
         </div>
           <div class="col-md-2 form-group">
   <label>Security Deposit Amount(Rs)</label>
   <input  class="form-control" name="security_deposit2" type="number">
          Negotiable
            <input type="checkbox" name="security_deposit_negotiable2"  value="1" />
       </div>  
           <div class="col-md-2 form-group">
   <label>Maintenance Charges(Rs)</label>
   <input  class="form-control" name="maintenance2" type="number"></div> 
   <div class="col-md-2 form-group">
        <label>Built-Up Area <sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="builtup_area2" type="number">
        <select  id="" name="builtup_area_measure_type2" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   <div class="col-md-2">
		        <label>Rental Agreement Start Date<sup>*</sup></label>
		        <input type="date"  name="rental_aggr_date2" class="form-control">
		    </div>
            

         </div>
      
	  <div class="row">
         <div class="col-md-3 form-group" >
        <label>Rental Period<sup>*</sup></label>
        <select  id="rental_period2" name="rental_period2" class="form-control">
            <option value="">Please Select</option>
            <option value="1">1 month</option>
            <option value="2">2 months</option>
            <option value="3">3 months</option>
            <option value="4">4 months</option>             
	     <option value="5">5 months</option>
            <option value="6">6 months</option>  
            <option value="7">7 months</option>
            <option value="8">8 months</option>
            <option value="9">9 months</option>
            <option value="10">10 months</option>             
	     <option value="11">11 months</option>     
                 
        </select>
      </div>
         

            <div class="col-md-3 form-group">
					<label>Upload E-Stamp Registered Rental Agreement<sup>*</sup></label>
					<input class="form-control" onchange="PreviewEstamp2()"
						accept="application/pdf"  type="file" name="e_stamp2"
						id="e_stamp2"> 
					<div style="clear: both">
						<iframe id="e_stamp22" frameborder="0" scrolling="no" width="100"
							height="150"></iframe>
					</div>
				</div>
                <div class="col-md-3 form-group">
					<label>Upload Electricity Bill As An Owner Proof<sup>*</sup></label>
					<input class="form-control" onchange="PreviewElectricity2()"
						accept="application/pdf"  type="file" name="electricity2"
						id="electricity2"> 
					<div style="clear: both">
						<iframe id="electricity22" frameborder="0" scrolling="no" width="100"
							height="150"></iframe>
					</div>
				</div>
          


		</div>

		  		  
</div> <!--   div id commercial closed-->


<div id="industrial" style="display:none;"><hr><h3>Industrial Property</h3><hr>
    
<div class="row">
<div class="col-md-3 form-group">
        <label>Select Property Type <sup style="color: red;">*</sup></label>
	  <select class="form-control property_type3"  id="property_type3" name="property_type3"  >
							   
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
        <label>Property Features And Details(Description)<sup>*</sup></label>
        <textarea  class="form-control" name="description3" rows="4"></textarea></div>  
        
        <div class="col-md-2 form-group">
        <label>Entrance Facing<sup>*</sup></label>
        <select  id="entrance_facing3" name="entrance_facing3" class="form-control">
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
        <select  id="bedroom_facing3" name="bedroom_facing3" class="form-control">
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
        <select  id="poojaroom_facing3" name="poojaroom_facing3" class="form-control">
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
        <select  id="kitchen_facing3" name="kitchen_facing3" class="form-control">
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
          <label>Monthly Rent Amount(Rs)<sup>*</sup></label>
           <input  class="form-control" name="monthly_rent3" type="number">
           Negotiable
           <input type="checkbox" name="monthly_rent_negotiable3" value="1"   />
         </div>
           <div class="col-md-2 form-group">
   <label>Security Deposit Amount(Rs)</label>
   <input  class="form-control" name="security_deposit3" type="number">
          Negotiable
           <input type="checkbox" name="security_deposit_negotiable3"  value="1" />
     </div>  
           <div class="col-md-2 form-group">
   <label>Maintenance Charges(Rs)</label>
   <input  class="form-control" name="maintenance3" type="number"></div> 
   <div class="col-md-2 form-group">
        <label>Built-Up Area <sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="builtup_area3" type="number">
        <select  id="" name="builtup_area_measure_type3" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   <div class="col-md-2">
		        <label>Rental Agreement Start Date<sup>*</sup></label>
		        <input type="date"  name="rental_aggr_date3" class="form-control">
		    </div>
            

         </div>
      
	  <div class="row">
         <div class="col-md-3 form-group" >
        <label>Rental Period<sup>*</sup></label>
        <select  id="rental_period3" name="rental_period3" class="form-control">
            <option value="">Please Select</option>
            <option value="1">1 month</option>
            <option value="2">2 months</option>
            <option value="3">3 months</option>
            <option value="4">4 months</option>             
	     <option value="5">5 months</option>
            <option value="6">6 months</option>  
            <option value="7">7 months</option>
            <option value="8">8 months</option>
            <option value="9">9 months</option>
            <option value="10">10 months</option>             
	     <option value="11">11 months</option>                
	    
                 
        </select>
      </div>
         
            <div class="col-md-3 form-group">
					<label>Upload E-Stamp Registered Rental Agreement<sup>*</sup></label>
					<input class="form-control" onchange="PreviewEstamp3()"
						accept="application/pdf"  type="file" name="e_stamp3"
						id="e_stamp3"> 
					<div style="clear: both">
						<iframe id="e_stamp33" frameborder="0" scrolling="no" width="100"
							height="150"></iframe>
					</div>
				</div>
                <div class="col-md-3 form-group">
					<label>Upload Electricity Bill As An Owner Proof<sup>*</sup></label>
					<input class="form-control" onchange="PreviewElectricity3()"
						accept="application/pdf"  type="file" name="electricity3"
						id="electricity3"> 
					<div style="clear: both">
						<iframe id="electricity33" frameborder="0" scrolling="no" width="100"
							height="150"></iframe>
					</div>
				</div>
          


		</div>

		  
		  </div> <!--  div id industrial closed-->



<div id="institutional" style="display:none;"><hr><h3>Institutional Property</h3><hr>
    
<div class="row">
<div class="col-md-3 form-group">
        <label>Select Property Type <sup style="color: red;">*</sup></label>
	  <select class="form-control property_type4"  id="property_type4" name="property_type4"
							  >
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
        <label>Property Features And Details(Description)<sup>*</sup></label>
        <textarea  class="form-control" name="description4" rows="4"></textarea></div>  
        
        <div class="col-md-2 form-group">
        <label>Entrance Facing<sup>*</sup></label>
        <select  id="entrance_facing4" name="entrance_facing4" class="form-control">
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
        <select  id="bedroom_facing4" name="bedroom_facing4" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-East</option>
            <option value="north-west">North-West</option>
            <option value="south">South</option>  
            <option value="south-east">South-East</option>             
            <option value="south-west">South-West</option>
            <option value="east">East</option>             
            <option value="west">West</option>                                     
        </select>
 
</div>
<div class="col-md-2 form-group">
        <label>Pooja Room Facing</label>
        <select  id="poojaroom_facing4" name="poojaroom_facing4" class="form-control">
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
        <select  id="kitchen_facing4" name="kitchen_facing4" class="form-control">
            <option value="">Please Select</option>
            <option value="north">North</option>
            <option value="north-east">North-East</option>
            <option value="north-west">North-West</option>
            <option value="south">South</option>  
            <option value="south-east">South-East</option>             
            <option value="south-west">South-West</option>             
            <option value="east">East</option>             
            <option value="west">West</option>                        
        </select>
 
</div>

        <div class="col-md-2 form-group">
          <label>Monthly Rent Amount(Rs)<sup>*</sup></label>
           <input  class="form-control" name="monthly_rent4" type="number">
           Negotiable
           <input type="checkbox" name="monthly_rent_negotiable4" value="1"   />
           </div>
           <div class="col-md-2 form-group">
   <label>Security Deposit Amount(Rs)</label>
   <input  class="form-control" name="security_deposit4" type="number">
            Negotiable
           <input type="checkbox" name="security_deposit_negotiable4"  value="1"  />

   </div>  
           <div class="col-md-2 form-group">
   <label>Maintenance Charges(Rs)</label>
   <input  class="form-control" name="maintenance4" type="number"></div> 
   <div class="col-md-2 form-group">
        <label>Built-Up Area <sup>*</sup></label>
        <div style="display:inline-flex;">
        <input  class="form-control" name="builtup_area4" type="number">
        <select  id="" name="builtup_area_measure_type4" class="form-control">
            <option value="Square Feet">SQ FT</option>
            <option value="Square Meter">SQ MTR</option>
        </select>
   </div></div>
   <div class="col-md-2">
		        <label>Rental Agreement Start Date<sup>*</sup></label>
		        <input type="date"  name="rental_aggr_date4" class="form-control">
		    </div>
            

         </div>
      
	  <div class="row">
         <div class="col-md-3 form-group" >
        <label>Rental Period<sup>*</sup></label>
        <select  id="rental_period4" name="rental_period4" class="form-control">
            <option value="">Please Select</option>
            <option value="1">1 Month</option>
            <option value="2">2 Months</option>
            <option value="3">3 Months</option>
            <option value="4">4 Months</option>             
	     <option value="5">5 Months</option>
            <option value="6">6 Months</option>  
            <option value="7">7 Months</option>
            <option value="8">8 Months</option>
            <option value="9">9 Months</option>
            <option value="10">10 Months</option>             
	     <option value="11">11 Months</option>                  
	    
                 
        </select>
      </div>
         
            <div class="col-md-3 form-group">
					<label>Upload E-Stamp Registered Rental Agreement<sup>*</sup></label>
					<input class="form-control" onchange="PreviewEstamp4()"
						accept="application/pdf"  type="file" name="e_stamp4"
						id="e_stamp4"> 
					<div style="clear: both">
						<iframe id="e_stamp44" frameborder="0" scrolling="no" width="100"
							height="150"></iframe>
					</div>
				</div>
                <div class="col-md-3 form-group">
					<label>Upload Electricity Bill As An Owner Proof<sup>*</sup></label>
					<input class="form-control" onchange="PreviewElectricity4()"
						accept="application/pdf"  type="file" name="electricity4"
						id="electricity4"> 
					<div style="clear: both">
						<iframe id="electricity44" frameborder="0" scrolling="no" width="100"
							height="150"></iframe>
					</div>
				</div>
          


		</div>

		  		  
</div> <!--   div id institutional closed-->
		  
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
				<a id="download-video" style="display: none;" download="test.webm">Download
					Video</a><br>
				<video style="border: 1px solid;" id="video" width="320"
					height="240" autoplay></video>
				<label style="font-size: 12px; color: red;" id="video_label"></label>

				<div id="countdown"></div>
			</div> 
			<div class="col-md-6 form-group">
                
            <label>Upload Pancard <sup style="color: red;">*</sup></label>
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
function  validateForm(){
       
    switch($("select[name=main_type_of_property]").val()){
      case "residential":
        if($("select[name=property_type1]").val()==""){
			alert("please select property type");
            return false;
		}
      
     else if ($("textarea[name=description1]").val()==""){
            alert("please enter Property Features And Details(Description)");
            return false;
     }
     else if ($("select[name=entrance_facing1]").val()==""){
            alert("please select entrance facing");
            return false;
     }
     else if ($("input[name=monthly_rent1]").val()==""){
            alert("please enter monthly rent amount");
            return false;
     }
     
     else if ($("input[name=builtup_area1]").val()==""){   
            alert("please enter Built-up area ");
            return false;
     }
     else if ($("input[name=rental_aggr_date1]").val()==""){
            alert("please enter rental agreement start date");
            return false;
     }
     else if ($("select[name=rental_period1]").val()==""){
            alert("please select rental period ");
            return false;
     }
       
     else if ($("input[name=e_stamp1]").val()==""){
            alert("please upload E-stamp rental agreement scanned copy ");
            return false;
     }
     else if ($("input[name=electricity1]").val()==""){
            alert("please upload electricity bill document ");
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
       case "commercial":
              if($("select[name=property_type2]").val()==""){
			alert("please select property type");
            return false;
		}
      
     else if ($("textarea[name=description2]").val()==""){
            alert("please enter Property Features And Details(Description)");
            return false;
     }
     else if ($("select[name=entrance_facing2]").val()==""){
            alert("please select entrance facing");
            return false;
     }
     else if ($("input[name=monthly_rent2]").val()==""){
            alert("please enter monthly rent amount");
            return false;
     }
     
     else if ($("input[name=builtup_area2]").val()==""){   
            alert("please enter Built-up area ");
            return false;
     }
     else if ($("input[name=rental_aggr_date2]").val()==""){
            alert("please enter rental agreement start date");
            return false;
     }
     else if ($("select[name=rental_period2]").val()==""){
            alert("please select rental period ");
            return false;
     }
       
     else if ($("input[name=e_stamp2]").val()==""){
            alert("please upload E-stamp rental agreement scanned copy ");
            return false;
     }
     else if ($("input[name=electricity2]").val()==""){
            alert("please upload electricity bill document ");
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
      
     else if ($("textarea[name=description3]").val()==""){
            alert("please enter Property Features And Details(Description)");
            return false;
     }
     else if ($("select[name=entrance_facing3]").val()==""){
            alert("please select entrance facing");
            return false;
     }
     else if ($("input[name=monthly_rent3]").val()==""){
            alert("please enter monthly rent amount");
            return false;
     }
     
     else if ($("input[name=builtup_area3]").val()==""){   
            alert("please enter Built-up area ");
            return false;
     }
     else if ($("input[name=rental_aggr_date3]").val()==""){
            alert("please enter rental agreement start date");
            return false;
     }
     else if ($("select[name=rental_period3]").val()==""){
            alert("please select rental period ");
            return false;
     }
       
     else if ($("input[name=e_stamp3]").val()==""){
            alert("please upload E-stamp rental agreement scanned copy ");
            return false;
     }
     else if ($("input[name=electricity3]").val()==""){
            alert("please upload electricity bill document ");
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
      
     else if ($("textarea[name=description4]").val()==""){
            alert("please enter Property Features And Details(Description)");
            return false;
     }
     else if ($("select[name=entrance_facing4]").val()==""){
            alert("please select entrance facing");
            return false;
     }
     else if ($("input[name=monthly_rent4]").val()==""){
            alert("please enter monthly rent amount");
            return false;
     }
     
     else if ($("input[name=builtup_area4]").val()==""){   
            alert("please enter Built-up area ");
            return false;
     }
     else if ($("input[name=rental_aggr_date4]").val()==""){
            alert("please enter rental agreement start date");
            return false;
     }
     else if ($("select[name=rental_period4]").val()==""){
            alert("please select rental period ");
            return false;
     }
       
     else if ($("input[name=e_stamp4]").val()==""){
            alert("please upload E-stamp rental agreement scanned copy ");
            return false;
     }
     else if ($("input[name=electricity4]").val()==""){
            alert("please upload electricity bill document ");
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

    }

}


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
      
     $("#video_verification_div").show();
     $("#residential").show();
     $("#commercial").hide();
     $("#industrial").hide();
     $("#institutional").hide();
      }
      else if(this.value=="commercial"){
        $("#video_verification_div").show();
        $("#commercial").show();
        $("#residential").hide();
     $("#industrial").hide();
     $("#institutional").hide();
     
       
      }
      else if(this.value=="industrial"){
        $("#video_verification_div").show();
        $("#industrial").show();
        $("#residential").hide();
        $("#commercial").hide();
        $("#institutional").hide();
     
       
      }
      else if(this.value=="institutional"){
        $("#video_verification_div").show();
        $("#institutional").show();
        $("#residential").hide();
        $("#commercial").hide();
        $("#industrial").hide();
        
     
       
      }
	  
	  
     else{
     $("#video_verification_div").hide();
     $("#residential").hide();
     $("#commercial").hide();
     $("#industrial").hide();
     $("#institutional").hide();
     
        
     }

});


//       ##########       LOAD PRE VIEW FOR E-STAMP       #############

            function PreviewEstamp1() {
                pdffile=document.getElementById("e_stamp1").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#e_stamp11').attr('src',pdffile_url);
            }
            function PreviewEstamp2() {
                pdffile=document.getElementById("e_stamp2").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#e_stamp22').attr('src',pdffile_url);
            }
            function PreviewEstamp3() {
                pdffile=document.getElementById("e_stamp3").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#e_stamp33').attr('src',pdffile_url);
            }
            function PreviewEstamp4() {
                pdffile=document.getElementById("e_stamp4").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#e_stamp44').attr('src',pdffile_url);
            }

//       ##########       LOAD PRE VIEW FOR ELECTRICITY       #############

            function PreviewElectricity1() {
                pdffile=document.getElementById("electricity1").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#electricity11').attr('src',pdffile_url);
            }
            function PreviewElectricity2() {
                pdffile=document.getElementById("electricity2").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#electricity22').attr('src',pdffile_url);
            }
            function PreviewElectricity3() {
                pdffile=document.getElementById("electricity3").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#electricity33').attr('src',pdffile_url);
            }
            function PreviewElectricity4() {
                pdffile=document.getElementById("electricity4").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#electricity44').attr('src',pdffile_url);
            }

            
//   #######  LOAD PRE VIEW FOR PANCARD   ######## 
            function PreviewPAN() {
                pdffile=document.getElementById("pancard").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#pancard1').attr('src',pdffile_url);
            }
             // TO ADD OPTON MANUALLY###

//residential---1
             $('.property_type1').change(function()
{
var latest_value = $(this).closest('select').find('option').filter(':selected:last').val();
if(latest_value=="Other"){
    $(".manual_property_type1").css("display","block");
    $(".property_type1 option[value="+latest_value+"]").prop("selected", false);
}else{
        $(".manual_property_type1").css("display","none");

}

});
function add_property_type1(){
        var newval=$("#add_property_type11").val();
        if(newval==""){
            alert("Please type something in property");
        }else{
        $(".property_type1").prepend("<option value='"+newval+"'>"+newval+"</option>");
        $(".property_type1").find("option[value="+newval+"]").prop("selected", "selected");
   $('.select2').select2();
   $("#add_property_type11").val("");
    $(".manual_property_type1").css("display","none");
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



</script>
