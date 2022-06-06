<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Dashboard extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        $this->simple_login->cek_login();  //proteksi login
    }  

    //Load Halaman dashboard
    public function index() {  
		$this->load->view('layout/mainheader');  
        $this->load->view('account/dashboard');  
        $this->load->view('layout/footerku');
    }
}  
