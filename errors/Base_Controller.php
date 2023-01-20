// <?php
// if (! defined ( 'BASEPATH' ))
// 	exit ( 'No direct script access allowed' );
// class Base_Controller extends CI_Controller {
// 	public $Base_Models = NULL;
// 	public $session_value = "student_login";
// 	public $user_id = 1;
// 	public $admission_report_form_action = "accept_form";
// 	public function __construct() {
// 		parent::__construct ();
// 		$this->load->model ( "base_models" );
// 		$this->Base_Models = new Base_Models ();
// 		$this->load->helper ( 'url' );
// 		session_start ();
// 	}
// 	public function formatFormValues($dataArray = array()) {
// 		if (! empty ( $dataArray )) {
// 			$len = count ( $dataArray );
// 			$arrResponse = array ();
// 			for($i = 0; $i < $len; $i ++) {
// 				if (! empty ( $dataArray [$i] ['name'] )) {
// 					$arrResponse [$dataArray [$i] ['name']] = $dataArray [$i] ['value'];
// 				}
// 			}
// 			return $arrResponse;
// 		} else {
// 			return false;
// 		}
// 	}
// 	public function getYears() {
// 		return array (
// 				array (
// 						"values" => "2014-2015",
// 						"year" => "2014-2015" 
// 				),
// 				array (
// 						"values" => "2015-2016",
// 						"year" => "2015-2016" 
// 				) 
// 		);
// 	}
// 	public function getStanders($type = null) {
// 		if (isset ( $type )) {
// 			return array (
// 					array (
// 							"values" => "ALL",
// 							"stander" => "ALL" 
// 					),
// 					array (
// 							"values" => "XI",
// 							"stander" => "XI" 
// 					),
// 					array (
// 							"values" => "XII",
// 							"stander" => "XII" 
// 					),
// 					array (
// 							"values" => "F.Y",
// 							"stander" => "F.Y." 
// 					),
// 					array (
// 							"values" => "S.Y",
// 							"stander" => "S.Y." 
// 					),
// 					array (
// 							"values" => "T.Y",
// 							"stander" => "T.Y." 
// 					),
// 					array (
// 							"values" => "M-COM-I",
// 							"stander" => "M-COM-I" 
// 					),
// 					array (
// 							"values" => "M-COM-II",
// 							"stander" => "M-COM-II" 
// 					) 
// 			);
// 		} else {
// 			return array (
// 					array (
// 							"values" => "XI",
// 							"stander" => "XI" 
// 					),
// 					array (
// 							"values" => "XII",
// 							"stander" => "XII" 
// 					),
// 					array (
// 							"values" => "F.Y",
// 							"stander" => "F.Y." 
// 					),
// 					array (
// 							"values" => "S.Y",
// 							"stander" => "S.Y." 
// 					),
// 					array (
// 							"values" => "T.Y",
// 							"stander" => "T.Y." 
// 					),
// 					array (
// 							"values" => "M-COM-I",
// 							"stander" => "M-COM-I" 
// 					),
// 					array (
// 							"values" => "M-COM-II",
// 							"stander" => "M-COM-II" 
// 					) 
// 			);
// 		}
// 	}
// 	public function getReciptTableBYStanders($stander) {
// 		if ($stander == "ALL") {
// 			return "junior";
// 		}
// 		if ($stander == "XI" || $stander == "XII") {
// 			return "junior";
// 		} else if ($stander == "F.Y" || $stander == "S.Y" || $stander == "T.Y") {
// 			return "senior";
// 		} else if ($stander == "M-COM-I" || $stander == "M-COM-II") {
// 			return "graduation";
// 		}
// 	}
// 	public function getReciptAccountNumber($stander) {
// 		if ($stander == "XI" || $stander == "XII") {
// 			return "A/C 9613";
// 		} else if ($stander == "F.Y" || $stander == "S.Y" || $stander == "T.Y") {
// 			return "A/C 9614";
// 		} else if ($stander == "M-COM-I" || $stander == "M-COM-II") {
// 			return "A/C 9615";
// 		} else if ($stander == "Other") {
// 			return "A/C 9616";
// 		}
// 	}
// 	public function load_header() {
// 		$this->load->view ( 'common/header' );
// 	}
// 	public function load_footer() {
// 		$this->load->view ( 'common/footer' );
// 	}
// 	public function load_base_header() {
// 		$this->load->view ( 'common/base_header' );
// 	}
// 	public function load_base_footer() {
// 		$this->load->view ( 'common/base_footer' );
// 	}
// 	public function logoutUser() {
// 		$_SESSION ['role'] = 0;
// 		session_destroy ();
// 		redirect ( base_url ( "home" ) );
// 	}
	
