<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelJenis extends CI_Model {


		public function insert_entry($data) //makanya perlu $data berupa array karena lemparan
        {
				//POST bisa dilakukan di sini maupun di model
				/*
			   $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();
			*/
                $this->db->insert('jenis', $data); //method baru bukan kepunyaan controller maupun model ERORRR
        }
		
	public function hapusData($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('jenis');
    }
	
	public function getMateri($id_produk = ''){
		$query = $this->db->get_where('jenis', array('id_produk' => $id_produk));
		return $query->result_array();
	}
	
	public function editDataBiro($id_produk)
		{
			$data= [
				"id_produk" => $this->input->post('id_produk', true),
				"tujuan" => $this->input->post('tujuan', true),
				"jenispaket" => $this->input->post('jenispaket', true),
				"harga" => $this->input->post('harga', true),
				"deskripsi" => $this->input->post('deskripsi', true),
				
			];
			echo $data['id_produk'];

			$this->db->set($data);
			$this->db->where('id_produk', $id_produk);
			$this->db->update('jenis');
		}
	
    public function getDetail($id_produk)
    {
        $this->db->select('*');
        $this->db->from('jenis');
        $this->db->join('jenispaket', 'jenis.jenispaket = jenispaket.id_paket');
        $this->db->where('id_produk', $id_produk);
        return $this->db->get()->result_array();
    }
		
		/*public function get_all()
        {
               $query = $this->db->get('makanan');  // Produces: SELECT * FROM mytable
			   return $query;
			   /*
			   //memakai array
			   foreach ($query->result_array() as $row)
				{
						echo $row['username']."-";
						echo $row['nama']."-";
						echo $row['email']."</br>";
				}
			//method getall dicoba dipanggi di index 
        }*/
		
		public function get_jenispaket()
        {
			return $this->db->get('jenispaket')->result_array();
        }
		
		
		public function get_all3()
        {
            $this->db->select('*');
			$this->db->from('jenis'); //yang direlasikan
			$this->db->join('jenispaket', 'jenis.jenispaket = jenispaket.id_paket');
			$this->db->order_by('id_produk');
			$query = $this->db->get();
			   return $query;
        }
		
        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}
?>