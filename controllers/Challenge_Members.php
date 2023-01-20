<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Challenge_Members extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
        if(!isset($_SESSION['userdata'])){
    redirect(base_url("Dashboard/registration")); 
 }
    }

    public function index()
    {
        
        $this->load->view("create_challenge_members2");
    }
  public function noms()
    {
        $this->load->view("challenge_member_noms");
    }
     public function accept_noms()
    {
    if(isset($_POST['checkbox']) && $_POST['checkbox']==1 && isset($_SESSION['userdata']['id'])){
   $this->Base_Models->AddValues("conbrid_challenge_member",array("user_id"=>$_SESSION['userdata']['id'],"default_date"=>date("Y-m-d H:i:s")));
             
    }
        redirect(base_url("Challenge_Members"));
    }
     public function individual_registration()
    {
        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("forms/individual_registration");
        $this->load->view("common/footer");
    }
    public function company_registration()
    {
        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("forms/company_registration");
        $this->load->view("common/footer");
    }
    public function customer_registration()
    {
        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("forms/customer_registration");
        $this->load->view("common/footer");
    }
     public function video_recording()
    {
        $this->load->view("video_recording");
    }
     public function accept_video_recording()
    {
print_r($_FILES);
    }

    
}
?>