<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
        
    }

    public function index()
    {
        
		$data=array();
        if(isset($_SESSION['userdata']['individual_id'])){ 
             $data['notifications']=$this->Base_Models->CustomeQuary("select * from conbrid_individual_notification where individual_id=".$_SESSION['userdata']['individual_id']." and status!=3 ORDER BY id desc");
     $data['url']=base_url("Services/read_view_job_post");
        }
        if(isset($_SESSION['userdata']['company_id'])){ 
            $data['notifications']=$this->Base_Models->CustomeQuary("select * from conbrid_company_notification where company_id=".$_SESSION['userdata']['company_id']." ORDER BY id desc");
            $data['url']=base_url("Dashboard/job_post");
            $data['construction_contract_post_url']=base_url("Dashboard/construction_contract_post_url");
            $data['construction_contract_lead_url']=base_url("Dashboard/construction_contract_lead_url");
    
       }
       if(isset($_SESSION['userdata']['customers_id'])){ 
            $data['notifications']=$this->Base_Models->CustomeQuary("select * from conbrid_customer_notification where customer_id=".$_SESSION['userdata']['customers_id']." ORDER BY id desc");
            $data['url']=base_url("Dashboard/job_post");
            $data['property_post_url']=base_url("Dashboard/compnay_property_post_url");
            $data['customer_post_url']=base_url("Dashboard/customer_property_post_url");
       }
 


       

        $this->view("index",$data);
    }

    
    public function compnay_property_post_url($id)
    {
        $details = null;
        $temp=$this->Base_Models->CustomeQuary("select
         * 
          from conbrid_customer_notification 
          where id=$id
          ");
        if (count($temp) > 0) {

            switch ($temp[0]['type']) {
                case "Sell Property by company":
                    $details=$this->Base_Models->GetAllValues("conbrid_sell_property",["id"=>$temp[0]['post_id']]);
                    break;
                    case "Rental Property by company":
                        $details=$this->Base_Models->GetAllValues("conbrid_rental_property",["id"=>$temp[0]['post_id']]);

                       
                        break;
                        case "Lease Property by company":
                            $details=$this->Base_Models->GetAllValues("conbrid_lease_property",["id"=>$temp[0]['post_id']]);
                            break;
                        }
            $data = $details[0];
            $this->view("company/company_property_post_view",$data);

        } else {
        redirect(base_url("Dashboard/registration"));
        }

    }

    public function customer_property_post_url($id)
    {
        $details = null;
        $temp=$this->Base_Models->CustomeQuary("select
         * 
          from conbrid_customer_notification 
          where id=$id
          ");
        if (count($temp) > 0) {

            switch ($temp[0]['type']) {
                case "Sell Property by customer":
                    $details=$this->Base_Models->GetAllValues("conbrid_customer_sell_property",["id"=>$temp[0]['post_id']]);
                    break;
                    case "Rental Property by customer":
                        $details=$this->Base_Models->GetAllValues("conbrid_customer_rental_property",["id"=>$temp[0]['post_id']]);

                       
                        break;
                        case "Lease Property by customer":
                            $details=$this->Base_Models->GetAllValues("conbrid_customer_lease_property",["id"=>$temp[0]['post_id']]);
                            break;
                        }
            $data = $details[0];
            $this->view("company/customer_property_post_view",$data);

        } else {
        redirect(base_url("Dashboard/registration"));
        }

    }
    public function construction_contract_lead_url($id){
                                             
        
        $data['notification_details']=$this->Base_Models->CustomeQuary("select 
        conbrid_companies.*,conbrid_users.mobile_no as mobile_no,conbrid_company_notification.status as notification_status 
        from conbrid_company_notification
        join conbrid_companies on conbrid_company_notification.company_id=conbrid_companies.id 
        join conbrid_users on conbrid_users.id=conbrid_companies.user_id
         where job_post_id=$id and conbrid_company_notification.status!=3 and post_by_company_id!=0  ORDER BY id desc");
       

         $this->load->view("common/header");
         $this->load->view("common/left");
         $this->load->view("company/glowing_leads_page_construction", $data);
       
       // $this->load->view("common/footer");
    }

    
    public function construction_contract_post_url($id)
    {
        $data['notification_details'] = $this->Base_Models->GetAllValues("conbrid_construction_contracts left join 
        conbrid_company_notification
         on conbrid_construction_contracts.id=job_post_id", ['conbrid_construction_contracts.id' => $id],
         "conbrid_construction_contracts.*,conbrid_company_notification.id as notification_id");
       // print_r($data['details']);
        // $this->view("company/glowing_leads_page",$data);



        $this->load->view("common/header");
        $this->load->view("common/left");
        //$this->load->view("company/glowing_leads_page", $data);
        $this->load->view("company/construction_contract_post_view", $data);
        $this->load->view("common/footer");
    }
    public function construction_contract_post_url1($id)
    {
        $data['notification_details'] = $this->Base_Models->GetAllValues("conbrid_lease_property left join 
        conbrid_customer_notification
         on conbrid_lease_property.id=post_id", ['conbrid_lease_property.id' => $id],
         "conbrid_lease_property.*,conbrid_customer_notification.id as notification_id");
       // print_r($data['details']);
        // $this->view("company/glowing_leads_page",$data);



        $this->load->view("common/header");
        $this->load->view("common/left");
        //$this->load->view("company/glowing_leads_page", $data);
        $this->load->view("company/construction_contract_post_view", $data);
        $this->load->view("common/footer");
    }


    public function job_post($id){
        
        $data['notification_details']=$this->Base_Models->CustomeQuary("select conbrid_individual_notification.*,
        conbrid_individual_notification.status as notification_status,
        conbrid_individuals.individual_name,conbrid_users.mobile_no from
        conbrid_individual_notification,conbrid_individuals,conbrid_users
        where
        conbrid_individual_notification.individual_id=conbrid_individuals.id 
        and conbrid_individuals.user_id=conbrid_users.id
        and conbrid_individual_notification.company_job_post_id=".$id." and conbrid_individual_notification.status in (1,2) order by conbrid_individual_notification.status DESC");
        
        $this->view("company/glowing_leads_page",$data);
        
    }
    public function inactive()
    {
        $this->view("inactive");
    }


    public function index2()
    {
        $this->load->view("index2");
    }

    public function registration($type=null,$promocode=null)
    {$data=array();
        if($type!=null && $promocode!=null){
            $data['type']=$type;
            $data['promocode']=base64_decode($promocode);
        }
        $this->load->view("registration",$data);
    }

    public function check_user()
    {
        $data = $this->Base_Models->CustomeQuary("select * from conbrid_users where mobile_no='" . $_POST['username'] . "'
        OR username='" . $_POST['username'] . "'
        ");
        if (! empty($data)) {
            echo "user_exists";
        } else {
            echo "user_not_exists";
        }
    }

    public function check_company()
    {
        $data = $this->Base_Models->CustomeQuary("select * from conbrid_users where mobile_no='" . $_POST['email'] . "'
        OR username='" . $_POST['email'] . "'
        ");
        $data['sub_category'] = 0;
        $data['type'] = 0;
        if (! empty($data) && isset($data[0]['category']) && $data[0]['category'] == "Companies" && $data[0]['sub_category'] != "") {
            $data['sub_category'] = explode(',', $data[0]['sub_category']);
            $data['type'] = 1;
        }
        echo json_encode($data);
    }

    public function accept_login()
    {
if(isset($_POST['login_type']) && $_POST['login_type']=="Select"){
    $_SESSION['logged_in'] = "<p style='color:red;'>Please select sub category</p>";
            redirect(base_url("Dashboard/registration"));
}
        $data = $this->Base_Models->CustomeQuary("select * from conbrid_users where (mobile_no='" . $_POST['login_email'] . "'
        OR username='" . $_POST['login_email'] . "') and password='" . $_POST['login_password'] . "'
        ");

        if (! empty($data)) {
            $_SESSION['userdata'] = $data[0];
            if(isset($_POST['login_type'])){
                $_SESSION['userdata']['login_type'] = $_POST['login_type'];
            }
else{
           $_SESSION['userdata']['login_type'] = "individual";
         
}
            if($data[0]['category']=="Companies"){
                $company_data = $this->Base_Models->CustomeQuary("select * from conbrid_companies where
                user_id=".$data[0]['id']."
                ");
                if(!empty($company_data)){
                    $_SESSION['userdata']['company_id']=$company_data[0]['id'];
                    $_SESSION['userdata']['status']=$company_data[0]['status'];
                }
   
            }
             else if($data[0]['category']=="Individuals"){
                $individual_data = $this->Base_Models->CustomeQuary("select * from conbrid_individuals where
                user_id=".$data[0]['id']."
                ");
                if(!empty($individual_data)){
                    $_SESSION['userdata']['individual_id']=$individual_data[0]['id'];
                    $_SESSION['userdata']['status']=$individual_data[0]['status'];
                    $_SESSION['userdata']['details']=$individual_data;
                }

            } else {
                $customers = $this->Base_Models->CustomeQuary("select * from conbrid_customers where
                user_id=".$data[0]['id']."
                ");
                if(!empty($customers)){
                    $_SESSION['userdata']['customers_id']=$customers[0]['id'];
                    $_SESSION['userdata']['status']=$customers[0]['status'];
                    $_SESSION['userdata']['details']=$customers;
                }
            }
            
            
            redirect(base_url("Dashboard"));
        } else {
            $_SESSION['logged_in'] = "<p style='color:red;'>Please enter valid username and password</p>";
            redirect(base_url("Dashboard/registration"));
        }
    }

    public function accept_registration()
    {
        if ($_POST['category'] == "Companies") {
            $data['sub_category_'] = "Select";
           
            foreach ($_POST['sub_category'] as $row) {
                $data['sub_category_'] .= "," . $row;
            }
            $_POST['sub_category'] = $data['sub_category_'];
        }

        $id=$this->Base_Models->AddValues("conbrid_users", $_POST);
        $promo_code=$this->generateRandomString();
        $promo_code=$promo_code."-".$id;
 $this->Base_Models->UpadateValue("conbrid_users",array("promo_code"=>$promo_code),array("id"=>$id));    
   
        redirect(base_url("Dashboard/registration"));
    }
    

    /*
     * public function utf8_urldecode($str)
     * {
     * return html_entity_decode(preg_replace("/%u([0-9a-f]{3,4})/i", "&#x\\1;", urldecode($str)), null, 'UTF-8');
     * }
     */

    // Change password and forgot password Starts
    public function passwords()
    {
        $this->load->view("passwords");
    }

    public function get_otp()
    {
        $data = $this->Base_Models->CustomeQuary("select * from 
      conbrid_users where mobile_no='" . $_POST['mobile_number'] . "'");
        if (! empty($data)) {
            $data['otp'] = rand(000000, 999999);
            $this->Base_Models->CustomeUpdateQuary("update 
      conbrid_users SET otp='123456' where id='" . $data[0]['id'] . "'");
        } else {
            $data['otp'] = 0;
        }
        echo json_encode($data);
    }

    public function change_username()
    {
        if (isset($_POST['old_password'])) {
            $data = $this->Base_Models->CustomeQuary("select * from 
      conbrid_users where mobile_no='" . $_POST['mobile_number'] . "' and username='" . $_POST['old_password'] . "'");
            if (! empty($data)) {
                $flag = 1;
                $this->Base_Models->CustomeUpdateQuary("update
      conbrid_users SET username='" . $_POST['new_password'] . "' where mobile_no='" . $_POST['mobile_number'] . "'");
                echo $flag;
            } else {
                $flag = 0;
                echo $flag;
            }
        } else {
            $this->Base_Models->CustomeUpdateQuary("update
      conbrid_users SET username='" . $_POST['new_password'] . "' where mobile_no='" . $_POST['mobile_number'] . "'");
        }
    }

    public function change_password()
    {
        if (isset($_POST['old_password'])) {
            $data = $this->Base_Models->CustomeQuary("select * from 
      conbrid_users where mobile_no='" . $_POST['mobile_number'] . "' and password='" . $_POST['old_password'] . "'");
            if (! empty($data)) {
                $flag = 1;
                $this->Base_Models->CustomeUpdateQuary("update
      conbrid_users SET password='" . $_POST['new_password'] . "' where mobile_no='" . $_POST['mobile_number'] . "'");
                echo $flag;
            } else {
                $flag = 0;
                echo $flag;
            }
        } else {
            $this->Base_Models->CustomeUpdateQuary("update
      conbrid_users SET password='" . $_POST['new_password'] . "' where mobile_no='" . $_POST['mobile_number'] . "'");
        }
    }

    // Change password and forgot password Ends
    public function usernames()
    {
        $this->load->view("usernames");
    }
    public function logout()
    {
session_destroy();
redirect(base_url("Dashboard/registration"));
    }
}
?>