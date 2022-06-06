<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelJenisPaket extends CI_Model {
	
		public function insert_entry($data) //makanya perlu $data berupa array karena lemparan
        {
				//POST bisa dilakukan di sini maupun di model
				/*
			   $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();
				*/
                $this->db->insert('jenispaket', $data); //method baru bukan kepunyaan controller maupun model ERORRR
        }
		
		public function get_all()
        {
               $query = $this->db->get('jenispaket');  // Produces: SELECT * FROM mytable
			   return $query;
			   /*
			   //memakai array
			   foreach ($query->result_array() as $row)
				{
						echo $row['username']."-";
						echo $row['nama']."-";
						echo $row['email']."</br>";
				}
			//method getall dicoba dipanggi di index */
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