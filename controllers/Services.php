<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Services extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
        if (! isset($_SESSION['userdata'])) {
            redirect(base_url("Dashboard/registration"));
        }else{
            if(isset($_SESSION['userdata']['status']) && $_SESSION['userdata']['status']==3){
                
            }else{
                redirect(base_url("Dashboard/inactive"));
            }
        }
    }
        public function notification_responce($id){
           if(isset($id)){
            $data = array();
            $data['notification_details'] = $this->Base_Models->GetAllValues("conbrid_individual_notification left join conbrid_individuals on conbrid_individual_notification.individual_id=conbrid_individuals.id left join conbrid_users on conbrid_users.id =conbrid_individuals.user_id  ", array(
                "conbrid_individual_notification.company_job_post_id" => $id
            ), "conbrid_individuals.*,conbrid_individual_notification.*,conbrid_individual_notification.status as conbrid_individual_notification_status,conbrid_individual_notification.id as conbrid_individual_notification_id,conbrid_users.email,conbrid_users.mobile_no");
            $this->load->view("common/header");
            $this->load->view("common/left");
            $this->load->view("individual/individual_job_post_view", $data);
            $this->load->view("common/footer");
        }else{
            $this->load->view("common/header");
            $this->load->view("common/left");
            echo "<br><br><br><br><br><br><br><br><br><br><br><br><div > Details Not found</div> ";
            $this->load->view("common/footer");
        }
        
    }

