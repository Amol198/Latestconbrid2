<?php if (isset($form_action_top)) echo $form_action_top?>
<style>label{
font-weight:200px!important;}</style>
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

	<div class="row">
		<div class="col-md-12" style="background-color: white;">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"></h3>
				</div>
				<div class="box-body table-responsive">

							<?php
    if (isset($display_contents)) {
        ?>
								<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<?php foreach ($display_contents as $row) {?>
									<th><?php echo $row ?></th>
								<?php } ?>
							</tr>
						</thead>
						<?php foreach ($table_data as $row){ ?>
						<tr
							<?php if (isset($row['tr_class']))echo "class=".$row['tr_class']; ?>>
							<?php foreach ($display_contents as $key=>$drow) {?>
									<td><label style="max-width: 300px; word-wrap: break-word;"> <?php echo $row[$key]; ?></label></td>
							<?php } ?>
						</tr>
						<?php } ?>
						<tbody>
						
						
						<tfoot>
							<tr>
								<?php foreach ($display_contents as $row) {?>
									<th><?php echo $row ?></th>
								<?php } ?>
							</tr>
						</tfoot>
					</table>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div></section>
<?php if (isset($submit_button)) echo $submit_button?>

<?php if (isset($export_to_excel)) echo $export_to_excel?>
<?php if (isset($form_action_bottom)) echo $form_action_bottom?>
<script type="text/javascript">
$('#example2').DataTable({
	"paging" : true,
	"searching" : true,
	"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
	"ordering" : true,
	"info" : true,
	"autoWidth" : false
});
$('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    }
});			
// $(document).ready( function () {
	
//     var table = $('#example2').DataTable();
 
//     table.on( 'draw', function () {
        
//         var body = $( table.table().body() );
 
//         body.unhighlight();
//         body.highlight( table.search() );  
//     } );
//     //table.destroy();
// } );

</script>

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


