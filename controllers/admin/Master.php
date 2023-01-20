<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Master extends Base_Controller {
	public function __construct() {
		parent::__construct ();
	}
// public function index(){
	    
	    
// 		$this->load->view ( "admin/includes/header");
// 		$this->load->view ( "admin/includes/top");
// 		$this->load->view ( "admin/includes/nav");
// 		$this->load->view ( "admin/adminbody");
// 		$this->load->view ( "admin/includes/footer");
// 	}
	public function State(){
	    
	    $data ['title'] = "State";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_states");
        $data ['display_contents'] = array (
        				"id" => "id",
        				"name" => "Name",
        			    "actions" => "Action"
        				);
          foreach($data['table_data'] as $key => $row){
			$data['table_data'][$key]['actions'] = " <a  href='" . base_url('admin/Master/view_state/'.$data['table_data'][$key]['id']). "' class='btn btn-success'>Edit</a>";
		  }






      
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}
	
	
	public function City(){
	    
	    $data ['title'] = "City";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_cities",null,"*,(select name from conbrid_states where id=state_id) as state_name");
        $data ['display_contents'] = array (
        				"id" => "id",
        				"city_name" => "City Name",
        			    "state_name" => "State Name",
						"actions" => "Action"
        				);

						foreach($data['table_data'] as $key => $row){
							$data['table_data'][$key]['actions'] = " <a  href='" . base_url('admin/Master/view_city/'.$data['table_data'][$key]['id']). "' class='btn btn-success'>Edit</a>";
						  }
      
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}

	public function view_state($id){
    
	    $data=array();
	    $temp = $this->Base_Models->GetAllValues ( "conbrid_states",array("id"=>$id));
       if(!empty($temp)){
$data=$temp[0];

           
       }




	    $this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "admin/view_state", $data );
		$this->load->view ( "admin/includes/footer");
	}

	public function view_city($id=null){
       $data=array();
	   $temp = $this->Base_Models->GetAllValues ( "conbrid_cities",array("id"=>$id));
       $states_list = $this->Base_Models->GetAllValues ( "conbrid_states");
       if(!empty($temp)){
			$data=$temp[0];    
       }
	   $data['states_list'] = $states_list;
	   $data['action'] =base_url("admin/Master/accept_city".(isset($id)?"/".$id:""));
	   $this->load->view ( "admin/includes/header");
	   $this->load->view ( "admin/includes/top");
	   $this->load->view ( "admin/includes/nav");
	   $this->load->view ( "admin/view_city", $data );
	   $this->load->view ( "admin/includes/footer");

	}

	public function accept_state($id=null){
    if(isset($_POST['name'])) 
	$data['name']=$_POST['name'];
	if(isset($id) && $id!=null){
		$this->Base_Models->UpadateValue("conbrid_states",$data,array("id"=>$id));
	}else{
		$this->Base_Models->AddValues("conbrid_states",$data);
		
	}
	redirect(base_url('admin/Master/state'));
	}

	public function accept_city($id=null){
		if(isset($_POST['city_name'])&& isset($_POST['state_id'])) {
		$data['city_name']=$_POST['city_name'];
		$data['state_id']=$_POST['state_id'];
		if(isset($id) && $id!=null){
			$this->Base_Models->UpadateValue("conbrid_cities",$data,array("id"=>$id));
		}else{
			$this->Base_Models->AddValues("conbrid_cities",$data);
			
		}}
		redirect(base_url('admin/Master/city'));
		}
	
		



}
	?>