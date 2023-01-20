<?php include 'common/header.php';?>
<?php include 'common/left.php';?>
<style>p{
font-size:20px;}
a.disabled {
  pointer-events: none;
  cursor: default;
}

</style>
<section id="team-sev" class="padding bg_light"
	style="margin-top: 157px;">
   <div style="text-align:center;"> <h1>How Conbrid challenge membership works</h1>
	</div>
<div style="margin:20px;"><p>1.	First the user needs to read this description without fail and accept the CONBRID CHALLENGE membership task.
</p><br><p>2.	From the moment the user accepts the CONBRID CHALLENGE membership task, timer will start running for 48 hours.i.e 2 days.
</p><br><p>
3.	After that the user will get a page with all the 9 Construction Professionals displayed with REFER option and timer running.
</p><br><p>4.	Here the user will have to refer 1 from each of the 9 Construction Professionals within those 48 hours or 2 days span of time to gain the CONBRID CHALLENGE points i.e.1 Customer,1 Builder and developer company, 1 Civil Contractor Company,1 Civil Engineering Company, 1 Project Management Company, 1 Architectural Company, 1 Individual Civil Engineer, 1 Individual Project Manager and 1 Individual Architect.
</p><br><p>5.	After each referral, that particular construction professional will be marked as tick. Then the user can start referring the next construction professional.
</p><br><p>6.	After all the 9 referrals, the user will get 2 CONBRID CHALLENGE challenge Points= 100 days Free CONBRID CHALLENGE Membership which means for 100 days span of time, the user will get an option to create an AD Template of his company/individuals/customers that will be displayed to promote it on the homepage of their clients and his notifications will go to 100% of the leads available in the database. Note: The user will get CONBRID CHALLENGE points only after the person who comes in through him has got his registration approved from CONBRID and applied promocode of the user. After 48 hours, the user will get CONBRID CHALLENGE points even if the the person coming in through him has registered and applied the promocode but not yet got approval from CONBRID i.e. If CONBRID approves the registration of the person coming in after 48 hours but the person who has come in has applied the promocode before 48 hours, then the user will still get his CONBRID CHALLENGE points after that person’s CONBRID approval. 
</p><br><p>7.	Incase if user fails the CONBRID CHALLENGE task, the user will still get CONBRID points instead of CONBRID CHALLENGE points for each referral he has made. For example, if the user has referred 5 Construction professsionals instead of 9 and failed the task, then the user will get 10 CONBRID POINTS for those 5 referrals.
</p><br><p>8.	The person coming in through the user will get 2 CONBRID Points =10 Days free CONBRID Membership which means for 10 days span of time, the person who has come in will get an option to create an AD Template of his company/individuals/customers that will be displayed to promote it on the homepage of their clients and his notifications will only go to 100% of the leads available in the database
<br><br><br>
<form method="POST" action="<?php echo base_url('Challenge_Members/accept_noms')?>"><div style="text-align:center;">
<h3><input type="checkbox" name="checkbox" class="checkbox1" value="1">&nbsp;&nbsp; I  ACCEPT  THE CONBRID MEMBERSHIP TASK. </h3>
<input type="submit" class="btn btn-success submit_btn" disabled  value="Submit">

</div>
</form></div>


</section>

<script>
   var url='<?php echo base_url('Challenge_Members');?>';
    $(".checkbox1").change(function() {
    if(this.checked) {
        $(".submit_btn").removeAttr("disabled");
        
    }else{
        $(".submit_btn").attr("disabled",true);
    }
});
$( document ).ready(function() {
    if ($('.checkbox1').is(':checked')) {
       $(".submit_btn").removeAttr("disabled");
        
    } else {
       $(".submit_btn").attr("disabled",true);}
});
</script>
										<?php include 'common/footer.php';?>