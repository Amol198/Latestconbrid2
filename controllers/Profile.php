<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Profile extends Base_Controller {
	public function __construct() {
		parent::__construct ();
	}

  public function individual_profile()
  {
 
   

$data = array();
$data['profile_details'] = $this->Base_Models->GetAllValues("conbrid_individuals 
left join conbrid_users on conbrid_users.id =conbrid_individuals.user_id  ", array(
    "conbrid_individuals.id" => $_SESSION['userdata']['individual_id']
), "conbrid_individuals.*,conbrid_users.email,conbrid_users.mobile_no");
$this->load->view("common/header");
$this->load->view("common/left");
$this->load->view("individuals/individual_profile", $data);
$this->load->view("common/footer");
  
  } 
 
  public function company_profile()
  { 
    $data=array();
    $data['profile_details'] = $this->Base_Models->GetAllValues("conbrid_companies 
    left join conbrid_users on conbrid_users.id =conbrid_companies.user_id  ", array(
    "conbrid_companies.id" => $_SESSION['userdata']['company_id']
), "conbrid_companies.*,conbrid_users.email,conbrid_users.mobile_no");

    $this->load->view("common/header");
    $this->load->view("common/left");
    $this->load->view("company/company_profile", $data);
    $this->load->view("common/footer");
  
  } 
}

