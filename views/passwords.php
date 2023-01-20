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
    <input type="hidden" id="hidden_mobile_number">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="profile-login">
					<div class="login_detail">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home"
								aria-controls="home" role="tab" data-toggle="tab"
								aria-expanded="false">Forgot Password</a></li>
							<li role="presentation"><a href="#profile"
								aria-controls="profile" role="tab" data-toggle="tab"
								aria-expanded="true">Change Password</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content padding_b40 padding_t40">
							<div role="tabpanel" class="tab-pane fade active in" id="home">
								<h3 style="color:white;">Forgot Password?</h3><br>
								<div class="agent-p-form">
									<div class="row" id="username_div">
												<div class="col-md-12">
												<label style="color: white;">Enter Mobile Number</label> <input
													type="text" autocomplete="nope"
													name="mobile_no_otp" id="mobile_no_otp" class="form-control"
													placeholder="Mobile Number"><br>
													</div>
													<label style="color:red;" id="mobile_no_otp_label"></label>
											<div class="col-md-12 col-sm-12 col-xs-12 text-center">
												<div class="query-submit-button">
													<br>
													<button type="button" id="username_button" class="btn_fill">Get OTP</button>
												</div>
											</div>
									
									</div>
									<div class="row" id="otp_div" style="display:none">
											<div class="col-md-12">
												<label style="color: white;">Enter OTP</label> <input
													type="text" autocomplete="nope"
													name="enter_otp_text" id="enter_otp_text" class="form-control"
													placeholder="Enter OTP"><br>
													</div>
																<label style="color:red;" id="enter_otp_text_label"></label>
										

										<br><a>resend OTP</a><br>
											<div class="col-md-12 col-sm-12 col-xs-12 text-center">
												<div class="query-submit-button">
													<br>
													<button type="button" id="otp_button" class="btn_fill">Submit OTP</button>
												</div>
											</div>
									
									
									</div>
									<div class="row" id="passwords_div" style="display:none">
										<div class="col-md-12  padding_b20">
												<label style="color: white;">New Password</label>
												<div class="single-query">
													<input type="password" name="new_password" id="new_password"
														class="keyword-input" placeholder="Enter Password">
												</div>
												<label style="color: red;" class="main-label"
													id="password_label"></label>
											</div>
											<div class="col-md-12  padding_b20">
												<label style="color: white;">Confirm Password</label>
												<div class="single-query">
													<input type="password"  id="confirm_new_password"
														class="keyword-input" placeholder="Enter Password">
												</div>
												<label style="color: red;" class="main-label"
													id="confirm_password_label"></label>
											</div>

										
											<div class="col-md-12 col-sm-12 col-xs-12 text-center">
												<div class="query-submit-button">
													<br>
													<button type="button" id="passwords_button" class="btn_fill">Change Password</button>
												</div>
											</div>
										
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<h3 style="color:white;">Change Password?</h3><br>
								<div class="agent-p-form">
									<div class="row" id="username_div1">
												<div class="col-md-12">
												<label style="color: white;">Enter Mobile Number</label> <input
													type="text" autocomplete="nope"
													name="mobile_no_otp1" id="mobile_no_otp1" class="form-control"
													placeholder="Mobile Number"><br>
													</div>
													<label style="color:red;" id="mobile_no_otp_label1"></label>
											<div class="col-md-12 col-sm-12 col-xs-12 text-center">
												<div class="query-submit-button">
													<br>
													<button type="button" id="username_button1" class="btn_fill">Get OTP</button>
												</div>
											</div>
									
									</div>
									<div class="row" id="otp_div1" style="display:none">
											<div class="col-md-12">
												<label style="color: white;">Enter OTP</label> <input
													type="text" autocomplete="nope"
													name="enter_otp_text1" id="enter_otp_text1" class="form-control"
													placeholder="Enter OTP"><br>
													</div>
																<label style="color:red;" id="enter_otp_text_label1"></label>
										

										<br><a>resend OTP</a><br>
											<div class="col-md-12 col-sm-12 col-xs-12 text-center">
												<div class="query-submit-button">
													<br>
													<button type="button" id="otp_button1" class="btn_fill">Submit OTP</button>
												</div>
											</div>
									
									
									</div>
									<div class="row" id="passwords_div1" style="display:none">
											<div class="col-md-12  padding_b20">
												<label style="color: white;">Old Password</label>
												<div class="single-query">
													<input type="password" name="old_password1" id="old_password1"
														class="keyword-input" placeholder="Enter Password">
												</div>
											
											</div>
										
										<div class="col-md-12  padding_b20">
												<label style="color: white;">New Password</label>
												<div class="single-query">
													<input type="password" name="new_password1" id="new_password1"
														class="keyword-input" placeholder="Enter Password">
												</div>
												<label style="color: red;" class="main-label"
													id="password_label1"></label>
											</div>
											<div class="col-md-12  padding_b20">
												<label style="color: white;">Confirm Password</label>
												<div class="single-query">
													<input type="password"  id="confirm_new_password1"
														class="keyword-input" placeholder="Enter Password">
												</div>
												<label style="color: red;" class="main-label"
													id="confirm_password_label1"></label>
											</div>

										
											<div class="col-md-12 col-sm-12 col-xs-12 text-center">
												<div class="query-submit-button">
													<br>
													<button type="button" id="passwords_button1" class="btn_fill">Change Password</button>
												</div>
											</div>
										
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
<script> var mobile_number="0";
$( "#username_button" ).click(function() {
    $.ajax({
                   url: '<?php echo base_url("index.php/Dashboard/get_otp")?>',
                   data: {"mobile_number":$("#mobile_no_otp").val()},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {
                    var returnarray=JSON.parse(returnHtml);
                   if(returnarray['otp']=="0"){
                   $("#mobile_no_otp_label").html("Please enter valid mobile number.");
                   flag=0;
                   } 
                   else{
                  flag=1;
                  mobile_number=$("#mobile_no_otp").val();
                  $("#hidden_mobile_number").val(mobile_number);
                   }	
              }
              });
                                         if(flag==0){
                                         	return false;
                                         }

$("#username_div").css("display","none");
$("#otp_div").css("display","block");
$("#passwords_div").css("display","none");

});
$( "#otp_button" ).click(function() {
    if($("#enter_otp_text").val()=="123456"){
$("#username_div").css("display","none");
$("#otp_div").css("display","none");
$("#passwords_div").css("display","block");
}else{
        $("#enter_otp_text_label").html("Please enter correct OTP.");
     return false;          
}
});
$( "#passwords_button" ).click(function() {
    if($("#new_password").val()!=$("#confirm_new_password").val()){
$("#confirm_password_label").html("Password and Confirm Password not matching");
return false;
}else{

$.ajax({
                   url: '<?php echo base_url("index.php/Dashboard/change_password")?>',
                   data: {"mobile_number":$("#hidden_mobile_number").val(),"new_password":$("#new_password").val()},
                   type: 'POST',
                   async: false,
                    success: function () {

              }
              });

$("#confirm_password_label").html("Password Changed Successfully");
var delay = 2000; 
setTimeout(function(){ window.location.href = 'https://conbrid.unitglo.com/Dashboard/registration'; }, delay);

    
}
});



