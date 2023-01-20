<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class JobAsk extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
        if (! isset($_SESSION['userdata'])) {
            redirect(base_url("Dashboard/registration"));
        }
    }

    public function index()
    {
        //echo $_SESSION['userdata']['company_id'];
        
          $data['states'] = $this->Base_Models->CustomeQuary("select 
            count(conbrid_company_job_post.id) as total_count,conbrid_states.* from conbrid_states
            LEFT JOIN conbrid_company_job_post ON conbrid_states.id=conbrid_company_job_post.state
             GROUP BY conbrid_states.name order by total_count DESC");
    
           
        if (isset($_SESSION['userdata']['individual_id'])) {
            $this->load->view("common/header");
            $this->load->view("common/left");
            $this->load->view("individual/job_ask",$data); 
            $this->load->view("common/footer");
        }
    }
public function show_job_posts()
    {
        $data=array();
          if(isset($_POST['annual_ctc']) && $_POST['annual_ctc']!="")   $data = $this->Base_Models->CustomeQuary("select * from conbrid_company_job_post where annual_ctc BETWEEN ".$_POST['annual_ctc']."");
        echo json_encode(count($data));
   
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

public function view_job_post($id = null)
    {
        $data = array();
       # if (isset($_SESSION['userdata']['company_id'])) {
    #    $data['contracts'] = $this->Base_Models->GetAllValues("conbrid_construction_contracts", array(
     #           "user_type" => "Companies",
      #          "id" => $id
       #     ));
        #}
        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("company/job_post_view", $data);
        $this->load->view("common/footer");
    }

    public function view_construction_contract($id = null)
    {
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
 if (! empty($data1)) {
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
            }

        $this->Base_Models->AddValues("conbrid_construction_contracts", $data);
    }
}
?>