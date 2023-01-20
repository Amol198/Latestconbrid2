<?php include 'common/header2.php';?>
<style>
    a.tooltipA {
    outline:none;
}
a.tooltipA strong {
    line-height:30px;
}
a.tooltipA:hover {
    text-decoration:none;
}
a.tooltipA span { 
    z-index:10;
    display:none;
    padding:14px 20px;
    margin-top:-30px;
    margin-left:28px;
    width:300px;
    line-height:16px;
}
a.tooltipA:hover span {
    display:inline;
    position:absolute;
    color:#111;
    border:1px solid #DCA;
    background:#fffAF0;
}
.callout {
    z-index:20;
    position:absolute;
    top:30px;
    border:0;
    left:-12px;
}
/*CSS3 extras*/
 a.tooltipA span {
    border-radius:4px;

}
    
</style>
<section id="login" class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="profile-login">
					<div class="login_detail">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home"
								aria-controls="home" role="tab" data-toggle="tab"
								aria-expanded="false">Login</a></li>
							<li role="presentation"><a href="#profile"
								aria-controls="profile" role="tab" data-toggle="tab"
								aria-expanded="true">Register</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content padding_b40 padding_t40">
							<div role="tabpanel" class="tab-pane fade active in" id="home">
								<h2>Welcome Back!</h2>
								<div class="agent-p-form">
									<div class="row">
										<form autocomplete="off" class="callus" method="post"
											onsubmit="return login_validation()"
											action="<?php echo base_url("Dashboard/accept_login")?>">
											<div class="col-md-12">
												<label style="color: white;">Username or Mobile Number</label> <input
													type="text" autocomplete="nope" onchange="get_data()"
													name="login_email" id="login_email" class="form-control"
													placeholder="username"><br>
												<div class="" id="company_sub_category"></div>
												<br> <label style="color: white;">Password</label> <input
													type="password" class="form-control" name="login_password"
													id="login_password" class="keyword-input"
													placeholder="Password">
													<?php if(isset($_SESSION['logged_in'])) echo $_SESSION['logged_in']; unset($_SESSION['logged_in']);?>
											</div>

											<!-- 											<div class="col-md-6 text-right"> -->
											<!-- 												<a href="#" class="lost-pass">Lost your password?</a> -->
											<!-- 											</div> -->

											<div class="col-md-12 col-sm-12 col-xs-12 text-center">
												<div class="query-submit-button">
													<br>
													<button type="submit" class="btn_fill">submit now</button>
												</div>
											</div>
										</form>
									
									</div>
								</div>
									<br>
										<label><a style="color:white;" href="<?php echo base_url("Dashboard/passwords")?>">Change or Forgot Password?</a></label>
										<label><a style="color:white;" href="<?php echo base_url("Dashboard/usernames")?>">Change or Forgot Username?</a></label>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<h2>Sign Up</h2>
								<div class="agent-p-form">
									<div class="row">
										<form class="callus" method="post"
											onsubmit="return validation()"
											action="<?php echo base_url("Dashboard/accept_registration")?>">
											<div class="col-md-12  padding_b20">
												<br> <label style="color: white;">Promocode</label>
												<div class="single-query">
													<input type="text" id="refered_by" name="refered_by"
														class="keyword-input" value="<?php if(isset($promocode)) echo $promocode?>" placeholder="Enter Promocode if you have">
												</div>

											</div>
											
											<div class="col-md-12">
												
												<div class="">
													<label style="color: white;">Category</label><select
														onchange="sub2_select()" name="category" id="category"
														class="form-control">
														<option value="0">select</option>
														<option value="Individuals">Individuals</option>
														<option value="Companies">Companies</option>
														<option value="3">Customer</option>
													</select>
												</div>
												<label style="color: red;" class="main-label"
													id="category_label"></label>
												<div id="sub2_select_div"></div>

											</div>

											<div class="col-md-12  padding_b20">
												<br> <label style="color: white;">Email</label>
												<div class="single-query">
													<input type="text" id="email" name="email"
														class="keyword-input" placeholder="Enter Email">
												</div>
												<label id="company_mail_id" style="font-size:12px;"></label>
												<label style="color: red;" class="main-label"
													id="email_label"></label>

											</div>
												<div class="col-md-12  padding_b20">
												<label style="color: white;">Username</label>
												<div class="single-query">
													<input type="text" id="username" name="username"
														class="keyword-input" placeholder="Enter Username">
												</div>
												<label style="color: red;" class="main-label"
													id="username_label"></label>

											</div>
												<div class="col-md-12  padding_b20">
                                                <label style="color: white;">Mobile Number</label>
												<div class="single-query">
													<input type="number" id="mobile_no" name="mobile_no"
														class="keyword-input" placeholder="Please Enter Mobile Number">
												</div>
												<input type="checkbox">&nbsp;&nbsp;Is this your WhatsApp number?
											<label style="font-size:12px;" id="company_no_label"></label>	<label style="color: red;" class="main-label"
													id="mobile_no_label"></label>

											</div>
											<div class="col-md-12  padding_b20">
												<label style="color: white;">Password</label>
												<div class="single-query">
													<input type="password" name="password" id="password"
														class="keyword-input" placeholder="Enter Password">
												</div>
												<label style="color: red;" class="main-label"
													id="password_label"></label>
											</div>
											<div class="col-md-12  padding_b20">
												<label style="color: white;">Confirm Password</label>
												<div class="single-query">
													<input type="password" id="confirm_password"
														class="keyword-input" placeholder="Enter Password">
												</div>
												<label style="color: red;" class="main-label"
													id="confirm_password_label"></label>
											</div>

											<div class="col-md-12 col-sm-12 col-xs-12 text-center">
												<div class="query-submit-button">
													<button type="submit" class="btn_fill">Creat an Account</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--TEAM -->



