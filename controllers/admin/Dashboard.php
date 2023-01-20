<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Dashboard extends Base_Controller {
	public function __construct() {
		parent::__construct ();
	}
		public function chart(){
		$data = [];
		$data['count']=$this->Base_Models->CustomeQuary("SELECT DATE(date) as Date, DAYNAME(date) as day_name, COUNT(id) as count, COUNT(DISTINCT company_id) as count_total FROM conbrid_company_job_post WHERE date>now()-INTERVAL 7 day GROUP BY DAYNAME(date) ORDER BY (date);");
        


        $data['individuals']=count($this->Base_Models->GetAllValues("conbrid_individuals"));
        $data['companies']=count($this->Base_Models->GetAllValues("conbrid_companies"));
        $data['customers']=count($this->Base_Models->GetAllValues("conbrid_customers"));
        $data['job_post']=count($this->Base_Models->GetAllValues("conbrid_company_job_post"));
		$data['char_data'] = array(array('Days', 'Total Companies', 'Applied For Job Post'));
			foreach($data['count'] as $row){
				array_push(		$data['char_data'],	array($row['day_name'] ,$row['count_total'],$row['count'] ));
			}
		$data['job_post_chart']=$this->Base_Models->GetAllValues("conbrid_company_job_post");
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "admin/adminbody2",$data);
		$this->load->view ( "admin/includes/footer");

	}
	public function index(){
		$data = [];
        $data['individuals']=count($this->Base_Models->GetAllValues("conbrid_individuals"));
        $data['companies']=count($this->Base_Models->GetAllValues("conbrid_companies"));
        $data['customers']=count($this->Base_Models->GetAllValues("conbrid_customers"));
        $data['job_post']=count($this->Base_Models->GetAllValues("conbrid_company_job_post"));
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "admin/adminbody",$data);
		$this->load->view ( "admin/includes/footer");
	}
	public function job_post(){
	    
	    $data ['title'] = "Company Job Post";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_company_job_post",null,"*,
        (select name from conbrid_states where id=state) as state_name,
        (select company_name from conbrid_companies where id=company_id) as company_name");
        $data ['display_contents'] = array (
        				"id" => "Id",
        				"company_name" => "Company",
        				"key_skills" => "Key Skills",
        				"technical_skills" => "Technical Skills",
        				"job_designation" => "Job Designation",
        				"job_type" => "Job Type",
        				"individual_type" => "Individual Type",
        				"city" => "City",
        				"state_name"=>"State"
        				
        				);
      
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}
	public function individuals(){ 
	    
	    
		$data ['title'] = "Individuals";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_individuals");
        $data ['display_contents'] = array (
        				"id" => "id",
        				"individual_name" => "Name",
        				"dob" => "Date of birth",
        				"preferred_jd" => "Preferred job description",
        				"preferred_job_type" => "Job type",
        				"year_of_experience" => "Years of experience",
        					"current_status" => "Status",
        			"actions" => "Action",
        			    "vid_actions" => "Action"
        			
        				);
       foreach ($data['table_data'] as $key => $row) {
        $data['table_data'][$key]['actions'] = " <a  href='" . base_url('admin/Dashboard/view_individuals/'.$data['table_data'][$key]['id']). "' class='btn btn-success'>Edit</a>";
        	$data['table_data'][$key]['vid_actions'] = " <a  href='" . base_url('admin/Dashboard/view_individuals_videoverification/'.$data['table_data'][$key]['id']). "' class='btn btn-primary'>Edit Video Verification</a>";
    
             				     if($data['table_data'][$key]['status']==1){
             				        $data['table_data'][$key]['current_status']="<b style='color:red'>Pending</b>";
             				    }elseif($data['table_data'][$key]['status']==2){
             				        $data['table_data'][$key]['current_status']="<b style='color:orange'>Resend to Individual</b>";
             				    }
             				    elseif($data['table_data'][$key]['status']==3){
             				        $data['table_data'][$key]['current_status']="<b style='color:green'>Active</b>";
             				    }
        							}
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}
	public function companies(){
	    
	    
		$data ['title'] = "Companies";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_companies");
        $data ['display_contents'] = array (
        				"id" => "id",
        				"company_name" => "Name",
        				"office_address" => "Office address",
        				"gstin_number" => "GSTIN number",
        				"cin_number" => "CIN number",
        				"about_company" => "About company",
        				"company_website" => "Company website",
        				"company_profile" => "Company profile",
        				"number_of_employees" => "Number of employees",
        				"current_status" => "Status",
        				"img_actions" => "Action",
						"actions" => "Action",
						"vid_actions" => "Action"
        			
        				);
        				 foreach ($data['table_data'] as $key => $row) {
        $data['table_data'][$key]['actions'] = " <a  href='" . base_url('admin/Dashboard/view_companies/'.$data['table_data'][$key]['id']). "' class='btn btn-success'>Edit</a>";
         $data['table_data'][$key]['img_actions'] = " <a  href='" . base_url('admin/Dashboard/view_projects/'.$data['table_data'][$key]['id']). "' class='btn btn-success'>View Image</a>";
					 $data['table_data'][$key]['vid_actions'] = " <a  href='" . base_url('admin/Dashboard/view_companies_videoverification/'.$data['table_data'][$key]['id']). "' class='btn btn-info'>View Video Verification</a>";
                     
             				    if($data['table_data'][$key]['status']==1){
             				        $data['table_data'][$key]['current_status']="<b style='color:red'>Pending</b>";
             				    }elseif($data['table_data'][$key]['status']==2){
             				        $data['table_data'][$key]['current_status']="<b style='color:orange'>Resend to Company</b>";
             				    }
             				    elseif($data['table_data'][$key]['status']==3){
             				        $data['table_data'][$key]['current_status']="<b style='color:green'>Active</b>";
             				    }
        							}
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}
	public function customers(){
	    
	    
		$data ['title'] = "Customers";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_customers");
        $data ['display_contents'] = array (
        				"id" => "id",
        				"customer_name" => "Name",
        				"date_of_birth" => "Date of birth",
        				"contact_number" => "Contact number",
        				"actions" => "Action"
        			
        				);
        				 foreach ($data['table_data'] as $key => $row) {
        $data['table_data'][$key]['actions'] = " <a  href='" . base_url('admin/Dashboard/view_customers/'.$data['table_data'][$key]['id']). "' class='btn btn-success'>Edit</a>";
             				    
        							}
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}
		public function view_individuals($id){
	    $data=array();
	    $temp= $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_individuals",array("id"=>$id));
       if(!empty($temp)){
$data=$temp[0];
 	 $existing_data = $this->Base_Models->GetAllValues ( "conbrid_individual_verification",array("individual_id"=>$id));    
 	 if(!empty($existing_data)){
 	     
 	 }
 	 
$data ['field_of_interest'] = $this->Base_Models->GetAllValues ( "conbrid_user_field_of_interest",array("individual_id"=>$id));
$data ['technical_skills'] = $this->Base_Models->GetAllValues ( "conbrid_technical_skills",array("individual_id"=>$id));
$data ['key_skills'] = $this->Base_Models->GetAllValues ( "conbrid_key_skills",array("individual_id"=>$id));
$data ['conbrid_field_of_interest'] = $this->Base_Models->GetAllValues ( "conbrid_field_of_interest",array("status"=>"1"));
$data ['conbrid_cities'] = $this->Base_Models->GetAllValues ( "conbrid_cities");
$data ['conbrid_states'] = $this->Base_Models->GetAllValues ( "conbrid_states");

           
       }




	    $this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "admin/view_individuals", $data );
		$this->load->view ( "admin/includes/footer");
	}
	public function view_individuals_videoverification($id){
	    $data=array();
	    $temp= $this->Base_Models->GetAllValues ( "conbrid_individuals",array("id"=>$id));
		if(!empty($temp)){
			$data=$temp[0];
		
					
			$data ['conbrid_cities'] = $this->Base_Models->GetAllValues ( "conbrid_cities");
			$data ['conbrid_states'] = $this->Base_Models->GetAllValues ( "conbrid_states");
		}

	    $this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "admin/view_individuals_videoverification", $data );
		$this->load->view ( "admin/includes/footer");
	}

