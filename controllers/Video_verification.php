<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Video_verification extends Base_Controller
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
           $data['states']=$this->Base_Models->GetAllValues("conbrid_states");
     
        $this->view("forms/video_verification",$data); 
    }
public function accept_video(){
        $id=$_SESSION['userdata']['id'];
        
        if($_SESSION['userdata']['category']=="Companies"){
 $image_folder = APPPATH . "../images/company_verification/video";            
    $tablename="conbrid_companies";    }
                else if($_SESSION['userdata']['category']=="Individuals"){
 $image_folder = APPPATH . "../images/individual_verification/video";            
    $tablename="conbrid_individuals";
        }

 

                if (isset ( $_FILES ['files'] ) && $_FILES ['files'] ['error'] == 0) {
    		$tmp = explode('.', $_FILES ['files'] ['name']);
$file_extension = end($tmp);
				$up = move_uploaded_file ( $_FILES ['files'] ['tmp_name'], $image_folder . "." . $file_extension );
			$_POST['video_file'] = "video".$id. "." . $file_extension;
		        }
      $this->Base_Models->UpadateValue($tablename,$_POST,array("user_id"=>$id));	
		  
    
}
public function get_cities()
    {
        $cities = array();
        if (isset($_POST['state_id']) && $_POST['state_id'] != 0) {
            $cities = $this->Base_Models->CustomeQuary("select * from conbrid_cities where state_id=".$_POST['state_id']." ORDER BY city_name asc");
        }
        echo json_encode($cities);
    }
   
}
?>