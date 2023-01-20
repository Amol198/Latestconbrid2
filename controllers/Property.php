<?php
require_once APPPATH . 'core/Base_Controller.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Property extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
        if (!isset($_SESSION['userdata'])) {
            redirect(base_url("Dashboard/registration"));
        }

    }
     
        public function rental_property()
    {
        $data['page_title'] = 'Rental Property';
        $data['states'] = $this->Base_Models->GetAllValues("conbrid_states");

        $this->load->view("common/header");
        $this->load->view("common/left");

        $this->load->view("forms/view_rental_property",$data);
        $this->load->view("common/footer");
    }
    public function lease_property()
    {
        $data['states'] = $this->Base_Models->GetAllValues("conbrid_states");

        $this->load->view("common/header");
        $this->load->view("common/left");

        $this->load->view("forms/view_lease_property",$data);
        $this->load->view("common/footer");
    }

    public function sell_property()
    {
        $data['states'] = $this->Base_Models->GetAllValues("conbrid_states");

        $this->load->view("common/header");
        $this->load->view("common/left");

        $this->load->view("forms/view_sell_property", $data);
        $this->load->view("common/footer");
    }
    public function get_cities()
    {
        $cities = array();
        if (isset($_POST['state_id']) && $_POST['state_id'] != 0) {
            $cities = $this->Base_Models->CustomeQuary("select * from conbrid_cities where state_id=" . $_POST['state_id'] . " ORDER BY city_name asc");
        }
        echo json_encode($cities);
    }
    public function property_report(){
        $data1 = [];
        $data3 =[];
        $data1['rental_count']=count($this->Base_Models->GetAllValues("conbrid_rental_property"));

        $data1['sell_count']=count($this->Base_Models->GetAllValues("conbrid_sell_property"));
####################################   Rent Property data start #############################################
        $data5 ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_rental_property",null,"*,
        (select name from conbrid_states where id=state_id) as state_name ");
        $data5 ['display_contents'] = array (
                        "id" => "Id",
                        "rental_aggr_date" =>"Date",
                        "type_of_property" => "Type of Property",
                        "sub_categories" => "Sub Categories",
                        "property_address" => "Property Address",
                        "property_facing" =>"Property Facing",
                        "builtup_area" =>"Built-up Area",
                        "address1"=>"Address",
                        "actions" => "Action"
                        
                        );
                        foreach ($data5['table_data'] as $key => $row) {
                            $data5['table_data'][$key]['actions'] = " <a  href='" . base_url('property/Property/view_rental_property_post/'.$data5['table_data'][$key]['id']). "' class='btn btn-warning'>View</a>";
    
                        }
####################################   Rent Property data end #############################################
####################################   Sell Property data start #############################################
              
                        $data6 ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_sell_property",null,"*,
                        (select name from conbrid_states where id=state_id) as state_name ");
                        $data6 ['display_contents'] = array (
                                        "id" => "Id",
                                    
                                        "type_of_property" => "Type of Property",
                                        "sub_categories" => "Sub Categories",
                                        "property_address" => "Property Address",
                                        "address1"=>"Address",
                                        "actions" => "Action"
                                        
                                        );
                                        foreach ($data6['table_data'] as $key => $row) {
                                            $data6['table_data'][$key]['actions'] = " <a  href='" . base_url('property/Property/view_sell_property_post/'.$data6['table_data'][$key]['id']). "' class='btn btn-warning'>View</a>";
                    
                                        }
                              
 ####################################   Sell Property data end #############################################
             
              
                        $this->load->view("common/header");
                        $this->load->view("common/left");
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";  
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        $data1['table_view5']=$this->load->view ( "common/table-view", $data5,true );
                        $data1['table_view6']=$this->load->view ( "common/table-view", $data6,true );
                       

                        
    
                        $this->load->view("property/view_property_post",$data1);

                       // $this->load->view("property/view_property_post",$data3);
    }

    public function accept_sell_property()
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
        $data['main_type_of_property'] = $_POST['main_type_of_property'];
        if ($data['main_type_of_property'] == "residential") {

            $data['sub_categories'] = $_POST['sub_categories'];

            if ($data['sub_categories'] == "normal_ready") {

                $data['property_type'] = $_POST['property_type1a'];
                $data['name'] = $_POST['name1a'];
                $data['project_name'] = $_POST['project_name1a'];
                $data['rera_number'] = $_POST['rera_number1a'];
                $data['budget'] = $_POST['budget1a'];
                $data['booking_amount'] = $_POST['booking_amount1a'];
                $data['maintenance'] = $_POST['maintenance1a'];
                $data['plot_area'] = $_POST['plot_area1a'];
                $data['plot_area_measure_type'] = $_POST['plot_area_measure_type1a'];
                $data['builtup_area'] = $_POST['builtup_area1a'];
                $data['builtup_area_measure_type'] = $_POST['builtup_area_measure_type1a'];
                $data['carpet_area'] = $_POST['carpet_area1a'];
                $data['carpet_area_measure_type'] = $_POST['carpet_area_measure_type1a'];
                $data['bhk'] = $_POST['bhk1a'];
                $data['number_of_bathroom'] = $_POST['number_of_bathroom1a'];
                $data['type_of_flooring'] = $_POST['type_of_flooring1a'];
                $data['entrance_facing'] = $_POST['entrance_facing1a'];
                $data['bedroom_facing'] = $_POST['bedroom_facing1a'];
                $data['poojaroom_facing'] = $_POST['poojaroom_facing1a'];
                $data['kitchen_facing'] = $_POST['kitchen_facing1a'];
                $data['furnishing_status'] = $_POST['furnishing_status1a'];
                $data['start_water_timing'] = $_POST['start_water_timing1a'];
                $data['end_water_timing'] = $_POST['end_water_timing1a'];
                $data['start_electricity_timing'] = $_POST['start_electricity_timing1a'];
                $data['end_electricity_timing'] = $_POST['end_electricity_timing1a'];
                $data['basic_amenities'] = $_POST['basic_amenities1a'];
                $data['nearby_places'] = $_POST['nearby1a'];
                $data['ownership_type'] = $_POST['ownership_type1a'];
                $data['offers'] = $_POST['offers1a'];
                if (isset($_POST['budget_negotiable1a'])) {
                    $data['budget_negotiable'] = $_POST['budget_negotiable1a'];
                }
                if (isset( $_POST['booking_amount_negotiable1a'])) {
                    $data['booking_amount_negotiable'] = $_POST['booking_amount_negotiable1a'];
                }
                
            } else if ($data['sub_categories'] == "single_ongoing") {
                $data['property_type'] = $_POST['property_type1b'];
                $data['name'] = $_POST['name1b'];
                $data['project_name'] = $_POST['project_name1b'];
                $data['rera_number'] = $_POST['rera_number1b'];
                $data['budget'] = $_POST['budget1b'];
                $data['booking_amount'] = $_POST['booking_amount1b'];
                $data['maintenance'] = $_POST['maintenance1b'];
                $data['plot_area'] = $_POST['plot_area1b'];
                $data['plot_area_measure_type'] = $_POST['plot_area_measure_type1b'];
                $data['builtup_area'] = $_POST['builtup_area1b'];
                $data['builtup_area_measure_type'] = $_POST['builtup_area_measure_type1b'];
                $data['carpet_area'] = $_POST['carpet_area1b'];
                $data['carpet_area_measure_type'] = $_POST['carpet_area_measure_type1b'];
                $data['bhk'] = $_POST['bhk1b'];
                $data['number_of_bathroom'] = $_POST['number_of_bathroom1b'];
                $data['type_of_flooring'] = $_POST['type_of_flooring1b'];
                $data['entrance_facing'] = $_POST['entrance_facing1b'];
                $data['bedroom_facing'] = $_POST['bedroom_facing1b'];
                $data['poojaroom_facing'] = $_POST['poojaroom_facing1b'];
                $data['kitchen_facing'] = $_POST['kitchen_facing1b'];
                $data['furnishing_status'] = $_POST['furnishing_status1b'];
                $data['start_water_timing'] = $_POST['start_water_timing1b'];
                $data['end_water_timing'] = $_POST['end_water_timing1b'];
                $data['start_electricity_timing'] = $_POST['start_electricity_timing1b'];
                $data['end_electricity_timing'] = $_POST['end_electricity_timing1b'];
                $data['basic_amenities'] = $_POST['basic_amenities1b'];
                $data['nearby_places'] = $_POST['nearby1b'];
                $data['ownership_type'] = $_POST['ownership_type1b'];
                $data['offers'] = $_POST['offers1b'];
                if (isset($_POST['budget_negotiable1b'])) {
                    $data['budget_negotiable'] = $_POST['budget_negotiable1b'];
                }
                if (isset( $_POST['booking_amount_negotiable1b'])) {
                    $data['booking_amount_negotiable'] = $_POST['booking_amount_negotiable1b'];
                }
             
            } else if ($data['sub_categories'] == "single_ready") {
                $data['property_type'] = $_POST['property_type1c'];
                $data['name'] = $_POST['name1c'];
                $data['project_name'] = $_POST['project_name1c'];
                $data['rera_number'] = $_POST['rera_number1c'];
                $data['budget'] = $_POST['budget1c'];
                $data['booking_amount'] = $_POST['booking_amount1c'];
                $data['maintenance'] = $_POST['maintenance1c'];
                $data['plot_area'] = $_POST['plot_area1c'];
                $data['plot_area_measure_type'] = $_POST['plot_area_measure_type1c'];
                $data['builtup_area'] = $_POST['builtup_area1c'];
                $data['builtup_area_measure_type'] = $_POST['builtup_area_measure_type1c'];
                $data['carpet_area'] = $_POST['carpet_area1c'];
                $data['carpet_area_measure_type'] = $_POST['carpet_area_measure_type1c'];
                $data['bhk'] = $_POST['bhk1c'];
                $data['number_of_bathroom'] = $_POST['number_of_bathroom1c'];
                $data['type_of_flooring'] = $_POST['type_of_flooring1c'];
                $data['entrance_facing'] = $_POST['entrance_facing1c'];
                $data['bedroom_facing'] = $_POST['bedroom_facing1c'];
                $data['poojaroom_facing'] = $_POST['poojaroom_facing1c'];
                $data['kitchen_facing'] = $_POST['kitchen_facing1c'];
                $data['furnishing_status'] = $_POST['furnishing_status1c'];
                $data['start_water_timing'] = $_POST['start_water_timing1c'];
                $data['end_water_timing'] = $_POST['end_water_timing1c'];
                $data['start_electricity_timing'] = $_POST['start_electricity_timing1c'];
                $data['end_electricity_timing'] = $_POST['end_electricity_timing1c'];
                $data['basic_amenities'] = $_POST['basic_amenities1c'];
                $data['nearby_places'] = $_POST['nearby1c'];
                $data['ownership_type'] = $_POST['ownership_type1c'];
                $data['offers'] = $_POST['offers1c'];
                if (isset($_POST['budget_negotiable1c'])) {
                    $data['budget_negotiable'] = $_POST['budget_negotiable1c'];
                }
                if (isset( $_POST['booking_amount_negotiable1c'])) {
                    $data['booking_amount_negotiable'] = $_POST['booking_amount_negotiable1c'];
                }
               
            }
        }
       else if ($data['main_type_of_property'] == "commercial") {
        $data['property_type'] = $_POST['property_type2'];
        $data['name'] = $_POST['name2'];
        $data['project_name'] = $_POST['project_name2'];
        $data['budget'] = $_POST['budget2'];
        $data['maintenance'] = $_POST['maintenance2'];
        $data['builtup_area'] = $_POST['builtup_area2'];
        $data['builtup_area_measure_type'] = $_POST['builtup_area_measure_type2'];
        $data['rera_number'] = $_POST['rera_number2'];
        $data['description'] = $_POST['description2'];
        $data['type_of_flooring'] = $_POST['type_of_flooring2'];
        if (isset($_POST['budget_negotiable2'])) {
            $data['budget_negotiable'] = $_POST['budget_negotiable2'];
        }

       

        }
        else if ($data['main_type_of_property'] == "industrial") {


            $data['property_type'] = $_POST['property_type3'];
            $data['name'] = $_POST['name3'];
            $data['project_name'] = $_POST['project_name3'];
            $data['budget'] = $_POST['budget3'];
            $data['maintenance'] = $_POST['maintenance3'];
            $data['builtup_area'] = $_POST['builtup_area3'];
            $data['builtup_area_measure_type'] = $_POST['builtup_area_measure_type3'];
            $data['rera_number'] = $_POST['rera_number3'];
            $data['description'] = $_POST['description3'];
           
            if (isset($_POST['budget_negotiable3'])) {
                $data['budget_negotiable'] = $_POST['budget_negotiable3'];
            }
        }
        else if ($data['main_type_of_property'] == "institutional") {


            $data['property_type'] = $_POST['property_type4'];
            $data['name'] = $_POST['name4'];
            $data['project_name'] = $_POST['project_name4'];
            $data['budget'] = $_POST['budget4'];
            $data['maintenance'] = $_POST['maintenance4'];
            $data['builtup_area'] = $_POST['builtup_area4'];
            $data['builtup_area_measure_type'] = $_POST['builtup_area_measure_type4'];
            $data['rera_number'] = $_POST['rera_number4'];
            $data['description'] = $_POST['description4'];
            $data['type_of_flooring'] = $_POST['type_of_flooring4'];
            if (isset($_POST['budget_negotiable4'])) {
                $data['budget_negotiable'] = $_POST['budget_negotiable4'];
            }
        }
        // FOR PANCARD VIDEO VERIFICATION
        $path = array();                    
        $image_folder = APPPATH . "../images/property_images/";
        if (isset($_FILES['pancard']) && $_FILES['pancard']['error'] == 0) {
            $tmp = explode('.', $_FILES['pancard']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['pancard']['tmp_name'], $image_folder . "pancard." . $b);
            $path['pancard'] = "pancard" . "." . $b;
            $data['pancard'] = $path['pancard'];
        }

        
        if (!empty($path)) {
            $this->Base_Models->AddValues("conbrid_sell_property", $path);


            $this->Base_Models->AddValues("conbrid_sell_property", $data);
            redirect(base_url("Dashboard"));
        } else {
            redirect(base_url("Dashboard/registration"));
        }
    }
        public function accept_rental_property()
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
        $data['main_type_of_property'] = $_POST['main_type_of_property'];
        if ($data['main_type_of_property'] == "residential") {
            $data['property_type'] = $_POST['property_type1'];
            
            $data['description'] = $_POST['description1'];
            $data['entrance_facing'] = $_POST['entrance_facing1'];
            $data['bedroom_facing'] = $_POST['bedroom_facing1'];
            $data['poojaroom_facing'] = $_POST['poojaroom_facing1'];
            $data['kitchen_facing'] = $_POST['kitchen_facing1'];
            $data['builtup_area'] = $_POST['builtup_area1'];
            $data['monthly_rent'] = $_POST['monthly_rent1'];
            $data['security_deposit'] = $_POST['security_deposit1'];  
            $data['maintenance'] = $_POST['maintenance1'];
            $data['rental_period'] = $_POST['rental_period1'];
            $data['rental_aggr_date'] = $_POST['rental_aggr_date1'];

            if (isset($_POST['monthly_rent_negotiable1'])) {
                $data['monthly_rent_negotiable'] = $_POST['monthly_rent_negotiable1'];
            }
            if (isset( $_POST['security_deposit_negotiable1'])) {
                $data['security_deposit_negotiable'] = $_POST['security_deposit_negotiable1'];
            }
           

        } elseif ($data['main_type_of_property'] == "commercial") {
            $data['property_type'] = $_POST['property_type2'];
            
            $data['description'] = $_POST['description2'];
            $data['entrance_facing'] = $_POST['entrance_facing2'];
            $data['bedroom_facing'] = $_POST['bedroom_facing2'];
            $data['poojaroom_facing'] = $_POST['poojaroom_facing2'];
            $data['kitchen_facing'] = $_POST['kitchen_facing2'];
            $data['builtup_area'] = $_POST['builtup_area2'];
            $data['monthly_rent'] = $_POST['monthly_rent2'];
            $data['security_deposit'] = $_POST['security_deposit2'];  
            $data['maintenance'] = $_POST['maintenance2'];
            $data['rental_period'] = $_POST['rental_period2'];
            $data['rental_aggr_date'] = $_POST['rental_aggr_date2'];
            if (isset($_POST['monthly_rent_negotiable2'])) {
                $data['monthly_rent_negotiable'] = $_POST['monthly_rent_negotiable2'];
            }
            if (isset( $_POST['security_deposit_negotiable2'])) {
                $data['security_deposit_negotiable'] = $_POST['security_deposit_negotiable2'];
            }


        } elseif ($data['main_type_of_property'] == "industrial") {
            $data['property_type'] = $_POST['property_type3'];
            
            $data['description'] = $_POST['description3'];
            $data['entrance_facing'] = $_POST['entrance_facing3'];
            $data['bedroom_facing'] = $_POST['bedroom_facing3'];
            $data['poojaroom_facing'] = $_POST['poojaroom_facing3'];
            $data['kitchen_facing'] = $_POST['kitchen_facing3'];
            $data['builtup_area'] = $_POST['builtup_area3'];
            $data['monthly_rent'] = $_POST['monthly_rent3'];
            $data['security_deposit'] = $_POST['security_deposit3'];  
            $data['maintenance'] = $_POST['maintenance3'];
            $data['rental_period'] = $_POST['rental_period3'];
            $data['rental_aggr_date'] = $_POST['rental_aggr_date3'];
            if (isset($_POST['monthly_rent_negotiable3'])) {
                $data['monthly_rent_negotiable'] = $_POST['monthly_rent_negotiable3'];
            }
            if (isset( $_POST['security_deposit_negotiable3'])) {
                $data['security_deposit_negotiable'] = $_POST['security_deposit_negotiable3'];
            }


        } elseif ($data['main_type_of_property'] == "institutional") {
            $data['property_type'] = $_POST['property_type4'];

            $data['description'] = $_POST['description4'];
            $data['entrance_facing'] = $_POST['entrance_facing4'];
            $data['bedroom_facing'] = $_POST['bedroom_facing4'];
            $data['poojaroom_facing'] = $_POST['poojaroom_facing4'];
            $data['kitchen_facing'] = $_POST['kitchen_facing4'];
            $data['builtup_area'] = $_POST['builtup_area4'];
            $data['monthly_rent'] = $_POST['monthly_rent4'];
            $data['security_deposit'] = $_POST['security_deposit4'];
            $data['maintenance'] = $_POST['maintenance4'];
            $data['rental_period'] = $_POST['rental_period4'];
            $data['rental_aggr_date'] = $_POST['rental_aggr_date4'];
            if (isset($_POST['monthly_rent_negotiable4'])) {
                $data['monthly_rent_negotiable'] = $_POST['monthly_rent_negotiable4'];
            }
            if (isset( $_POST['security_deposit_negotiable3'])) {
                $data['security_deposit_negotiable'] = $_POST['security_deposit_negotiable4'];
            }
        }
        $path = array();                    //  FOR PROPERTY IMAGES
        $image_folder = APPPATH . "../images/property_images/";
        
            // FOR E-STAMP AND ELECTRICITY DOCUMENTS
        if (isset($_FILES['e_stamp1']) && $_FILES['e_stamp1']['error'] == 0) {
            $tmp = explode('.', $_FILES['e_stamp1']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['e_stamp1']['tmp_name'], $image_folder . "e_stamp1." . $b);
            $path['e_stamp'] = "e_stamp1" . "." . $b;
            $data['e_stamp'] = $path['e_stamp'];
        }
        if (isset($_FILES['e_stamp2']) && $_FILES['e_stamp2']['error'] == 0) {
            $tmp = explode('.', $_FILES['e_stamp2']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['e_stamp2']['tmp_name'], $image_folder . "e_stamp2." . $b);
            $path['e_stamp'] = "e_stamp2" . "." . $b;
            $data['e_stamp'] = $path['e_stamp'];
        }
        if (isset($_FILES['e_stamp3']) && $_FILES['e_stamp3']['error'] == 0) {
            $tmp = explode('.', $_FILES['e_stamp3']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['e_stamp3']['tmp_name'], $image_folder . "e_stamp3." . $b);
            $path['e_stamp'] = "e_stamp3" . "." . $b;
            $data['e_stamp'] = $path['e_stamp'];
        }
        if (isset($_FILES['e_stamp4']) && $_FILES['e_stamp4']['error'] == 0) {
            $tmp = explode('.', $_FILES['e_stamp4']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['e_stamp4']['tmp_name'], $image_folder . "e_stamp4." . $b);
            $path['e_stamp'] = "e_stamp4" . "." . $b;
            $data['e_stamp'] = $path['e_stamp'];
        }

        // FOR ELECTRICITY
        if (isset($_FILES['electricity1']) && $_FILES['electricity1']['error'] == 0) {
            $tmp = explode('.', $_FILES['electricity1']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['electricity1']['tmp_name'], $image_folder . "electricity1." . $b);
            $path['electricity'] = "electricity1" . "." . $b;
            $data['electricity'] = $path['electricity'];
        }
        if (isset($_FILES['electricity2']) && $_FILES['electricity2']['error'] == 0) {
            $tmp = explode('.', $_FILES['electricity2']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['electricity2']['tmp_name'], $image_folder . "electricity2." . $b);
            $path['electricity'] = "electricity2" . "." . $b;
            $data['electricity'] = $path['electricity'];
        }
        if (isset($_FILES['electricity3']) && $_FILES['electricity3']['error'] == 0) {
            $tmp = explode('.', $_FILES['electricity3']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['electricity3']['tmp_name'], $image_folder . "electricity3." . $b);
            $path['electricity'] = "electricity3" . "." . $b;
            $data['electricity'] = $path['electricity'];
        }
        if (isset($_FILES['electricity4']) && $_FILES['electricity4']['error'] == 0) {
            $tmp = explode('.', $_FILES['electricity4']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['electricity4']['tmp_name'], $image_folder . "electricity4." . $b);
            $path['electricity'] = "electricity4" . "." . $b;
            $data['electricity'] = $path['electricity'];
        }

         // FOR PANCARD VIDEO VERIFICATION

        if (isset($_FILES['pancard']) && $_FILES['pancard']['error'] == 0) {
            $tmp = explode('.', $_FILES['pancard']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['pancard']['tmp_name'], $image_folder . "pancard." . $b);
            $path['pancard'] = "pancard" . "." . $b;
            $data['pancard'] = $path['pancard'];
        }
        if (!empty($path)) {
            $this->Base_Models->AddValues("conbrid_rental_property", $path);


            $this->Base_Models->AddValues("conbrid_rental_property", $data);
            redirect(base_url("Dashboard"));
        } else {
            redirect(base_url("Dashboard/registration"));
        }
        
     }
    public function accept_lease_property()
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
        $data['main_type_of_property'] = $_POST['main_type_of_property'];
        if ($data['main_type_of_property'] == "residential") {
            $data['property_type'] = $_POST['property_type1'];
            
            $data['description'] = $_POST['description1'];
            $data['entrance_facing'] = $_POST['entrance_facing1'];
            $data['bedroom_facing'] = $_POST['bedroom_facing1'];
            $data['poojaroom_facing'] = $_POST['poojaroom_facing1'];
            $data['kitchen_facing'] = $_POST['kitchen_facing1'];
            $data['lease_amount'] = $_POST['lease_amount1'];  
            $data['maintenance'] = $_POST['maintenance1'];
            $data['builtup_area'] = $_POST['builtup_area1'];
            $data['lease_year'] = $_POST['lease_year1'];
            $data['lease_month'] = $_POST['lease_month1'];
            $data['lock_in_year'] = $_POST['lock_in_year1'];
            $data['lock_in_month'] = $_POST['lock_in_month1'];
           

            if (isset($_POST['lease_amount_negotiable1'])) {
                $data['lease_amount_negotiable'] = $_POST['lease_amount_negotiable1'];
            }
            
           

        } else if ($data['main_type_of_property'] == "commercial") {
            $data['property_type'] = $_POST['property_type2'];
            
            $data['description'] = $_POST['description2'];
            $data['entrance_facing'] = $_POST['entrance_facing2'];
            $data['bedroom_facing'] = $_POST['bedroom_facing2'];
            $data['poojaroom_facing'] = $_POST['poojaroom_facing2'];
            $data['kitchen_facing'] = $_POST['kitchen_facing2'];
            $data['lease_amount'] = $_POST['lease_amount2'];  
            $data['maintenance'] = $_POST['maintenance2'];
            $data['builtup_area'] = $_POST['builtup_area2'];
            $data['lease_year'] = $_POST['lease_year2'];
            $data['lease_month'] = $_POST['lease_month2'];
            $data['lock_in_year'] = $_POST['lock_in_year2'];
            $data['lock_in_month'] = $_POST['lock_in_month2'];
           

            if (isset($_POST['lease_amount_negotiable2'])) {
                $data['lease_amount_negotiable'] = $_POST['lease_amount_negotiable2'];
            }
            
           
          
        } else if ($data['main_type_of_property'] == "industrial") {
            $data['property_type'] = $_POST['property_type3']; 
            $data['description'] = $_POST['description3'];
            $data['entrance_facing'] = $_POST['entrance_facing3'];
            $data['bedroom_facing'] = $_POST['bedroom_facing3'];
            $data['poojaroom_facing'] = $_POST['poojaroom_facing3'];
            $data['kitchen_facing'] = $_POST['kitchen_facing3'];
            $data['lease_amount'] = $_POST['lease_amount3'];  
            $data['maintenance'] = $_POST['maintenance3'];
            $data['builtup_area'] = $_POST['builtup_area3'];
            $data['lease_year'] = $_POST['lease_year3'];
            $data['lease_month'] = $_POST['lease_month3'];
            $data['lock_in_year'] = $_POST['lock_in_year3'];
            $data['lock_in_month'] = $_POST['lock_in_month3'];
           

            if (isset($_POST['lease_amount_negotiable3'])) {
                $data['lease_amount_negotiable'] = $_POST['lease_amount_negotiable3'];
            }
            
           
          
        } else if ($data['main_type_of_property'] == "institutional") {
            $data['property_type'] = $_POST['property_type4'];
            $data['description'] = $_POST['description4'];
            $data['entrance_facing'] = $_POST['entrance_facing4'];
            $data['bedroom_facing'] = $_POST['bedroom_facing4'];
            $data['poojaroom_facing'] = $_POST['poojaroom_facing4'];
            $data['kitchen_facing'] = $_POST['kitchen_facing4'];
            $data['lease_amount'] = $_POST['lease_amount4'];  
            $data['maintenance'] = $_POST['maintenance4'];
            $data['builtup_area'] = $_POST['builtup_area4'];
            $data['lease_year'] = $_POST['lease_year4'];
            $data['lease_month'] = $_POST['lease_month4'];
            $data['lock_in_year'] = $_POST['lock_in_year4'];
            $data['lock_in_month'] = $_POST['lock_in_month4'];
           

            if (isset($_POST['lease_amount_negotiable4'])) {
                $data['lease_amount_negotiable'] = $_POST['lease_amount_negotiable4'];
            }
            
           
        } 
        $path = array();                    
        $image_folder = APPPATH . "../images/property_images/";
       
            // FOR E-STAMP AND ELECTRICITY DOCUMENTS
        if (isset($_FILES['e_stamp1']) && $_FILES['e_stamp1']['error'] == 0) {
            $tmp = explode('.', $_FILES['e_stamp1']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['e_stamp1']['tmp_name'], $image_folder . "e_stamp1." . $b);
            $path['e_stamp'] = "e_stamp1" . "." . $b;
            $data['e_stamp'] = $path['e_stamp'];
        }
        if (isset($_FILES['e_stamp2']) && $_FILES['e_stamp2']['error'] == 0) {
            $tmp = explode('.', $_FILES['e_stamp2']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['e_stamp2']['tmp_name'], $image_folder . "e_stamp2." . $b);
            $path['e_stamp'] = "e_stamp2" . "." . $b;
            $data['e_stamp'] = $path['e_stamp'];
        }
        if (isset($_FILES['e_stamp3']) && $_FILES['e_stamp3']['error'] == 0) {
            $tmp = explode('.', $_FILES['e_stamp3']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['e_stamp3']['tmp_name'], $image_folder . "e_stamp3." . $b);
            $path['e_stamp'] = "e_stamp3" . "." . $b;
            $data['e_stamp'] = $path['e_stamp'];
        }
        if (isset($_FILES['e_stamp4']) && $_FILES['e_stamp4']['error'] == 0) {
            $tmp = explode('.', $_FILES['e_stamp4']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['e_stamp4']['tmp_name'], $image_folder . "e_stamp4." . $b);
            $path['e_stamp'] = "e_stamp4" . "." . $b;
            $data['e_stamp'] = $path['e_stamp'];
        }
        // FOR ELECTRICITY
        if (isset($_FILES['electricity1']) && $_FILES['electricity1']['error'] == 0) {
            $tmp = explode('.', $_FILES['electricity1']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['electricity1']['tmp_name'], $image_folder . "electricity1." . $b);
            $path['electricity'] = "electricity1" . "." . $b;
            $data['electricity'] = $path['electricity'];
        }
        if (isset($_FILES['electricity2']) && $_FILES['electricity2']['error'] == 0) {
            $tmp = explode('.', $_FILES['electricity2']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['electricity2']['tmp_name'], $image_folder . "electricity2." . $b);
            $path['electricity'] = "electricity2" . "." . $b;
            $data['electricity'] = $path['electricity'];
        }
        if (isset($_FILES['electricity3']) && $_FILES['electricity3']['error'] == 0) {
            $tmp = explode('.', $_FILES['electricity3']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['electricity3']['tmp_name'], $image_folder . "electricity3." . $b);
            $path['electricity'] = "electricity3" . "." . $b;
            $data['electricity'] = $path['electricity'];
        }
        if (isset($_FILES['electricity4']) && $_FILES['electricity4']['error'] == 0) {
            $tmp = explode('.', $_FILES['electricity4']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['electricity4']['tmp_name'], $image_folder . "electricity4." . $b);
            $path['electricity'] = "electricity4" . "." . $b;
            $data['electricity'] = $path['electricity'];
        }

         // FOR PANCARD VIDEO VERIFICATION

        if (isset($_FILES['pancard']) && $_FILES['pancard']['error'] == 0) {
            $tmp = explode('.', $_FILES['pancard']['name']);
            $b = end($tmp);
            $up = move_uploaded_file($_FILES['pancard']['tmp_name'], $image_folder . "pancard." . $b);
            $path['pancard'] = "pancard" . "." . $b;
            $data['pancard'] = $path['pancard'];
        }
        if (!empty($path)) {
            $this->Base_Models->AddValues("conbrid_lease_property", $path);


            $this->Base_Models->AddValues("conbrid_lease_property", $data);
            redirect(base_url("Dashboard"));
        } else {
            redirect(base_url("Dashboard/registration"));
        }
        
    } 
    

    public function sell_property_post(){
	   
	    $data ['title'] = "Property Job Post";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_sell_property",null,"*,
        (select name from conbrid_states where id=state_id) as state_name ");
        $data ['display_contents'] = array (
        				"id" => "Id",
        				"type_of_property" => "Type of Property",
        				"sub_categories" => "Sub Categories",
        				"type_house" => "Type of House",
                        "actions" => "Action",
        				"state_name"=>"State"
        				
        				);
                        foreach ($data['table_data'] as $key => $row) {
                            $data['table_data'][$key]['actions'] = " <a  href='" . base_url('property/Property/view_sell_property_post/'.$data['table_data'][$key]['id']). "' class='btn btn-warning'>View List</a>";

                        }
                        $this->load->view("common/header");
                        $this->load->view("common/left");
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        $this->load->view ( "common/table-view", $data );
                        $this->load->view("common/footer");
	
}
public function sell_property_posttab(){
	   
    $data ['title'] = "Property Report Post";

                    $this->load->view("common/footer");

}

public function view_rental_property_post($id = null){
    if(isset($id)){
        $data = array();
        
        $data['property_details'] = $this->Base_Models->GetAllValues("conbrid_rental_property", array(
            "conbrid_rental_property.id" => $id
        ), "conbrid_rental_property.*");
        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("forms/view_sell_property_post", $data);
        $this->load->view("common/footer");
    }else{
        $this->load->view("common/header");
        $this->load->view("common/left");
        echo "<br><br><br><br><br><br><br><br><br><br><br><br><div > Details Not found</div> ";
        $this->load->view("common/footer");
    }
}

    public function view_sell_property_post($id = null){
        if(isset($id)){
            $data = array();
            
            $data['property_details'] = $this->Base_Models->GetAllValues("conbrid_rental_property", array(
                "conbrid_sell_property.id" => $id
            ), "conbrid_sell_property.*");
            $this->load->view("common/header");
            $this->load->view("common/left");
            $this->load->view("forms/view_sell_property_post", $data);
            $this->load->view("common/footer");
        }else{
            $this->load->view("common/header");
            $this->load->view("common/left");
            echo "<br><br><br><br><br><br><br><br><br><br><br><br><div > Details Not found</div> ";
            $this->load->view("common/footer");
        }
    }

}
?>