public function view_companies($id){
	    $data=array();
	    $temp= $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_companies",array("id"=>$id));
       if(!empty($temp)){
     $company_type= $this->Base_Models->GetAllValues ( "conbrid_users",array("id"=>$temp[0]['user_id']));
$data=$temp[0];
if(!empty($company_type)){
    $data['company_type']=$company_type[0]['company_type'];
}   

$data ['carrers'] = $this->Base_Models->GetAllValues ( "conbrid_add_career",array("company_id"=>$id));
$data ['services'] = $this->Base_Models->GetAllValues ( "conbrid_add_service",array("company_id"=>$id));

           
       }




	    $this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "admin/view_companies", $data );
		$this->load->view ( "admin/includes/footer");
	}
	public function view_companies_videoverification($id){

		$data=array();
        $temp=$this->Base_Models->GetAllValues("conbrid_companies",array("id"=>$id));
		if(!empty($temp)){
			$data=$temp[0];

			$data ['conbrid_cities'] = $this->Base_Models->GetAllValues ( "conbrid_cities");
			$data ['conbrid_states'] = $this->Base_Models->GetAllValues ( "conbrid_states");
		}
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "admin/view_companies_videoverification", $data );
		$this->load->view ( "admin/includes/footer");

	}
		public function view_projects($id){
		$data=array();
         $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_company_projects",array("id"=>$id));
     //  $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_company_projects");
        $data ['display_contents'] = array (
        				"id" => "id",
        				"project_name" => "Name",
        				"project_description" => "Project Description",
						"project_type" =>"Project Type",
        				"image1" =>"Image 1",
						
                        "image2" =>"Image 2",
                        "image3" =>"Image 3",
						"image4" =>"Image 4"
		                );
                              
//						  for($i=0;$i< count($data ['table_data']);$i++){
                     		foreach($data ['table_data'] as $i => $value){
								$project_type = $data['table_data'][$i]['project_type'];
								if($project_type==1){
					
						$data ['table_data'][$i]['image1'] = "<img width='150' src='".base_url("images/company_images/ongoing_projects/".$data ['table_data'][$i]['image1'] )."'>";
						$data ['table_data'][$i]['image2'] = "<img width='150' src='".base_url("images/company_images/ongoing_projects/".$data ['table_data'][$i]['image2'] )."'>";
						$data ['table_data'][$i]['image3'] = "<img width='150' src='".base_url("images/company_images/ongoing_projects/".$data ['table_data'][$i]['image3'] )."'>";
						$data ['table_data'][$i]['image4'] = "<img width='150' src='".base_url("images/company_images/ongoing_projects/".$data ['table_data'][$i]['image4'] )."'>";
					} else{
					 
						$data ['table_data'][$i]['image1'] = "<img width='150' src='".base_url("images/company_images/completed_projects/".$data ['table_data'][$i]['image1'] )."'>";
						$data ['table_data'][$i]['image2'] = "<img width='150' src='".base_url("images/company_images/completed_projects/".$data ['table_data'][$i]['image2'] )."'>";
						$data ['table_data'][$i]['image3'] = "<img width='150' src='".base_url("images/company_images/completed_projects/".$data ['table_data'][$i]['image3'] )."'>";
						$data ['table_data'][$i]['image4'] = "<img width='150' src='".base_url("images/company_images/completed_projects/".$data ['table_data'][$i]['image4'] )."'>";
		
						 }
				    }


				//}  
                      

		        $this->load->view ( "admin/includes/header");
		        $this->load->view ( "admin/includes/top");
		        $this->load->view ( "admin/includes/nav");
		        $this->load->view ( "common/table-view", $data );
				$this->load->view ( "admin/view_projects", $data );
		        $this->load->view ( "admin/includes/footer");
			
				
				 

	}

