<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
	    $arrr = [
            'the_key'        => 'title'
        ];
        
        $data['site_title'] = $this->cm->get_para('site_settings',$arrr);
		if($this->session->userdata('is_login')){
		$this->load->view('dash_required/header',$data);
		$this->load->view('dash');
		$this->load->view('dash_required/footer');
		}else{
		    redirect('auth/login');
		}
	}
}
