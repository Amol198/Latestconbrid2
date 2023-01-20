<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class base_models extends CI_Model {
	function __construct() {
		/* Call the Model constructor */
		parent::__construct ();
	}
	function CustomeQuary($quarys) {
		$querya = $this->db->query ( $quarys );
		return $querya->result_array ();
	}
	function AddValues($TableName, $TableValues) {
		$this->db->insert ( $TableName, $TableValues ); 
		$insert_id = $this->db->insert_id ();
		return $insert_id;
	}
	function RemoveValues($TableName, $wherecondition) {
		$this->db->where ( $wherecondition );
		$this->db->delete ( $TableName );
	}
	function UpadateValue($TableName, $data, $wherecondition) {
		$this->db->where ( $wherecondition );
		return $this->db->update ( $TableName, $data );
	}
	function CustomeUpdateQuary($quarys) {
		$querya = $this->db->query ( $quarys );

	}
	
	
	function GetAllValues($TableName, $wherecondition = null, $select = "*") {
		$this->db->select ( $select );
		if (isset ( $wherecondition ))
			$this->db->where ( $wherecondition );
		$this->db->from ( $TableName );
		$querys = $this->db->get ();
		return $querys->result_array ();
	}
}
?>