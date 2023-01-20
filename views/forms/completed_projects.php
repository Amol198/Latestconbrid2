
<style>p{
font-size:20px;}
a.disabled {
  pointer-events: none;
  cursor: default;
}table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}

</style>
<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">
    <h1 style="text-align:center;">Completed Projects</h1>
	<form enctype='multipart/form-data' method="POST"
		action="<?php echo base_url("index.php/Company_images/accept_completed_images")?><?php if(isset($id)) echo "/".$id?>">
	
<div  style="margin:50px;">
    <div class="row">
        <div class="col-md-2"> <label>Project Name <sup style="color:red;">*</sup></label><input value="<?php if(isset($project_name)) echo $project_name;?>" required type="text" name="project_name" class="form-control"></div>
        <div class="col-md-2"> <label>Description<sup style="color:red;">*</sup></label><textarea required rows="7" name="project_description" class="form-control"><?php if(isset($project_description)) echo $project_description;?></textarea>
        
             <?php if(isset($_SESSION['userdata']['login_type']) && $_SESSION['userdata']['login_type']!="Builder and developer company"){?>
    <label style="font-size:12px;">Mention your scope of work completed in this completed project</label>
<?php } else{?>
    <label style="font-size:12px;">Mention the features of this completed project for customers to know</label>
<?php }?>
   
        </div>
        
        <div class="col-md-2"> <label>Image 1</label>
        		<input accept="image/png, image/jpg, image/jpeg"  onchange="loadFile1(event)" type="file" name="image1" id="">
       		<img style="width:150px;" id="image1" src="<?php if(isset($image1)) echo base_url("images/company_images/completed_projects/".$image1)?>"/>
	</div>
	   <div class="col-md-2"> <label>Image 2</label>
        		<input accept="image/png, image/jpg, image/jpeg"  onchange="loadFile2(event)" type="file" name="image2" id="">
       		<img style="width:150px;" id="image2"  src="<?php if(isset($image2)) echo base_url("images/company_images/completed_projects/".$image2)?>"/>
	</div>
	   <div class="col-md-2"> <label>Image 3</label>
        		<input accept="image/png, image/jpg, image/jpeg"  onchange="loadFile3(event)" type="file" name="image3" id="">
       		<img style="width:150px;" id="image3"  src="<?php if(isset($image3)) echo base_url("images/company_images/completed_projects/".$image3)?>"/>
	</div>
	   <div class="col-md-2"> <label>Image 4</label>
        		<input accept="image/png, image/jpg, image/jpeg"  onchange="loadFile4(event)" type="file" name="image4" id="">
       		<img style="width:150px;" id="image4"  src="<?php if(isset($image4)) echo base_url("images/company_images/completed_projects/".$image4)?>"/>
	</div>
	  
	
        
    </div>
   <div class="row">

				<div class="col-md-12 form-group" style="text-align: right;">

					<input type="submit" class="btn btn-info" value="Submit">
				</div>
			</div>

          
    </div>
</form>
  <h1 style="text-align:center;">List of Completed Projects</h1>
  <table class="table" >
      <thead><tr>
          <th>Project Name</th>
          <th>Description</th>
          <th>Image 1</th>
          <th>Image 2</th>
          <th>Image 3</th>
          <th>Image 4</th>
          <th>Action</th>
          
      </tr></thead><tbody>
          <?php foreach($completed_projects as $row){?>
          <tr><td>
              <?php echo $row['project_name'];?>
          </td><td><?php echo $row['project_description'];?></td>
          <td><img style="width:150px;" src="<?php echo base_url("images/company_images/completed_projects/".$row['image1'])?>"/></td>
          <td><img style="width:150px;" src="<?php echo base_url("images/company_images/completed_projects/".$row['image2'])?>"/></td>
          <td><img style="width:150px;" src="<?php echo base_url("images/company_images/completed_projects/".$row['image3'])?>"/></td>
          <td><img style="width:150px;" src="<?php echo base_url("images/company_images/completed_projects/".$row['image4'])?>"/></td>
          <td><a class="btn btn-info" href="<?php echo base_url("index.php/Company_images/completed_images/".$row['id'])?>">Edit</td>
          </tr>
          <?php }?>
          </tbody>
      
  </table>

</div>

</section>
<script type="text/javascript">
    var loadFile1 = function(event) {
	var image = document.getElementById('image1');
	image.src = URL.createObjectURL(event.target.files[0]);
};
  var loadFile2 = function(event) {
	var image = document.getElementById('image2');
	image.src = URL.createObjectURL(event.target.files[0]);
};
  var loadFile3 = function(event) {
	var image = document.getElementById('image3');
	image.src = URL.createObjectURL(event.target.files[0]);
};
  var loadFile4 = function(event) {
	var image = document.getElementById('image4');
	image.src = URL.createObjectURL(event.target.files[0]);
};
  var loadFile5 = function(event) {
	var image = document.getElementById('image5');
	image.src = URL.createObjectURL(event.target.files[0]);
};
        </script>
