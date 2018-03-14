<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ebook extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('download');
		$this->load->helper('url');
		$this->load->library('encrypt');
	}
	public function index()
	{
		$data['file']= $this->encrypt->sha1('Cascade House').'.rar';
		$this->load->view('download_ebook',$data);
	}
	public function download(){
		$data["file"] = file_get_contents("Cascade House.rar");
		$name = $this->uri->segment(3);

		force_download($name,$data);
	}
}
