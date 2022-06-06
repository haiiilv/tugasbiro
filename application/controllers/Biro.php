<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biro extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		//$this->load->model('ModelMahasiswa'); //load
		$this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'table'));
		$this->load->database();//biar load insert tidak menyebabkan error
		$this->load->model(array('ModelJenis','ModelJenisPaket')); //load
		//$this->load->library('table');
        // echo "Selamat siang </br>";
        // Your own constructor code
    }

    // public function index()
    // {
    //     $this->load->view('welcome_message');
    // }
    public function index()
    {
        //echo 'Hello World! </br>';
        $this->simple_login->cek_login();
		$data['query']=$this->ModelJenis->get_all3(); //nyetak di model
		//$this->load->view('mahasiswa/listmhs2', $data);
		//$this->load->view('layout/coba', $data);
		$this->load->view('layout/mainheader', $data);
		$this->load->view('home', $data);
		$this->load->view('layout/footerku', $data);
		
			//method getall dicoba dipanggi di index
    }

    
    public function inputForm()
    {
        
        $this->form_validation->set_rules(
            'id_produk',
            'id_produk',
            'required|min_length[5]|max_length[12]',
            array(
                'required'      => 'Anda belum mengisi %s.'
            )
        );
        $this->form_validation->set_rules('id_produk', 'Id Produk', 'required');
        //$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        //$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('jenispaket', 'Jenis Paket', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE) {
            //$this->load->view('mahasiswa/myform');
			$data['query']=$this->ModelJenisPaket->get_all(); //nyetak di model
			//$data['jenis_menu']=$this->ModelMahasiswa->get_jenismenu();
			$this->load->view('layout/mainheader', $data);
			$this->load->view('mahasiswa/myform', $data);
			$this->load->view('layout/footerku', $data);
        } else {
			$data['id_produk']=$_POST['id_produk'];
			$data['tujuan']=$_POST['tujuan'];
			$data['jenispaket']=$_POST['jenispaket'];
			$data['harga']=$_POST['harga'];
			$data['deskripsi']=$_POST['deskripsi'];
			
			/*
			$data['Detail']=$_POST['Detail'];
			$data['Edit']=$_POST['Edit'];
			*/
			
			$this->ModelJenis->insert_entry($data);
            $this->load->view('mahasiswa/formsuccess',$data);
        }
    }
	
	public function hapus($id_produk)
    {
		//$data['query'] = 'Detail Mahasiswa';
        $this->ModelJenis->hapusData($id_produk);
        $this->session->set_flashdata('flash', 'Dihapus');
        //$this->load->view('mahasiswa', $data);
		redirect('/Biro/');
    }
	
	public function coba ($username)
    {
        echo $username;
    }

    public function detail($id_produk)
    {
        //$data['query'] = 'Detail Mahasiswa';
        $data['query'] = $this->ModelJenis->getDetail($id_produk);
        //$this->load->view('templates/header', $data);
		$this->load->view('layout/mainheader', $data);
		$this->load->view('mahasiswa/listmhs', $data);
		$this->load->view('layout/footerku', $data);
        
        //$this->load->view('templates/footer');
    }
	
	public function edit($id_produk)
	{
		//$data['judul'] = 'Edit Materi';
		$data['query'] = $this->ModelJenis->getMateri($id_produk);
		$data['jenispaket']=$this->ModelJenis->get_jenispaket();
		$query = $this->ModelJenis->getMateri($id_produk);
		$jenispaket=$this->ModelJenis->get_jenispaket();
		$this->load->helper('form');
		
		$aa = array(
						
						'role'     	=> 'form',
					);
		
		
				
			foreach ($query as $row) { 
				
				$data['form']="
					".form_open('', array('id_produk' => $row['id_produk']), $aa)."
					
						
						<tr>
							<div class='form-group'>
								<td>
									".form_label('ID Produk', 'id_produk')."
								</td>
								<td>
									";
									$data2 = array(
						
										'class'     	=> 'form-control',
									);
									$data['form'].="
									".form_input('id_produk', $row['id_produk'], $data2)."
								</td>
							</div>
						</tr>
						<tr>
							<div class='form-group'>
								<td>
									".form_label('Tujuan', 'tujuan')."
								</td>
								<td>
									"
									;
									$data2 = array(
						
										'class'     	=> 'form-control',
									);
									$data['form'].="
									".form_input('tujuan', $row['tujuan'], $data2)."
								</td>
							</div>
						</tr>
						<tr>
							<div class='form-group'>
								<td>
									".form_label('Jenis Paket', 'jenispaket')."
								</td>
								<td>
									"
									;
									
									$data2 = array(
						
										'class'     	=> 'form-control',
									);
									$data['form'].="
									
									".form_input('jenispaket', $row['jenispaket'], $data2)."
								</td>
							</div>
						</tr
						
						<tr>
							<div class='form-group'>
								<td>
									".form_label('Harga', 'harga')."
								</td>
								<td>
									"
									;
									
									$data2 = array(
						
										'class'     	=> 'form-control',
									);
									$data['form'].="
									
									".form_input('harga', $row['harga'], $data2)."
								</td>
							</div>
						</tr>
						
						
						<tr>
							<div class='form-group'>
							<td>
								".form_label('Deskripsi', 'deskripsi')."
							</td>
							<td>
								"
									;
									$data2 = array(
						
										'class'     	=> 'form-control',
										'rows'			=>	'3',
									);
									$data['form'].="
								".form_textarea('deskripsi', $row['deskripsi'], $data2)."
							</td>
							</div>
						</tr>
						<tr>
							<td>
								<button type='submit' class='btn btn-primary'>Update</button>
								<button type='reset' class='btn btn-default'>Setelan Awal</button>
							</td>
						</tr>
					
					
				";
			}

			$this->form_validation->set_rules('id_produk', 'Id Produk', 'required');
			$this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
			$this->form_validation->set_rules('jenispaket', 'Jenis Paket', 'required');
			$this->form_validation->set_rules('harga', 'Harga', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
			

			if ($this->form_validation->run() == FALSE){
				//$this->load->view('templates/header', $data);
				$data['query']=$this->ModelJenisPaket->get_all(); //nyetak di model
				$this->load->view('layout/mainheader', $data);
				$this->load->view('mahasiswa/editMhs', $data);
				$this->load->view('layout/footerku', $data);
				//$this->load->view('templates/footer');
			}else{
				$this->ModelJenis->editDataBiro($id_produk);
				// $this->session->set_flashdata('flash', 'Ditambahkan');
				//$data['judul'] = "Berhasil";
				$this->load->view('layout/mainheader', $data);
            	redirect('/biro/');
            	$this->load->view('layout/footerku', $data);
			}

			//$this->load->view('templates/header',$data);
			//$this->load->view('templates/footer');
		}
	
}
