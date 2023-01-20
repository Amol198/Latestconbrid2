
    <title><?php echo $page_title; ?></title> 
	
	     
<div class="content-wrapper">

	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
                   
					<h1 class="m-0"><?php if (isset($page_title)) echo $page_title?></h1>
				</div>

			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
		
<form enctype='multipart/form-data'
		method="POST"
		action="<?php echo base_url("index.php/admin/Construction_contract_master/accept_construction_contracts")?><?php if(isset($id)) echo '/'.$id?>">
		
	


			<div class="row">
				<div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Type Of Construction</h3>
						</div>

						<div class="card-body" style="display: block;">
							<label name="conbrid_construction_contracts[type_of_construction]"><b> <?php  if(isset($type_of_construction)) echo $type_of_construction;?></b></label> 
</div>

					</div>

				</div>

	<div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Type Of Property</h3>
						</div>

						<div class="card-body" style="display: block;">
							<label name="conbrid_construction_contracts[type_of_property]"><b><?php  if(isset($type_of_property)) echo $type_of_property;?></b></label>
</div>

					</div>

				</div>
					
					<div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Number Of Floors</h3>
						</div>

						<div class="card-body" style="display: block;">
							<label name="conbrid_construction_contracts[number_of_floors]"> <b><?php  if(isset($number_of_floors)) echo $number_of_floors;?></b></label>
</div>

					</div>

				</div>
                <div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Total Square Foot Area</h3>
						</div>

						<div class="card-body" style="display: block;">
						<label name="conbrid_construction_contracts[total_sq_ft_area]"> <b><?php  if(isset($total_sq_ft_area)) echo $total_sq_ft_area;?></b></label>
</div>

					</div>

				</div>

                <div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Total Builtup Area</h3>
						</div>

						<div class="card-body" style="display: block;">
						<label name="conbrid_construction_contracts[total_builtup_area]"> <b><?php  if(isset($total_builtup_area)) echo $total_builtup_area;?></b></label>
</div>

					</div>

				</div>

					<div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Contract Category</h3>
						</div>

						<div class="card-body" style="display: block;">
						<label name="conbrid_construction_contracts[contract_category]"><b><?php  if(isset($contract_category)) echo $contract_category;?></b></label>
</div>

					</div>

				</div>
                     
                <div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Contract Type</h3>
						</div>

						<div class="card-body" style="display: block;">
						<label name="conbrid_construction_contracts[contract_type]"> <b><?php  if(isset($contract_type)) echo $contract_type;?></b></label>
</div>

					</div>

				</div>
                     
                   

                <div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Contract Rate</h3>
						</div>

						<div class="card-body" style="display: block;">
					    <label name="conbrid_construction_contracts[contract_rate]"> <b><?php  if(isset($contract_rate)) echo $contract_rate;?></b></label>
</div>

					</div>

				</div>

                <div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Project Start Date</h3>
						</div>

						<div class="card-body" style="display: block;">
					    <label name="conbrid_construction_contracts[project_start_date]"> <b><?php  if(isset($project_start_date)) echo $project_start_date;?></b></label>
</div>

					</div>

				</div>

                <div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Project End Date</h3>
						</div>

						<div class="card-body" style="display: block;">
					    <label name="conbrid_construction_contracts[project_end_date]"><b><?php  if(isset($project_end_date)) echo $project_end_date;?></b></label>
</div>

					</div>

				</div>
                     
                
                <div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Address</h3>
						</div>

						<div class="card-body" style="display: block;">
						<label name="conbrid_construction_contracts[address1]"><b><?php  if(isset($address1)) echo $address1;?></b></label>
</div>

					</div>

				</div>

                <div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Landmark</h3>
						</div>

						<div class="card-body" style="display: block;">
						<label name="conbrid_construction_contracts[landmark]"><b> <?php  if(isset($landmark)) echo $landmark;?></b></label>
</div>

					</div>

				</div>

                <div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Area</h3>
						</div>

						<div class="card-body" style="display: block;">
						<label name="conbrid_construction_contracts[area]"><b> <?php  if(isset($area)) echo $area;?></b></label>
</div>

					</div>

				</div>


                <div class="col-md-4">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Pincode</h3>
						</div>

						<div class="card-body" style="display: block;">
						<label name="conbrid_construction_contracts[pincode]"><b><?php  if(isset($pincode)) echo $pincode;?></b></label>
</div>

					</div>

				</div>

                <br>
				<div class="col-12">
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Reason</h3>
						</div>

						<div class="card-body" style="display: block;">
						    <textarea class="form-control" rows="8" name="note" ></textarea>
							<!-- <input type="checkbox" class="checkbox1" value="1" name="note">&nbsp;&nbsp;&nbsp;<input type="text" name="conbrid_construction_contracts[note]" value="<?php  if(isset($note)) echo $note;?>"> -->
</div>

					</div>

				</div>
				
				<br><br>
				

		       <input type="submit" value="approve" name="status" class="btn btn-success">
			   <input type="submit" value="reject" name="status" class="btn btn-danger">
</form>	

			</div>
	</section>
</div>
