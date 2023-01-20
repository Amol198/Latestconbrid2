<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Construction_contract_master extends Base_Controller {
	public function __construct() {
		parent::__construct ();
	}
public function index(){
	    
	    
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "admin/adminbody");
		$this->load->view ( "admin/includes/footer");
	}
	public function new_construction(){
	    
	    $data ['title'] = "New Construction";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_construction_contracts",array("type_of_construction"=>"new_construction"));
        $data ['display_contents'] = array (
        				"id" => "Id",
        				"type_of_construction" => "Type of Construction",
        				"type_of_property" => "Type of Property",
        				"number_of_floors" => "Number of floors",
        				"total_sq_ft_area" => "Total area(in Sq. Ft.)",
        				"total_builtup_area" => "Total builtup(in Sq. Ft.)",
        				"contract_category" => "Contract Category",
        				"contract_type" => "Contract Type",
        				"description"=>"Description",
        				"project_start_date"=>"Start Date",
        				"project_end_date"=>"End Date",
        				"current_status"=>"Status",
        				"actions" => "Action"
        				
        				
        				);
      foreach ($data['table_data'] as $key => $row) {
						$data['table_data'][$key]['actions'] = " <a  href='" . base_url('admin/Dashboard/view_new_construction/'.$data['table_data'][$key]['id']). "' class='btn btn-primary'>View</a>";
						
						//<a  href= class='btn btn-success'>Edit</a>;
					
						//<button type="view" name="actions" value="submit" class="btn btn-primary btn-lg btn-block"> Log In </button>
						if($data['table_data'][$key]['status']==0){
							$data['table_data'][$key]['current_status']="<b style='color:blue'>Pending</b>";
						}
						elseif($data['table_data'][$key]['status']==1){
							$data['table_data'][$key]['current_status']="<b style='color:green'>Approved</b>";
						}
						elseif($data['table_data'][$key]['status']==2){
							$data['table_data'][$key]['current_status']="<b style='color:red'>Rejected</b>";
						}}
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}
	public function accept_construction_contracts($id){
		// print_r($_POST);
		// exit();
		$data['note']=$_POST['note'];
		$data['status']=0;
		if(isset($_POST['status']) && $_POST['status']=="approve")
		$data['status']=1;
		elseif(isset($_POST['status']) && $_POST['status']=="reject")
		$data['status']=2;
//	$this->Base_Models->UpdateValues("conbrid_construction_contracts",$data);
	$this->Base_Models->UpadateValue("conbrid_construction_contracts",$data,array("id"=>$id)); 
redirect(base_url("admin/Construction_contract_master/new_construction"));	}

	public function demolition(){
	    
	    $data ['title'] = "Demolition with New Construction";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_construction_contracts",array("type_of_construction"=>"demolition_construction"));
        $data ['display_contents'] = array (
        				"id" => "Id",
        				"type_of_construction" => "Type of Construction",
        				"type_of_property" => "Type of Property",
        				"number_of_floors" => "Number of floors",
        				"total_sq_ft_area" => "Total area(in Sq. Ft.)",
        				"total_builtup_area" => "Total builtup(in Sq. Ft.)",
        				"demolition_rate_type" => "Demolition rate type",
        				"demolition_rate" => "Demolition rate",
        				"contract_category" => "Contract Category",
        				"contract_type" => "Contract Type",
        				"description"=>"Description",
        				"project_start_date"=>"Start Date",
        				"project_end_date"=>"End Date",
        				"current_status"=>"Status",
        				"actions"=>"Action"
        				
        				);
      foreach ($data['table_data'] as $key => $row) {
							$data['table_data'][$key]['actions'] = " <a  href='" . base_url('admin/Dashboard/view_demolition/'.$data['table_data'][$key]['id']). "' class='btn btn-primary'>View</a>";
						if($data['table_data'][$key]['status']==0){
							$data['table_data'][$key]['current_status']="<b style='color:blue'>Pending</b>";
						}
						elseif($data['table_data'][$key]['status']==1){
							$data['table_data'][$key]['current_status']="<b style='color:green'>Approved</b>";
						}
						elseif($data['table_data'][$key]['status']==2){
							$data['table_data'][$key]['current_status']="<b style='color:red'>Rejected</b>";
						}
							}

		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}
	public function renovation(){
	    
	    $data ['title'] = "Renovation";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_construction_contracts",array("type_of_construction"=>"renovation"));
        $data ['display_contents'] = array (
        				"id" => "Id",
        				"type_of_construction" => "Type of Construction",
        				"type_of_property" => "Type of Property",
        				"number_of_floors" => "Number of floors",
        				"type_of_contract" => "Type of contract",
        				"rate_of_contract" => "Rate of contract",
        				"description"=>"Description",
        				"project_start_date"=>"Start Date",
        				"project_end_date"=>"End Date",
        				"current_status"=>"Status",
        				"actions"=>"Action"
        				
        				);
      foreach ($data['table_data'] as $key => $row) {
							$data['table_data'][$key]['actions'] = " <a  href='" . base_url('admin/Dashboard/view_renovation/'.$data['table_data'][$key]['id']). "' class='btn btn-primary'>View</a>";
							if($data['table_data'][$key]['status']==0){
							$data['table_data'][$key]['current_status']="<b style='color:blue'>Pending</b>";
						}
						elseif($data['table_data'][$key]['status']==1){
							$data['table_data'][$key]['current_status']="<b style='color:green'>Approved</b>";
						}
						elseif($data['table_data'][$key]['status']==2){
							$data['table_data'][$key]['current_status']="<b style='color:red'>Rejected</b>";
						}
							}

		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}

	
	
		}?>