<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Company_images extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
 if(!isset($_SESSION['userdata'])){
    redirect(base_url("Dashboard/registration")); 
 }
    
    }

    public function ongoing_images($project_id="")
    {
        if(isset($project_id)){
$temp=$this->Base_Models->GetAllValues("conbrid_company_projects",array("id"=>$project_id));
if(!empty($temp)){
    $data=$temp[0];
}
            
        }

$data['ongoing_projects']=$this->Base_Models->GetAllValues("conbrid_company_projects",array("project_type"=>1,"company_id"=>$_SESSION['userdata']['id']));


        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("forms/ongoing_projects",$data);
        $this->load->view("common/footer");
    }
    public function accept_ongoing_images($id="")
    {
        
        if(isset($_SESSION['userdata']['category']) && $_SESSION['userdata']['category']=="Companies"){
        if(isset($_POST['project_name']) && isset($_POST['project_description'])){
        $data['project_type']=1;
        $data['project_name']=$_POST['project_name'];
        $data['company_id']=$_SESSION['userdata']['id'];
        $data['project_description']=$_POST['project_description'];
        if(isset($id) && $id!=""){
              $updated_query=$this->Base_Models->UpadateValue("conbrid_company_projects",$data,array("id"=>$id));
        }else{
$id=$this->Base_Models->AddValues("conbrid_company_projects",$data);
}    $data1=array();
            for($i=1;$i<5;$i++){
                $image_folder = APPPATH . "../images/company_images/ongoing_projects/image".$i."_".$id;
                if (isset ( $_FILES ['image'.$i] ) && $_FILES ['image'.$i] ['error'] == 0) {
    		$tmp = explode('.', $_FILES ['image'.$i] ['name']);
$file_extension = end($tmp);
				$up = move_uploaded_file ( $_FILES ['image'.$i] ['tmp_name'], $image_folder . "." . $file_extension );
				$data1['image'.$i] = "image".$i."_".$id. "." . $file_extension;
		    $this->Base_Models->UpadateValue("conbrid_company_projects",$data1,array("id"=>$id));		}
          
    }
		
            
            
        }}
        redirect("Company_images/ongoing_images");
    
}
   public function completed_images($project_id="")
    {
        if(isset($project_id)){
$temp=$this->Base_Models->GetAllValues("conbrid_company_projects",array("id"=>$project_id));
if(!empty($temp)){
    $data=$temp[0];
}
            
        }

$data['completed_projects']=$this->Base_Models->GetAllValues("conbrid_company_projects",array("project_type"=>2,"company_id"=>$_SESSION['userdata']['id']));


        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("forms/completed_projects",$data);
        $this->load->view("common/footer");
    }
    public function accept_completed_images($id="")
    {
        
        if(isset($_SESSION['userdata']['category']) && $_SESSION['userdata']['category']=="Companies"){
            
        if(isset($_POST['project_name']) && isset($_POST['project_description'])){
        $data['project_type']=2;
        $data['project_name']=$_POST['project_name'];
        $data['company_id']=$_SESSION['userdata']['id'];
        $data['project_description']=$_POST['project_description'];
        if(isset($id)&& $id!=""){
              $updated_query=$this->Base_Models->UpadateValue("conbrid_company_projects",$data,array("id"=>$id));
        }else{
$id=$this->Base_Models->AddValues("conbrid_company_projects",$data);
}    $data1=array();
            for($i=1;$i<5;$i++){
                $image_folder = APPPATH . "../images/company_images/completed_projects/image".$i."_".$id;
                if (isset ( $_FILES ['image'.$i] ) && $_FILES ['image'.$i] ['error'] == 0) {
    		$tmp = explode('.', $_FILES ['image'.$i] ['name']);
$file_extension = end($tmp);
				$up = move_uploaded_file ( $_FILES ['image'.$i] ['tmp_name'], $image_folder . "." . $file_extension );
				$data1['image'.$i] = "image".$i."_".$id. "." . $file_extension;
		    $this->Base_Models->UpadateValue("conbrid_company_projects",$data1,array("id"=>$id));		}
          
    }
		
            
            
        }}
        redirect("Company_images/completed_images");
    
}

 public function clients($client_id="")
    {
        if(isset($client_id)){
$temp=$this->Base_Models->GetAllValues("conbrid_clients",array("id"=>$client_id));
if(!empty($temp)){
    $data=$temp[0];
}
            
        }

$data['clients']=$this->Base_Models->GetAllValues("conbrid_clients",array("company_id"=>$_SESSION['userdata']['id']));


        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("forms/clients",$data);
        $this->load->view("common/footer");
    }
    public function accept_clients($id="")
    {
        
        if(isset($_SESSION['userdata']['category']) && $_SESSION['userdata']['category']=="Companies"){
        if(isset($_POST['client_name']) && isset($_POST['client_description'])){
      
        $data['client_name']=$_POST['client_name'];
        $data['company_id']=$_SESSION['userdata']['id'];
        $data['client_description']=$_POST['client_description'];
      
         
        if(isset($id) && $id!=""){
            
              $updated_query=$this->Base_Models->UpadateValue("conbrid_clients",$data,array("id"=>$id));
        }else{
           
$id=$this->Base_Models->AddValues("conbrid_clients",$data);
}    $data1=array();
            for($i=1;$i<5;$i++){
                $image_folder = APPPATH . "../images/company_images/clients/image".$i."_".$id;
                if (isset ( $_FILES ['image'.$i] ) && $_FILES ['image'.$i] ['error'] == 0) {
    		$tmp = explode('.', $_FILES ['image'.$i] ['name']);
$file_extension = end($tmp);
				$up = move_uploaded_file ( $_FILES ['image'.$i] ['tmp_name'], $image_folder . "." . $file_extension );
				$data1['image'.$i] = "image".$i."_".$id. "." . $file_extension;
		    $this->Base_Models->UpadateValue("conbrid_clients",$data1,array("id"=>$id));		}
          
    }
		
            
            
        }}
         
           
        redirect("Company_images/clients");
    
}







}
?>