</script>
<script> var mobile_number="0";
$( "#username_button1" ).click(function() {
    $.ajax({
                   url: '<?php echo base_url("index.php/Dashboard/get_otp")?>',
                   data: {"mobile_number":$("#mobile_no_otp1").val()},
                   type: 'POST',
                   async: false,
                    success: function (returnHtml) {
                    var returnarray=JSON.parse(returnHtml);
                   if(returnarray['otp']=="0"){
                   $("#mobile_no_otp_label1").html("Please enter valid mobile number.");
                   flag=0;
                   } 
                   else{
                  flag=1;
                  mobile_number=$("#mobile_no_otp1").val();
                  $("#hidden_mobile_number").val(mobile_number);
                   }	
              }
              });
                                         if(flag==0){
                                         	return false;
                                         }

$("#username_div1").css("display","none");
$("#otp_div1").css("display","block");
$("#passwords_div1").css("display","none");

});
$( "#otp_button1" ).click(function() {
    if($("#enter_otp_text1").val()=="123456"){
$("#username_div1").css("display","none");
$("#otp_div1").css("display","none");
$("#passwords_div1").css("display","block");
}else{
        $("#enter_otp_text_label1").html("Please enter correct OTP.");
     return false;          
}
});
$( "#passwords_button1" ).click(function() {
    if($("#new_password1").val()!=$("#confirm_new_password1").val()){
$("#confirm_password_label1").html("Password and Confirm Password not matching");
return false;
}else{

$.ajax({
                   url: '<?php echo base_url("index.php/Dashboard/change_password")?>',
                   data: {"old_password":$("#old_password1").val(),"mobile_number":$("#hidden_mobile_number").val(),"new_password":$("#new_password1").val()},
                   type: 'POST',
                   async: false,
                    success: function (flag) {
if(flag==0){
    $("#confirm_password_label1").html("Old Password is incorrect");

}else{
    $("#confirm_password_label1").html("Password Changed Successfully");
var delay = 2000; 
setTimeout(function(){ window.location.href = 'https://conbrid.unitglo.com/Dashboard/registration'; }, delay);

}
              }
              });


    
}
});



</script>
<?php include 'common/footer.php';?>