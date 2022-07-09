<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$this->login();
	}
	public function login()
	{
	     $arrr = [
            'the_key'        => 'title'
        ];
        
        $data['site_title'] = $this->cm->get_para('site_settings',$arrr);
	    if($this->input->post('test')=='login'){
	        $user = $this->input->post('username');
	        $pass = md5($this->input->post('password'));
	        if($this->cm->log_in_correctly($user,$pass)){
	            $arr = [
            'username'        => $user,
            'password' => $pass
        ];
             $arr2 = [
            'email'        => $user,
            'password' => $pass
        ];
        if($this->cm->get_para('users',$arr)){
           $userdata = $this->cm->get_para('users',$arr); 
        }elseif($this->cm->get_para('users',$arr2)){
           $userdata = $this->cm->get_para('users',$arr2);  
        }
                
                $this->session->set_userdata(array('is_login'=>true)); 
                $this->session->set_userdata(array('user_id'=>$userdata->ID));
                $this->session->set_userdata(array('user'=>$userdata));
                redirect('/');
	            
	            echo "Username and Password is correct";
	        }else{
	            $data['message'] = "Invalid Login Details";
	        }
	    }
		$this->load->view('login', @$data);
	}
	public function register()
	{
	    $arrr = [
            'the_key'        => 'title'
        ];
        
        $data['site_title'] = $this->cm->get_para('site_settings',$arrr);
	    if($this->input->post('test')=='register'){
	        $arr = [
            'courses_id'        => $this->input->post('courses_id'),
            'first_name'        => $this->input->post('fname'),
            'last_name'        => $this->input->post('lname'),
            'phone_number'        => $this->input->post('pnumber'),
            'name_of_school'        => $this->input->post('school'),
            'start_date'        => date( 'Y-m-d', strtotime( $this->input->post('sdate') ) ),
            'end_date'        => date( 'Y-m-d', strtotime( $this->input->post('edate') ) ),
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        ];
	       //if($this->cm->store('users',$arr)){
	       //    $data['message'] = "Account Created with Success";
	       //}
	    }
	    $data['courses'] = $this->cm->get_all('courses');
		$this->load->view('register',$data);
	}
	public function test(){
	  echo "Nothing Here";
}
public function logout(){
      //removing session  
        $this->session->unset_userdata('is_login');  
        $this->session->unset_userdata('user_id');  
        redirect("auth/login");  
}
}