public function company_job_post_details(){
    // conbrid_company_job_post
    //SELECT *, ( select concat(`Tota : `, count(*), `Out` of `, sum(if(status=1, `1`, `0))`, ` Read` ) from conbrid_individual_notification where company_job_post_id = conbrid_company_job_post.id) as notication_count FROM (`conbrid_company_job_post`) WHERE `company_id` = '3'


// 


                $data['table_data'] = $this->Base_Models->CustomeQuary(
                    "SELECT *, ( select concat('Tota sent : ', count(*), ' Out of ', sum(if(status=1, 1, 0)), ' Read' ) from conbrid_individual_notification where company_job_post_id = conbrid_company_job_post.id) as notication_count FROM (`conbrid_company_job_post`) WHERE `company_id` = '".$_SESSION['userdata']['company_id']."' order by id desc"
                    );
                $data ['display_contents'] = array (
            				"id" => "id",
            				"individual_type"=>"Type",
            				"notication_count"=>"Sent Count",
            				"job_designation"=>"job_designation"
            				
        				);
        				foreach($data['table_data'] as $key=>$row){
        				    $data['table_data'][$key]['notication_count'] = "<a target='_blank' href='".base_url("Services/notification_responce/".$row['id'])."'>".$data['table_data'][$key]['notication_count']."</a>";
        				}
            $temptable = $this->load->view("common/table-view.php", $data,true);
            
            
            
            $this->load->view("common/header");
            $this->load->view("common/left");
            echo "<div style='margin-top: 182px;'>";
            echo "$temptable";
            echo "</div>";
            $this->load->view("common/footer");
                
}
    public function index()
    { 
       // if (isset($_SESSION['userdata']['company_id'])) {
            $data['states'] = $this->Base_Models->CustomeQuary("select count(conbrid_individuals.id) as total_count,conbrid_states.* from conbrid_states,conbrid_individuals
            where conbrid_individuals.state=conbrid_states.id group by conbrid_states.id order by total_count DESC
            ");
            $data['key_skills'] = $this->Base_Models->GetAllValues("conbrid_key_skills");
            $data['technical_skills'] = $this->Base_Models->GetAllValues("conbrid_technical_skills");

            $this->load->view("common/header");
            $this->load->view("common/left");
            $this->load->view("company/post_job", $data);
            $this->load->view("common/footer");
        //}
    }

    public function construction_contract_post()
    { 
       // if (isset($_SESSION['userdata']['company_id'])) {
            $data['states'] = $this->Base_Models->CustomeQuary("select count(conbrid_construction_contracts.id) as total_count,conbrid_states.* from conbrid_states,conbrid_construction_contracts
            where conbrid_construction_contracts.state_id=conbrid_states.id group by conbrid_states.id order by total_count DESC
            ");
           // $data['key_skills'] = $this->Base_Models->GetAllValues("conbrid_key_skills");
           // $data['technical_skills'] = $this->Base_Models->GetAllValues("conbrid_technical_skills");

            $this->load->view("common/header");
            $this->load->view("common/left");
            $this->load->view("company/post1", $data);
            $this->load->view("common/footer");
        //}
    }

    

    public function get_cities()
    {
        $cities = array();
        if (isset($_POST['state_id']) && $_POST['state_id'] != 0) {
            $cities = $this->Base_Models->CustomeQuary("select conbrid_cities.* from conbrid_cities,conbrid_individuals where conbrid_cities.state_id=".$_POST['state_id']." and conbrid_cities.city_name=conbrid_individuals.city GROUP BY conbrid_cities.city_name ORDER BY city_name asc");
        }
        echo json_encode($cities);
    }
 public function get_cities_count()
    {
        $cities = array();
        if (isset($_POST['state_id']) && $_POST['state_id'] != 0) {
            $cities = $this->Base_Models->CustomeQuary("select 
            count(conbrid_individuals.id) as total_count,conbrid_cities.* from conbrid_cities
            LEFT JOIN conbrid_individuals ON conbrid_cities.city_name=conbrid_individuals.city
            WHERE conbrid_cities.state_id=".$_POST['state_id']." GROUP BY conbrid_cities.city_name order by total_count DESC");
        }
        echo json_encode($cities);
    }
   
public function get_sub_category_count()
    {
        $cities = array();
        if (isset($_POST['city_id']) && $_POST['city_id'] != "0") {
            $cities = $this->Base_Models->CustomeQuary("select count(conbrid_individuals.id) as total_count, conbrid_users.sub_category
            from conbrid_individuals,conbrid_users where conbrid_users.id=conbrid_individuals.user_id and
            conbrid_users.category='Individuals' and conbrid_individuals.city='".$_POST['city_id']."'
            GROUP BY conbrid_users.sub_category order by total_count DESC");
        }
        echo json_encode($cities);
    }

    public function get_individuals()
    {
        $join_table_name = "";
        $key_where_condition = "";
        $technical_where_condition = "";
        if (isset($_POST['key_id']) && is_array($_POST['key_id'])) {
            $join_table_name .= ",conbrid_key_skills";
            $key_where_condition = " and conbrid_individuals.id=conbrid_key_skills.individual_id and ( ";
            for ($i = 0; $i < count($_POST['key_id']); $i ++) {
                if ($i == 0) {
                    $key_where_condition .= " conbrid_key_skills.key_skills='" . $_POST['key_id'][$i] . "'";
                } else {
                    $key_where_condition .= " OR conbrid_key_skills.key_skills='" . $_POST['key_id'][$i] . "'";
                }
            }
            $key_where_condition .= ")";
        }
        if (isset($_POST['technical_id']) && is_array($_POST['technical_id'])) {
            $join_table_name .= ",conbrid_technical_skills";
            $technical_where_condition = " and conbrid_individuals.id=conbrid_technical_skills.individual_id and ( ";
            for ($i = 0; $i < count($_POST['technical_id']); $i ++) {
                if ($i == 0) {
                    $technical_where_condition .= " conbrid_technical_skills.technical_skills='" . $_POST['technical_id'][$i] . "'";
                } else {
                    $technical_where_condition .= " OR conbrid_technical_skills.technical_skills='" . $_POST['technical_id'][$i] . "'";
                }
            }
            $technical_where_condition .= ")";
        }
        $job_designation = "";
        $job_type = "";
        if (isset($_POST['job_designation']) && $_POST['job_designation'] != "") {
            $job_designation = " and conbrid_individuals.preferred_jd='" . $_POST['job_designation'] . "' ";
        }
        if (isset($_POST['job_type']) && $_POST['job_type'] != "") {
            $job_type = " and conbrid_individuals.preferred_job_type='" . $_POST['job_type'] . "' ";
        }

        $data = $this->Base_Models->CustomeQuary("select conbrid_individuals.id as individual_id from conbrid_individuals,conbrid_users " . $join_table_name . " where
       conbrid_individuals.state='" . $_POST['state_id'] . "' and conbrid_individuals.city='" . $_POST['city_id'] . "' and
       conbrid_users.sub_category='" . $_POST['individual_type'] . "' and conbrid_users.id=conbrid_individuals.user_id " . $technical_where_condition . $key_where_condition . $job_designation . $job_type . "
      group by conbrid_individuals.id
       ");

        if (empty($data)) {
            $countdata[0]['total_individuals'] = 0;
        } else {
            $countdata[0]['total_individuals'] = count($data);
        }
        echo json_encode($countdata);
    }

    public function generate_post()
    {
        if (isset($_SESSION['userdata']['company_id'])) {
            $join_table_name = "";
            $key_where_condition = "";
            $technical_where_condition = "";
            if (isset($_POST['key_id']) && is_array($_POST['key_id'])) {
                $data1['key_skills'] = "'test'";
                $join_table_name .= ",conbrid_key_skills";
                $key_where_condition = " and conbrid_individuals.id=conbrid_key_skills.individual_id and ( ";
                for ($i = 0; $i < count($_POST['key_id']); $i ++) {
                    if ($i == 0) {
                        $key_where_condition .= " conbrid_key_skills.key_skills='" . $_POST['key_id'][$i] . "'";
                    } else {
                        $key_where_condition .= " OR conbrid_key_skills.key_skills='" . $_POST['key_id'][$i] . "'";
                    }
                    $data1['key_skills'] .= ",'" . $_POST['key_id'][$i] . "'";
                }
                $key_where_condition .= ")";
            }
            if (isset($_POST['technical_id']) && is_array($_POST['technical_id'])) {
                $data1['technical_skills'] = "'test'";
                $join_table_name .= ",conbrid_technical_skills";
                $technical_where_condition = " and conbrid_individuals.id=conbrid_technical_skills.individual_id and ( ";
                for ($i = 0; $i < count($_POST['technical_id']); $i ++) {
                    if ($i == 0) {
                        $technical_where_condition .= " conbrid_technical_skills.technical_skills='" . $_POST['technical_id'][$i] . "'";
                    } else {
                        $technical_where_condition .= " OR conbrid_technical_skills.technical_skills='" . $_POST['technical_id'][$i] . "'";
                    }
                    $data1['technical_skills'] .= ",'" . $_POST['technical_id'][$i] . "'";
                }
                $technical_where_condition .= ")";
            }
            $job_designation = "";
            $job_type = "";
            if (isset($_POST['job_designation']) && $_POST['job_designation'] != "") {
                $data1['job_designation'] = $_POST['job_designation'];
                $job_designation = " and conbrid_individuals.preferred_jd='" . $_POST['job_designation'] . "' ";
            }
            if (isset($_POST['job_type']) && $_POST['job_type'] != "") {
                $data1['job_type'] = $_POST['job_type'];
                $job_type = " and conbrid_individuals.preferred_job_type='" . $_POST['job_type'] . "' ";
            }
            $data1['city'] = $_POST['city_id'];
            $data1['state'] = $_POST['state_id'];
            $data1['individual_type'] = $_POST['individual_type'];
            $data1['annual_ctc'] = $_POST['annual_ctc'];
            $data1['job_description'] = $_POST['job_description'];
            $data1['company_id'] = $_SESSION['userdata']['company_id'];

            $data = $this->Base_Models->CustomeQuary("select conbrid_individuals.id as individual_id from conbrid_individuals,conbrid_users " . $join_table_name . " where
       conbrid_individuals.state='" . $_POST['state_id'] . "' and conbrid_individuals.city='" . $_POST['city_id'] . "' and
       conbrid_users.sub_category='" . $_POST['individual_type'] . "' and conbrid_users.id=conbrid_individuals.user_id " . $technical_where_condition . $key_where_condition . $job_designation . $job_type . "
      group by conbrid_individuals.id
       ");
           $company_job_post_id = $this->Base_Models->AddValues("conbrid_company_job_post", $data1);
            $company_name= $this->Base_Models->GetAllValues("conbrid_companies", ["id"=>$_SESSION['userdata']['company_id']]);
            if (! empty($company_name)) {
                $notification_title = "New Job Post";
                $notification_text = "There is a new job post by <b>" . $company_name[0]['company_name'] . " Company </b> you might have interest";
                for ($k = 0; $k < count($data); $k ++) {
                    $data2['individual_id'] = $data[$k]['individual_id'];
                    $data2['company_id'] = $data1['company_id'];
                    $data2['title'] = $notification_title;
                    $data2['text'] = $notification_text;
                    $data2['datetime'] = date("Y-m-d h:i:s");
                    $data2['type'] = "Job Post";
                    $data2['company_job_post_id'] = $company_job_post_id;
                    
                    $this->Base_Models->AddValues("conbrid_individual_notification", $data2);
                }
            }

            // print_r($_SESSION);
            if (empty($data)) {

                // $data[0]['total_individuals']=0;
            }
            // echo json_encode($data);
        }
    }

    # =======================================================================================================================================
    # Construction Contracts
    public function construction_contracts_list()
    {
        $data = array();
        if (isset($_SESSION['userdata']['category']) && (($_SESSION['userdata']['category'] == "Companies" && $_SESSION['userdata']['login_type'] == "Builder and developer company") || $_SESSION['userdata']['category'] == "Customers")) {
            $data['contracts'] = $this->Base_Models->GetAllValues("conbrid_construction_contracts", array(
                "user_type" => "Companies",
                "user_id" => $_SESSION['userdata']['company_id']
            ));

            $this->load->view("common/header");
            $this->load->view("common/left");
            $this->load->view("company/construction_contracts_list", $data);
            $this->load->view("common/footer");
        } else if (isset($_SESSION['userdata']['category']) && $_SESSION['userdata']['category'] == "Companies") {
            $data['states'] = $this->Base_Models->GetAllValues("conbrid_states");

            $this->load->view("common/header");
            $this->load->view("common/left");
            $this->load->view("company/show_construction_contracts", $data);
            $this->load->view("common/footer");
        }
    }
public function read_view_job_post($id){
    $notification_data=$this->Base_Models->GetAllValues("conbrid_individual_notification",array("id"=>$id));

if(!empty($notification_data)){

    if($notification_data[0]['status']=="0"){
     $this->Base_Models->UpadateValue("conbrid_individual_notification", ["status"=>"1"],array("id"=>$id));        
    $company_notification_data=$this->Base_Models->GetAllValues("conbrid_company_notification",array("job_post_id"=>$notification_data[0]['company_job_post_id']));
if(!empty($company_notification_data)){
    //company
        $data['datetime']=date("Y-m-d H:i:s");
    $this->Base_Models->UpadateValue("conbrid_company_notification",$data,array("job_post_id"=>$notification_data[0]['company_job_post_id']));
    
}        else{

    $data['title']="Job Post Lead";
    $data['text']="You have new lead for your job post.";
    $data['company_id']=$notification_data[0]['company_id'];
    $data['job_post_id']=$notification_data[0]['company_job_post_id'];
    $data['datetime']=date("Y-m-d H:i:s");
    $data['type']="Job Post";
    $this->Base_Models->AddValues("conbrid_company_notification",$data);
    
}     
        
    }
}

     redirect(base_url("Services/view_job_post/".$id));

}
public function update_job_post($status,$id){
       $notification_data=$this->Base_Models->GetAllValues("conbrid_individual_notification",array("id"=>$id));
     
     if($status=="2" ||$status=="3" ){
      //   if($notification_data[0]['status']=="0" || $notification_data[0]['status']=="1" ){
     $this->Base_Models->UpadateValue("conbrid_individual_notification", ["status"=>$status],array("id"=>$id));
     $company_notification_data=$this->Base_Models->GetAllValues("conbrid_company_notification",array("job_post_id"=>$notification_data[0]['company_job_post_id']));
if(!empty($company_notification_data)){
    //company
        $data['datetime']=date("Y-m-d H:i:s");
    $this->Base_Models->UpadateValue("conbrid_company_notification",$data,array("job_post_id"=>$notification_data[0]['company_job_post_id']));
}        else{
    $data['title']="Job Post Lead";
    $data['text']="You have new lead for your job post.";
    $data['company_id']=$notification_data[0]['company_id'];
    $data['job_post_id']=$notification_data[0]['company_job_post_id'];
    $data['datetime']=date("Y-m-d H:i:s");
    $data['type']="Job Post";
    $this->Base_Models->AddValues("conbrid_company_notification",$data);
    
}
        
  //  }
     }
    
     
     redirect(base_url("Dashboard"));
   
}
public function update_construction_contract_post($status,$id){
    $notification_data=$this->Base_Models->GetAllValues("conbrid_company_notification",array("id"=>$id));
  
  if($status=="2" ||$status=="3" ){
   //   if($notification_data[0]['status']=="0" || $notification_data[0]['status']=="1" ){
 $this->Base_Models->UpadateValue("conbrid_company_notification", ["status"=>$status],array("id"=>$id));
  $company_notification_data=$this->Base_Models->GetAllValues("conbrid_company_notification",array("job_post_id"=>$notification_data[0]['job_post_id']));
if(!empty($company_notification_data)){
 //company
     $data['datetime']=date("Y-m-d H:i:s");
     $this->Base_Models->UpadateValue("conbrid_company_notification",$data,array("job_post_id"=>$notification_data[0]['job_post_id']));
    //$this->Base_Models->UpadateValue("conbrid_company_notification",$data,array("id"=>$id));
}else{
 $data['title']="Construction Contract Post Lead";
 $data['text']="You have new lead for your Construction Contract post.";
 $data['company_id']=$notification_data[0]['post_by_company_id'];
 $data['job_post_id']=$notification_data[0]['job_post_id'];
 $data['datetime']=date("Y-m-d H:i:s");
 $data['type']="Construction Contract Post";
 $this->Base_Models->AddValues("conbrid_company_notification",$data); 
}
     
//  }
  }
 
  
  redirect(base_url("Dashboard"));

}

public function update_company_property_post($status,$id){
    $notification_data=$this->Base_Models->GetAllValues("conbrid_customer_notification",array("id"=>$id));
  
  if($status=="2" ||$status=="3" ){
   //   if($notification_data[0]['status']=="0" || $notification_data[0]['status']=="1" ){
 $this->Base_Models->UpadateValue("conbrid_company_notification", ["status"=>$status],array("id"=>$id));
  $company_notification_data=$this->Base_Models->GetAllValues("conbrid_company_notification",array("job_post_id"=>$notification_data[0]['job_post_id']));
if(!empty($company_notification_data)){
 //company
     $data['datetime']=date("Y-m-d H:i:s");
     $this->Base_Models->UpadateValue("conbrid_company_notification",$data,array("job_post_id"=>$notification_data[0]['job_post_id']));
    //$this->Base_Models->UpadateValue("conbrid_company_notification",$data,array("id"=>$id));
}else{
 $data['title']="Construction Contract Post Lead";
 $data['text']="You have new lead for your Construction Contract post.";
 $data['company_id']=$notification_data[0]['post_by_company_id'];
 $data['job_post_id']=$notification_data[0]['job_post_id'];
 $data['datetime']=date("Y-m-d H:i:s");
 $data['type']="Construction Contract Post";
 $this->Base_Models->AddValues("conbrid_company_notification",$data); 
}
     

  }
 
  
  redirect(base_url("Dashboard"));

}
public function view_job_post($id = null){
        if(isset($id)){
            $data = array();
            $data['notification_details']=$this->Base_Models->CustomeQuary("select 
            conbrid_individual_notification.id as notification_id,conbrid_companies.company_name,conbrid_companies.profile_photo,
            conbrid_individual_notification.*,conbrid_company_job_post.*
            from 
            conbrid_individual_notification,conbrid_company_job_post,conbrid_companies
            where
            conbrid_individual_notification.company_job_post_id=conbrid_company_job_post.id and
            conbrid_individual_notification.company_id=conbrid_companies.id
            and conbrid_individual_notification.id=".$id);
            /*$data['notification_details'] = $this->Base_Models->GetAllValues("conbrid_individual_notification inner join conbrid_companies on conbrid_individual_notification.company_id=conbrid_companies.id inner join conbrid_company_job_post on conbrid_company_job_post.company_id=conbrid_companies.id ", array(
                "conbrid_individual_notification.id" => $id
            ), "conbrid_companies.*,conbrid_individual_notification.*,conbrid_individual_notification.status as conbrid_individual_notification_status,conbrid_individual_notification.id as conbrid_individual_notification_id");
            */
            
              $notification_data=$this->Base_Models->GetAllValues("conbrid_individual_notification",array("id"=>$id));
         if($notification_data[0]['status']=="0"){
     $this->Base_Models->UpadateValue("conbrid_individual_notification", ["status"=>1],array("id"=>$id));
     $this->Base_Models->UpadateValue("conbrid_company_notification", ["status"=>1],array("id"=>$id));
     //    conbrid_company_notification
             
             
         }
          
            $this->load->view("common/header");
            $this->load->view("common/left");
            //$this->load->view("company/glowing_leads_page", $data);
            $this->load->view("company/job_post_view", $data);
            $this->load->view("common/footer");
        }else{
            $this->load->view("common/header");
            $this->load->view("common/left");
            echo "<br><br><br><br><br><br><br><br><br><br><br><br><div > Details Not found</div> ";
            $this->load->view("common/footer");
        }
    }

    public function view_construction_contract($id = null){
        $data = array();
       # if (isset($_SESSION['userdata']['company_id'])) {
    #    $data['contracts'] = $this->Base_Models->GetAllValues("conbrid_construction_contracts", array(
     #           "user_type" => "Companies",
      #          "id" => $id
       #     ));
        #}
        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("company/construction_contracts_view", $data);
        $this->load->view("common/footer");
    }

    public function construction_contracts()
    {
        $data['states'] = $this->Base_Models->GetAllValues("conbrid_states");

        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("company/construction_contracts", $data);
        $this->load->view("common/footer");
    }

    public function get_scope_of_work()
    {
        $data = $this->Base_Models->CustomeQuary("select * from conbrid_scope_of_work where status in (5," . $_POST['construction_type'] . ")");
        echo json_Encode($data);
    }

    public function accept_construction_contracts()
    {
        $data['description'] = $_POST['description'];
        $data['address1'] = $_POST['address1'];
        $data['landmark'] = $_POST['landmark'];
        $data['area'] = $_POST['area'];
        $data['state_id'] = $_POST['state_id'];
        $data['pincode'] = $_POST['pincode'];
        if ($_SESSION['userdata']['category'] == "Companies") {
            $data['user_type'] = $_SESSION['userdata']['category'];
            $data['user_id'] = $_SESSION['userdata']['company_id'];
        }
        $data['type_of_construction'] = $_POST['type_of_construction'];
        if ($data['type_of_construction'] == "new_construction") {
            $data['type_of_property'] = $_POST['type_of_property1'];
            $data['number_of_floors'] = $_POST['number_of_floors1'];
            $data['total_sq_ft_area'] = $_POST['total_sq_ft_area1'];
            $data['total_builtup_area'] = $_POST['total_builtup_area1'];
            $data['contract_category'] = $_POST['contract_category1'];
            $data['project_start_date'] = $_POST['project_start_date1'];
            $data['project_end_date'] = $_POST['project_end_date1'];
            if (isset($_POST['contract_type']))
                $data['contract_type'] = $_POST['contract_type'];
            if (isset($_POST['contract_rate']))
                $data['contract_rate'] = $_POST['contract_rate'];
        } elseif ($data['type_of_construction'] == "demolition_construction") {
            $data['type_of_property'] = $_POST['type_of_property2'];
            $data['number_of_floors'] = $_POST['number_of_floors2'];
            $data['total_sq_ft_area'] = $_POST['total_sq_ft_area2'];
            $data['total_builtup_area'] = $_POST['total_builtup_area2'];
            $data['contract_category'] = $_POST['contract_category2'];
            $data['project_start_date'] = $_POST['project_start_date2'];
            $data['project_end_date'] = $_POST['project_end_date2'];
            $data['contract_type'] = $_POST['contract_type'];
            $data['contract_rate'] = $_POST['contract_rate'];
            $data['demolition_rate_type'] = $_POST['demolition_rate_type2'];
            $data['demolition_rate'] = $_POST['demolition_rate2'];
        } elseif ($data['type_of_construction'] == "renovation") {
            $data['type_of_property'] = $_POST['type_of_property3'];
            $data['number_of_floors'] = $_POST['number_of_floors3'];
            $data['type_of_contract'] = $_POST['type_of_contract'];
            $data['rate_of_contract'] = $_POST['rate_of_contract'];
            $data['project_start_date'] = $_POST['project_start_date3'];
            $data['project_end_date'] = $_POST['project_end_date3'];
        }
        $data['default_date'] = date("Y-m-d h:i:s");
$data1 = $this->Base_Models->CustomeQuary("select conbrid_companies.id as company_id from conbrid_companies where
       state='" . $_POST['state_id'] . "' and city='" . $_POST['city_id'] . "' and
     id!=".$_SESSION['userdata']['company_id']);
  $company_name = $this->Base_Models->GetAllValues("conbrid_companies", array(
                "id" => $_SESSION['userdata']['company_id']
            ));
            $conbrid_construction_contracts = $this->Base_Models->AddValues("conbrid_construction_contracts", $data);

 if (! empty($data1)) {
                $notification_title = "New Construction Contract"; 
                $notification_text = "There is a Construction Contract post by <b>" . $company_name[0]['company_name'] . " Company </b> you might have interest";
                for ($k = 0; $k < count($data1); $k ++) {
                    $data2['post_by_company_id'] = $_SESSION['userdata']['company_id'];
                    $data2['company_id'] = $data1[$k]['company_id'];
                    $data2['title'] = $notification_title;
                    $data2['text'] = $notification_text;
                    $data2['datetime'] = date("Y-m-d h:i:s");
                    $data2['job_post_id'] =$conbrid_construction_contracts;
                    
                    $data2['type'] = "Construction Contract Post";
                    $this->Base_Models->AddValues("conbrid_company_notification", $data2);
                }
            }

        redirect(base_url("Services/construction_contracts_list"));
    }
}
?>