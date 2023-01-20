<html>
	<head>
</head>
<body>
<form enctype='multipart/form-data' method="POST"
		action="<?php echo base_url("index.php/admin/Dashboard/view_projects")?><?php if(isset($id)) echo "/".$id?>">

<div class="col-md-2"> <label>Image 1</label>
        		
       		  <img style="width:150px;" id="image1" src="<?php if(isset($image1)) echo base_url("images/company_images/ongoing_projects/".$image1)?>"/>
	</div>
	   <div class="col-md-2"> <label>Image 2</label>
        		
       		<img style="width:150px;" id="image2"  src="<?php if(isset($image1)) echo base_url("images/company_images/ongoing_projects/".$image2)?>"/>
	</div>
	   <div class="col-md-2"> <label>Image 3</label>
        		
       		<img style="width:150px;" id="image3"  src="<?php if(isset($image1)) echo base_url("images/company_images/ongoing_projects/".$image3)?>"/>
	</div>
	   <div class="col-md-2"> <label>Image 4</label>
        		
       		<img style="width:150px;" id="image4"  src="<?php if(isset($image1)) echo base_url("images/company_images/ongoing_projects/".$image4)?>"/>
	</div>
</body>