<div class="row">
	<div class="col-md-12">

		<!-- CONTACT -->
		<section id="contact" class="bg-color-red">
			<div class="container" style="width: 100% !important;">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<div class="get-tuch">
							<i class="icon-telephone114"></i>
							<ul>
								<li>
									<h4>Phone Number</h4>
								</li>
								<li>
									<p>+1 900 234 567 - 68</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<div class="get-tuch">
							<i class="icon-icons74"></i>
							<ul>
								<li><h4>Victoria Hall,</h4></li>
								<li><p>Idea Homes, australia</p></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<div class="get-tuch">
							<i class=" icon-icons142"></i>
							<ul>
								<li><h4>Email Address</h4></li>
								<li><a href="#.">info@ideahomes.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
</div>
<!-- CONTACT -->


<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
function sub2_select(){
var category=$("#category").val();
if(category=='Individuals'){
$("#sub2_select_div").html('<label style="color:white;">Sub Category</label>&nbsp;&nbsp;<a href="#" class="tooltipA"><i style="color:white;" class="fa fa-question-circle"></i><span>You can choose only one category</span></a><select style="width: 100%; height:40px;" id="sub_category" name="sub_category" class="form-control select2">'+
						  '<option>Individual Civil engineer</option>'+
						 '<option>Individual project manager</option>'+
						 '<option>Individual Architect</option>'+
						  '</select>');
						  $('.select2').select2();

$("#company_mail_id").html("");
$("#company_no_label").html('');

}
else if(category=="Companies"){
$("#sub2_select_div").html('<br><label style="color:white;">Sub Category</label>&nbsp;&nbsp;<a href="#" class="tooltipA"><i style="color:white;" class="fa fa-question-circle"></i><span>You can choose multiple options if your company covers those scope of services also</span></a><select style="width: 100%; height:40px;" id="sub_category" name="sub_category[]" multiple class="form-control select2">'+
						  '<option>Builder and developer company</option>'+
						 '<option>Civil contractor company</option>'+
						 '<option>Civil engineering company</option>'+
						 '<option>Construction project management and Consulting company</option>'+
						 '<option>Architectural company</option>'+
						  '</select><label>You can choose multiple options if your company covers those scope of services also</label>'+
						  	'<label style="color: red;" class="main-label" id="sub_category_label"></label>');
						  	$("#sub2_select_div").append('<br><label style="color:white;">Company Type </label>'+
        '<select class="form-control" name="company_type">'+
            '<option>Sole proprietorship</option>'+
            '<option>Partnership</option>'+
            '<option>Private Limited Company</option>'+
            '<option>Limited Liability Partnership</option></select>');
						  $('.select2').select2();
$("#company_mail_id").html('The email ID should be the email ID of either sole proprietor/anyone of the partner/anyone of the directors/promoters/shareholders of the company and not any random person in the company. If CONBRID finds out any fake random person registered through any negative feedbacks, CONBRID will deactivate the account with immediate effect');
$("#company_no_label").html('The mobile number should only be the number of either sole proprietor/anyone of the partner/anyone of the directors/promoters/shareholders of the company. Add your WhatsApp number if possible for your clients to reach u easily. If CONBRID finds out any fake random person registered through any negative feedbacks, CONBRID will deactivate the account with immediate effect');
    
}else{
$("#sub2_select_div").html("");
$("#company_no_label").html('');
}

}
function validation(){

$(".main-label").html("");
if($("#category").val()=="0"){
$("#category_label").html("Please Select Category");
return false;
}
else if($("#username").val()==""){
$("#username_label").html("Please Enter Username");
return false;
}
else if($("#mobile_no").val()==""){
$("#mobile_no_label").html("Please Enter Mobile Number");
return false;
}
else if($("#password").val()==""){
$("#password_label").html("Please Enter Password");
return false;
}
else if($("#confirm_password").val()==""){
$("#confirm_password_label").html("Please Enter Password");
return false;
}
else if($("#password").val()!=$("#confirm_password").val()){
$("#confirm_password_label").html("Password and Confirm Password not matching");
return false;
}
else{
$.ajax({
                   url: '<?php echo base_url("index.php/Dashboard/check_user")?>',
                   data: {"username":$("#username").val()},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {
                   if(returnHtml=="user_not_exists"){
                   $("#username_label").html("Success !");
                   flag=1;
                   } 
                   else{
                   $("#username_label").html("This username is already exists! Please user another Username");
                  flag=0;
                   
                   }	
              }
              });
              	        			   if(flag==1){
                                         	return true;
                                         }
                                         if(flag==0){
                                         	return false;
                                         }
}



}
function login_validation(){

$(".main-label").html("");
if($("#login_email").val()==""){
$("#login_email_lavel").html("Please Enter Mobile Number or Username");
return false;
}

if($("#login_password").val()==""){
$("#login_password_lavel").html("Please Enter Password");
return false;
}
else{
}



}
function get_data(){
$.ajax({
                   url: '<?php echo base_url("index.php/Dashboard/check_company")?>',
                   data: {"email":$("#login_email").val()},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {
                    var returnarray=JSON.parse(returnHtml);
                    var returnarray2=JSON.parse(returnHtml);
$("#company_sub_category").html("");
console.log(returnarray2);
                   if(returnarray2['type']==1){
                   var option_append="";
                   $.each(returnarray['sub_category'], function( index, value ) {
option_append+="<option value='"+value+"'>"+value+"</option>";
});
$("#company_sub_category").html("<label style='color: white;'>Sub Category</label><select name='login_type' class='form-control'>"+option_append+"</select>");
$("#company_mobile_number").html();
                   
                   } else{
                       $("#company_sub_category").html("");
                   }
              }
              });
}

$(document).ready(function() {
get_data();
});
$("#email").keyup(function() {
    $(this).val($(this).val().replace(/\s/g, ""));
});
$("#username").keyup(function() {
    $(this).val($(this).val().replace(/\s/g, ""));
});

</script>
<?php include 'common/footer.php';?>