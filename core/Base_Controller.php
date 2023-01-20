<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Base_Controller extends CI_Controller {
	public $Base_Models = NULL;
	public $session_value = "";
	public $user_id = 1;
	public function __construct() {
		parent::__construct ();
		$this->load->model ( "base_models" );
		$this->Base_Models = new Base_Models ();
		$this->load->helper ( 'url' );
		session_start ();
	}
	public function load_header() {
		$this->load->view ( 'common/header' );
		$this->load->view ( 'common/top' );
		$this->load->view ( 'common/left' );
	}
	public function web_header() {
		$this->load->view ( 'web/header' );
		$this->load->view ( 'web/nav' );
	}
	public function web_header2() {
		$this->load->view ( 'web2/header' );
		$this->load->view ( 'web2/top' );
	}
	public function load_footer() {
		$this->load->view ( 'common/footer' );
	}
	public function web_footer() {
		$this->load->view ( 'web/right' );
		$this->load->view ( 'web/footer' );
	}
	public function web_footer2() {
		$this->load->view ( 'web2/footer' );
	}
	public function view($url, $data = null) {
		if (isset ( $url )) {
			$this->load_header ();
			if (isset ( $data ))
				$this->load->view ( $url, $data );
			else
				$this->load->view ( $url );
			$this->load_footer ();
		}
	}
	public function web_view($url, $data = null) {
		if (isset ( $url )) {
			$this->web_header ();
			if (isset ( $data ))
				$this->load->view ( $url, $data );
			else
				$this->load->view ( $url );
			$this->web_footer ();
		}
	}
	public function web_view2($url, $data = null) {
		if (isset ( $url )) {
			$this->web_header2 ();
			if (isset ( $data ))
				$this->load->view ( $url, $data );
			else
				$this->load->view ( $url );
			$this->web_footer2 ();
		}
	}
	public function base_view($url, $data = null) {
		if (isset ( $url )) {
			$this->load->view ( 'common/base-header' );
			if (isset ( $data ))
				$this->load->view ( $url, $data );
			else
				$this->load->view ( $url );
			$this->load->view ( 'common/base-footer' );
		}
	}
	public function export_script() {
		$this->load->view ( 'common/export_script' );
	}
	public function generateRandomString($length = 6) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
}
