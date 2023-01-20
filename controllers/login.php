<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        session_destroy();
        $this->load->view("login/login");
    }

    public function check_email()
    {
        print_r($_POST);
        exit();

        $email = $this->input->post('user_mobile_no');
        if ($email = $this->Base_Models->GetAllValues('user_profile_gharbecho', array(
            "user_mobile_no" => $email
        ))) {
            echo "fail";
        } else {
            echo "Done";
        }
    }

    public function accept_user()
    {
        $response['message'] = "fail";
        $response['error_message'] = "Please, Check Username or Password!!!";
        $email = $this->input->post('username');
        $password = $this->input->post('password');
        $temp = $this->Base_Models->GetAllValues("admins", array(
            "email" => $email,
            "password" => $password
        ));
        if (count($temp) == 1) {
            $response['message'] = "done";
            $response['url'] = "./dashboard";

            $res = 1;
            $_SESSION['id'] = $temp[0]['admin_id'];
            $temp = $this->Base_Models->GetAllValues("admins", array(
                "admin_id" => $_SESSION['id']
            ));
            $_SESSION['type'] = $temp[0]['type'];
            $_SESSION['email'] = $temp[0]['email'];
            echo json_encode($response);

            // redirect ( base_url ( 'index.php/dashboard' ) );
        } 
        else {
            redirect(base_url('index.php/login'));
        }
    }

    public function registration_done()
    {
        $fields['user_mobile_no'] = $this->input->post('user_mobile_no');
        $fields['admin_password'] = $this->input->post('password');
        $fields['role'] = 1;
        $this->Base_Models->AddValues('user_profile_gharbecho', $fields);
        redirect(base_url('index.php/login'));
    }

    public function validate()
    {
        $data = null;
        $responce['massage'] = "can't access this file";
        $responce['status'] = "error";
        $_POST = $this->formatFormValues($_POST['data']);
        if (isset($_POST['user_mobile_no']) && isset($_POST['password'])) {
            if ($_POST['user_mobile_no'] == "" && $_POST['password'] == "") {
                $responce['massage'] = "Please Enter Mobile No. and Password";
                $responce['status'] = "error";
            } else {

                $data = $this->Base_Models->GetAllValues('user_profile_gharbecho', array(
                    "user_mobile_no" => $_POST['user_mobile_no'],
                    "admin_password" => $_POST['password']
                ));
                if (! isset($data['error']))
                    if (count($data) > 0) {
                        if ($data[0]['admin_password'] == $_POST['password']) {
                            $responce['massage'] = "Login done.";
                            $responce['status'] = "done";
                            $_SESSION['role'] = $data[0]['role'];
                            $_SESSION['id'] = $data[0]['user_id'];
                            $responce['url'] = base_url("index.php/dashboard");
                        }
                    } 
                    else {
                        $data = $this->Base_Models->GetAllValues('field_staff_gharbecho', array(
                            "staff_mobile_no" => $_POST['user_mobile_no'],
                            "staff_password" => $_POST['password']
                        ));
                        if (! isset($data['error']))
                            if (count($data) > 0) {
                                if ($data[0]['staff_password'] == $_POST['password']) {
                                    $responce['massage'] = "Login done.";
                                    $responce['status'] = "done";
                                    $_SESSION['role'] = "2";
                                    $_SESSION['id'] = $data[0]['staff_id'];
                                    // print_r($_SESSION ['role']);

                                    $responce['url'] = base_url("index.php/dashboard");
                                }
                            }
                    }
            }
        }

        echo json_encode($responce);
    }

    public function sendOtp()
    {
        $data = null;
        $_POST = $this->formatFormValues($_POST['data']);

        $responce['massage'] = "can't access this file";
        $responce['status'] = "error";
        $responce['data'] = "";
        $responce['flag'] = "error";
        if (isset($_POST['email_id'])) {
            // for update new_pwd
            if (isset($_POST['new_pwd']) && $_POST['new_pwd'] != "") {
                if ($_POST['new_pwd'] == $_POST['new_pwd_re']) {
                    $data = $this->Base_Models->UpadateValue('user_profile_gharbecho', array(
                        "admin_password" => $_POST['new_pwd']
                    ), array(
                        "admin_email" => $_POST['email_id']
                    ));
                    if ($data == 1) {
                        $responce['massage'] = "Password Updated Successfully!";
                        $responce['status'] = "Success";
                        $responce['url'] = base_url("index.php/login");
                    } else
                        $responce['massage'] = "Password Update Failed!!!";
                } else
                    $responce['massage'] = "Password Doesn't match!!!";
            } else if (isset($_POST['otp']) && $_POST['otp'] != "") {
                // after otp vie
                $data = $this->Base_Models->GetAllValues('user_profile_gharbecho', array(
                    'admin_email' => $_POST['email_id'],
                    'otp' => $_POST['otp']
                ), 'user_id');
                if (count($data) == 1) {
                    $responce['massage'] = "OTP verified!";
                    $responce['status'] = "done";
                    $responce['data'] = '<div class="content" id="new_pwd_id">
					<h6 class="category text-gray">CRM System</h6>
					<h4 class="card-title"><a href="" class="btn btn-default pull-left"><i class="material-icons">keyboard_backspace</i> back </a>
							 Forget Password</h4>
					<p class="card-content">
						<input class="form-control" placeholder="Enter New Password"
							name="new_pwd" type="password"> <input class="form-control"
							placeholder="Re-Enter New Password" name="new_pwd_re" type="password">
					</p>
					<div class="row">
						<input type="button" onclick="getPass()"
							class="btn btn-primary btn-round" value="Save">
							<div class="loding2">
							<div class="spinner-wrapper">
								<div class="rotator">
									<div class="inner-spin"></div>
									<div class="inner-spin"></div>
								</div>
							</div>
						</div>
					</div>
					<br /> <br />
				</div>';
                    $responce['flag'] = "done";
                } else
                    $responce['massage'] = "You Entered Wrong OTP!!!";
            } else {
                // chk email and otp to db and email
                $data = $this->Base_Models->GetAllValues('user_profile_gharbecho', array(
                    'admin_email' => $_POST['email_id']
                ));
                if (count($data) == 1) {
                    $str = $this->generate_random_string(5);
                    $va = $this->send($_POST['email_id'], 'OTP Confirmation', '<b>Your One Time Password is : </b>' . $str);
                    if ($va == 1) {
                        $tmp = $this->Base_Models->UpadateValue('user_profile_gharbecho', array(
                            'otp' => $str
                        ), array(
                            "admin_email" => $_POST['email_id']
                        ));
                        if ($tmp == 1) {
                            $responce['massage'] = "OTP Send Succesfully";
                            $responce['status'] = "done";
                        }
                    } else
                        $responce['massage'] = "" . $va;
                } else
                    $responce['massage'] = "Check Email ID you Entered!!!";
            }
        }

        echo json_encode($responce);
    }
}
?>