// 	// calibri (body)
// 	public function load_nav($banner = false) {
// 		if (isset ( $_SESSION [$this->session_value] ) && $_SESSION [$this->session_value] != "") {
// 			$data ['nav'] = array (
// 					'<li><a href="' . base_url ( "index.php/admissionForm/LoadForm/" . $_SESSION [$this->session_value] ) . '">New Admission</a></li>',
// 					'<li><a href="' . base_url ( "index.php/student/logoutuser" ) . '">Logout</a></li>' 
// 			);
// 		} else if (true || isset ( $_SESSION ["role"] ) && $_SESSION ["role"] != "") {
// 			$data ['nav'] = array (
// 					'<li><a href="' . base_url ( "" ) . '"></a></li>',
// 					'<li>
// 						<a href="">Home</a>
						
// 				</li>',
// 					'<li class="drpodown">
// 						<a href="" class="dropdown-toggle" data-toggle="dropdown">Admission<b class="caret"></b></a>
// 						<ul class="dropdown-menu">
// 							<li><a href="' . base_url ( "index.php/admin/admissionstatus/get_status" ) . '">Admission Process</a></li>
// 							<li><a href="' . base_url ( "index.php/login" ) . '">New Admission</a></li>
// 							<li><a href="' . base_url ( "index.php/admissions/admission_report_form" ) . '">Admissions</a></li>
// 					<li><a href="' . base_url ( "index.php/students_reports/student_details" ) . '">Admission Details</a></li>
// 						</ul>
// 				</li>',
// 					'<li class="dropdown">
// 						<a href="" class="dropdown-toggle" data-toggle="dropdown">Receipt<b class="caret"></b></a>
// 						<ul class="dropdown-menu">
// 							<li><a href="' . base_url ( "index.php/receipts/receipts_overview_form" ) . '">New Receipts</a></li>
// 							<li><a href="' . base_url ( "index.php/receipts/receipts_details_overview_form" ) . '">Receipts Details</a></li>
// 							<li><a href="' . base_url ( "index.php/rpRecipts" ) . '">RP Details</a></li>
// 					</ul>
// 				</li>',
// 					'<li class="dropdown">
// 						<a href="" class="dropdown-toggle" data-toggle="dropdown">Fee Structure<b class="caret"></b></a>
// 							<ul class="dropdown-menu">
// 							<li><a href="' . base_url ( "index.php/fee_structure/fee_structure_form" ) . '">New Fee Structure</a></li>
// 					<li><a href="' . base_url ( "index.php/fee_structure/other_fee_structure_form" ) . '">Other Fee Structure</a></li>
// 							<li><a href="' . base_url ( "index.php/fee_structure/fee_structure_overview_form" ) . '">List</a></li>
// 						</ul>
// 				</li>',
// 					'<li class="dropdown">
// 						<a href="" class="dropdown-toggle" data-toggle="dropdown">Cash Reports<b class="caret"></b></a>
// 							<ul class="dropdown-menu">
// 							<li><a href="' . base_url ( "index.php/cash_reports/recipt_report_form" ) . '">Bank Report</a></li>
// 							<li><a href="' . base_url ( "index.php/cash_reports/recipt_cash_report_form" ) . '">Outstanding</a></li>
// 						</ul>
// 				</li>',
// 					'<li class="dropdown">
// 						<a href="" class="dropdown-toggle" data-toggle="dropdown">Student Reports<b class="caret"></b></a>
// 							<ul class="dropdown-menu">
// 							<li><a href="' . base_url ( "index.php/cash_reports/recipt_report_form" ) . '">Bank Report</a></li>
// 							<li><a href="' . base_url ( "index.php/cash_reports/recipt_cash_report_form" ) . '">Outstanding</a></li>
// 						</ul>
// 				</li>',
// 					'<li><a href="' . base_url ( "index.php/cash_reports/logout_admin" ) . '">Logout</a></li>' 
// 			);
// 		}
		
