<style>
    sup{
        color:red;
    }
</style><section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">

	<h1 style="text-align: center;">Construction Contract List</h1>
<div class="row"><div class="col-md-11"><div style="text-align:right">
    <a class="btn btn-info" href="<?php echo base_url('Services/construction_contracts') ?>">Add New</a>
    
</div></div></div><br>
<table class="table">
    <tr><th>Type of construction</th>
    <th>Type of property</th>
    <th>Number of floors</th>
    <th>Total area(in Sq. Ft.)</th>
    <th>Total builtup(in Sq. Ft.)</th>
    <th>Contract category</th>
    <th>Contract type</th>
    <th>Contract added Datetime</th>
    <th>Action</th>
    </tr>
   <?php if(isset($contracts)){foreach ($contracts as $row){?> <tr>
        <td><?php echo $row['type_of_construction'];?></td>
        <td><?php echo $row['type_of_property'];?></td>
        <td><?php echo $row['number_of_floors'];?></td>
        <td><?php echo $row['total_sq_ft_area'];?></td>
        <td><?php echo $row['total_builtup_area'];?></td>
        <td><?php echo $row['contract_category'];?></td>
        <td><?php echo $row['contract_type'];?></td>
        <td><?php echo $row['default_date'];?></td>
        <td><?php if($row['status']==2){?>
       <a class="btn btn-success" href="<?php echo base_url('Services/view_construction_contract/'.$row['id']) ?>">Edit</a> <?php }?>
            <a class="btn btn-primary" href="<?php echo base_url('Services/view_construction_contract/'.$row['id']) ?>">View</a></td>
        </tr>
        <?php }}?>
</table>
</section>
<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('.select2').select2();

</script>