public function view_customers($id){
    
	    $data=array();
	    $temp= $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_customers",array("id"=>$id));
       if(!empty($temp)){
$data=$temp[0];
       }
	    $this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "admin/view_customers", $data );
		$this->load->view ( "admin/includes/footer");
	}
	
	public function view_new_construction($id){
		//$data=array();
         //controller
		 //$data ['title'] = " Construction Contract Details";


		$data=array();
	    $temp= $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_construction_contracts",array("id"=>$id));
       if(!empty($temp)){
        $data=$temp[0]; 

	$data['page_title'] = 'Construction Contracts Details'; //will be available as $page_title in view
    //	$this->load->view('admin/view_new_construction', $data); 
 


$this->load->view ( "admin/includes/header");
$this->load->view ( "admin/includes/top");
$this->load->view ( "admin/includes/nav");
$this->load->view ( "admin/view_new_construction", $data );
$this->load->view ( "admin/includes/footer");
	
	   }  
	} 
	public function view_demolition($id){
		$data=array();
	    $temp= $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_construction_contracts",array("id"=>$id));
       if(!empty($temp)){
        $data=$temp[0]; 

	$data['page_title'] = 'Construction Contracts Details'; //will be available as $page_title in view
    
$this->load->view ( "admin/includes/header");
$this->load->view ( "admin/includes/top");
$this->load->view ( "admin/includes/nav");
$this->load->view ( "admin/view_demolition", $data );
$this->load->view ( "admin/includes/footer");
	
	   }  
	} 
		public function view_renovation($id){
		$data=array();
	    $temp= $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_construction_contracts",array("id"=>$id));
       if(!empty($temp)){
        $data=$temp[0]; 

	$data['page_title'] = 'Construction Contracts Details'; //will be available as $page_title in view
    
$this->load->view ( "admin/includes/header");
$this->load->view ( "admin/includes/top");
$this->load->view ( "admin/includes/nav");
$this->load->view ( "admin/view_demolition", $data );
$this->load->view ( "admin/includes/footer");
	
	   }  
	} 
  public function accept_individual_location($id){
	
     if(isset($id)){
       $conbrid_individuals =$_POST; 
       $this->Base_Models->UpadateValue("conbrid_individuals",$conbrid_individuals,array("id"=>$id));        
	   redirect(base_url("admin/Dashboard/individuals"));   
        }
		else{
	       echo "Unable to update data";
 }
}
     public function accept_companies_location($id){
	  print_r($_POST);
	//exit();
     /*if(isset($id)){
     $conbrid_individuals =$_POST; 
      $this->Base_Models->UpadateValue("conbrid_individuals",$conbrid_individuals,array("id"=>$id));        
	  redirect(base_url("admin/Dashboard/individuals"));   
    }
      else{
	    echo "Unable to update data";
 } */
}
	
	public function accept_individual($id){
	 $_POST['individual_id']=$id;
	 $updatedata['status']=2;
	 if(isset($_POST['status_active']) && $_POST['status_active']=="0"){
	 $updatedata['status']=3;
	 }
	     unset($_POST['status_active']);
	 if(isset($_POST['conbrid_key_skills'])){
	     $conbrid_key_skills = $_POST['conbrid_key_skills'];
	     unset($_POST['conbrid_key_skills']);
	     foreach($conbrid_key_skills as $key=>$row)
    	     $this->Base_Models->UpadateValue("conbrid_key_skills",$row,array("id"=>$key));
    	     
    	     
	 }
	 if(isset($_POST['conbrid_new_key_skills'])){
	     $conbrid_new_key_skills = $_POST['conbrid_new_key_skills'];
	     unset($_POST['conbrid_new_key_skills']);
	   //  print_r($conbrid_new_key_skills);
	   //  exit();
	     foreach($conbrid_new_key_skills as $key=>$row)
    	     $this->Base_Models->AddValues("conbrid_key_skills",["key_skills"=>$row,"individual_id"=>$id]);
    	     
    	     
	 }
	 if(isset($_POST['conbrid_technical_skills'])){
	     $conbrid_technical_skills = $_POST['conbrid_technical_skills'];
	     unset($_POST['conbrid_technical_skills']);
	     foreach($conbrid_technical_skills as $key=>$row)
    	     $this->Base_Models->UpadateValue("conbrid_technical_skills",$row,array("id"=>$key));
    	     
    	     
	 }
	 if(isset($_POST['conbrid_new_technical_skills'])){
	     $conbrid_new_technical_skills = $_POST['conbrid_new_technical_skills'];
	     unset($_POST['conbrid_new_technical_skills']);
	   //  print_r($conbrid_new_key_skills);
	   //  exit();
	     foreach($conbrid_new_technical_skills as $key=>$row)
    	     $this->Base_Models->AddValues("conbrid_technical_skills",["technical_skills"=>$row,"individual_id"=>$id]);
    	     
    	     
	 }
	 	 if(isset($_POST['conbrid_new_field_of_interest'])){
	     $conbrid_new_field_of_interest = $_POST['conbrid_new_field_of_interest'];
	     unset($_POST['conbrid_new_field_of_interest']);
	   //  print_r($conbrid_new_key_skills);
	   //  exit();
	     foreach($conbrid_new_field_of_interest as $key=>$row)
    	     $this->Base_Models->AddValues("conbrid_user_field_of_interest",["field_of_interest"=>$row,"individual_id"=>$id]);
	 }
	 if(isset($_POST['conbrid_individuals'])){
	     $conbrid_individuals = $_POST['conbrid_individuals'];
	     unset($_POST['conbrid_individuals']);
         $this->Base_Models->UpadateValue("conbrid_individuals",$conbrid_individuals,array("id"=>$id));    
    	 }
	 $data = $this->Base_Models->GetAllValues ( "conbrid_individual_verification",array("individual_id"=>$id));
if(!empty($data)){
     $this->Base_Models->UpadateValue("conbrid_individual_verification",$_POST,array("individual_id"=>$id));    
   }
   else{
     $this->Base_Models->AddValues("conbrid_individual_verification",$_POST);    
   }
        $this->Base_Models->UpadateValue("conbrid_individual_verification",$_POST,array("individual_id"=>$id));    
$this->Base_Models->UpadateValue("conbrid_individuals",$updatedata,array("id"=>$id));    


	 redirect(base_url("admin/Dashboard/individuals"));   
	}
	public function accept_company($id){
	 $_POST['company_id']=$id;
	 $updatedata['status']=2;
	  if(isset($_POST['status_active']) && $_POST['status_active']=="0"){
	 $updatedata['status']=3;
	 }     
	 unset($_POST['status_active']);
	
	 	 if(isset($_POST['conbrid_add_service'])){
    	     $conbrid_add_service = $_POST['conbrid_add_service'];
    	     unset($_POST['conbrid_add_service']);
    	     	     foreach($conbrid_add_service as $key=>$row)
                         $this->Base_Models->UpadateValue("conbrid_add_service",$row,array("id"=>$key));    
    	 }
 	 	 if(isset($_POST['conbrid_add_new_service'])){
    	     $conbrid_add_service = $_POST['conbrid_add_new_service'];
    	     unset($_POST['conbrid_add_new_service']);
    	     	     foreach($conbrid_add_service as $key=>$row)
    	                $this->Base_Models->AddValues("conbrid_add_service",["service"=>$row,"company_id"=>$id]);
    	 }
    	 
    	 if(isset($_POST['conbrid_add_career'])){
    	     $conbrid_add_career = $_POST['conbrid_add_career'];
    	     unset($_POST['conbrid_add_career']);
    	     	     foreach($conbrid_add_career as $key=>$row)
                         $this->Base_Models->UpadateValue("conbrid_add_career",$row,array("id"=>$key));    
    	 }
 	 	 if(isset($_POST['conbrid_add_new_career'])){
    	     $conbrid_add_career = $_POST['conbrid_add_new_career'];
    	     unset($_POST['conbrid_add_new_career']);
    	     	     foreach($conbrid_add_career as $key=>$row)
    	                $this->Base_Models->AddValues("conbrid_add_career",["career"=>$row,"company_id"=>$id]);
    	 }


	 	 if(isset($_POST['conbrid_companies'])){
	     $conbrid_companies = $_POST['conbrid_companies'];
	if(isset($_POST['verification_note'])){
	         $conbrid_companies['verification_note']=$_POST['verification_note'];
	     }
	     unset($_POST['conbrid_companies']);
         $this->Base_Models->UpadateValue("conbrid_companies",$conbrid_companies,array("id"=>$id));    
    	 }
	 $data = $this->Base_Models->GetAllValues ( "conbrid_company_verification",array("company_id"=>$id));
    if(!empty($data)){
         $this->Base_Models->UpadateValue("conbrid_company_verification",$_POST,array("company_id"=>$id));    
       }else{
     $this->Base_Models->AddValues("conbrid_company_verification",$_POST);    
   }
        $this->Base_Models->UpadateValue("conbrid_company_verification",$_POST,array("company_id"=>$id));    
 $this->Base_Models->UpadateValue("conbrid_companies",$updatedata,array("id"=>$id));    

redirect(base_url("admin/Dashboard/companies"));
	}
	public function accept_customer($id){
	   // 	    echo "<pre>";
	   // print_r($_POST);
	   // exit();
	   	 if(isset($_POST['conbrid_customers'])){
	     $conbrid_customers = $_POST['conbrid_customers'];
	     unset($_POST['conbrid_customers']);
         $this->Base_Models->UpadateValue("conbrid_customers",$conbrid_customers,array("id"=>$id));    
    	 }

	 $_POST['customer_id']=$id;
	 $data = $this->Base_Models->GetAllValues ( "conbrid_customer_verification",array("customer_id"=>$id));
if(!empty($data)){
     $this->Base_Models->UpadateValue("conbrid_customer_verification",$_POST,array("customer_id"=>$id));    
   }
   else{
     $this->Base_Models->AddValues("conbrid_customer_verification",$_POST);    
       
   }
        $this->Base_Models->UpadateValue("conbrid_customer_verification",$_POST,array("customer_id"=>$id));    


	    
	}
	
	
		}?>