// 		$this->load->view ( 'common/top', $data );
// 	}
// 	public function logout_admin() {
// 		// $_SESSION ['login_state'] == "1";
// 		session_destroy ();
// 		redirect ( base_url ( "index.php/admin/login_auth/login" ) );
// 	}
// 	public function view($url, $data = null) {
// 		if (isset ( $url )) {
// 			$this->load_header ();
// 			$this->load_nav ();
// 			if (isset ( $data ))
// 				$this->load->view ( $url, $data );
// 			else
// 				$this->load->view ( $url );
// 			$this->load_footer ();
// 		}
// 	}
// 	public function export_script() {
// 		$this->load->view ( 'common/export_script' );
// 	}
// 	public function base_view($url, $data = null) {
// 		if (isset ( $url )) {
// 			$this->load_base_header ();
// 			if (isset ( $data ))
// 				$this->load->view ( $url, $data );
// 			else
// 				$this->load->view ( $url );
// 			$this->load_base_footer ();
// 		}
// 	}
// 	public function checkLogin() {
// 		// print_r($_SESSION);
// 		if (isset ( $_SESSION ['login_state'] ) && $_SESSION ['login_state'] == "user") {
// 			redirect ( base_url ( "index.php/login" ) );
// 		} else if (isset ( $_SESSION ['login_state'] ) && $_SESSION ['login_state'] == "Admin") {
// 			redirect ( base_url ( "index.php/admin/login_auth/login" ) );
// 		} else if (! isset ( $_SESSION ['login_state'] )) {
// 			redirect ( "http://www.svcpune.com/" );
// 		}
// 		// if (! isset ( $_SESSION ['user_id'] ) || $_SESSION ['user_id'] == 0) {
// 		// // redirect ( base_url () );
// 		// }
// 	}
// 	function generate_random_string($length = 10) {
// 		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// 		$charactersLength = strlen ( $characters );
// 		$randomString = '';
// 		for($i = 0; $i < $length; $i ++) {
// 			$randomString .= $characters [rand ( 0, $charactersLength - 1 )];
// 		}
// 		return $randomString;
// 	}
// 	public function college_header() {
// 		return "<font size=6>Poona Jesuit Schools' Society's  <br> ST.VINCENT  COLLEGE OF  COMMERCE,  CAMP, PUNE-411001 </font><br>";
// 	}
// 	public function validat() {
// 		$email = $this->input->post ( 'email' );
// 		$pass = $this->input->post ( 'password' );
// 		if ($email == "suraj@gmail.com" && $pass == "suraj1234") {
// 			$_SESSION ['login_state'] = "1";
// 			$_SESSION ['role'] = "1";
// 			redirect ( base_url ( "/index.php/admin/run/go" ) );
// 		} else if ($email == "junior@gmail.com" && $pass == "junior") {
// 			$_SESSION ['login_state'] = "1";
// 			$_SESSION ['role'] = "junior";
// 			redirect ( base_url ( "/index.php/admin/run/go" ) );
// 		} else if ($email == "senior@gmail.com" && $pass == "senior") {
// 			$_SESSION ['login_state'] = "1";
// 			$_SESSION ['role'] = "senior";
// 			redirect ( base_url ( "/index.php/admin/run/go" ) );
// 		} else if ($email == "pg@gmail.com" && $pass == "pg") {
// 			$_SESSION ['login_state'] = "1";
// 			$_SESSION ['role'] = "pg";
// 			redirect ( base_url ( "/index.php/admin/run/go" ) );
// 		} else if ($email == "library@gmail.com" && $pass == "library") {
// 			$_SESSION ['login_state'] = "1";
// 			$_SESSION ['role'] = "library";
// 			redirect ( base_url ( "/index.php/admin/run/go" ) );
// 		} else if ($email == "result@gmail.com" && $pass == "result") {
// 			$_SESSION ['login_state'] = "1";
// 			$_SESSION ['role'] = "result";
// 			redirect ( base_url ( "/index.php/admin/run/go" ) );
// 		} else
// 			echo "";
// 		// redirect ( base_url ( "index.php/admin/login_auth/login" ) );
// 	}
// }
