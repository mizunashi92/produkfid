<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contacts extends CI_Controller {
	public function index($slug = NULL) {
		
		if($this->uri->segment(2) != NULL){

			$slug  = $this->uri->segment(2);
			$data['agent'] = $this->Agent_model->get_agent($slug);
			$data['slug'] = $data['agent']['email'];
			$data['user'] = $data['agent']['username'];

           	}else{
			$data['user'] = null;
			$data['agent'] = $this->Agent_model->get_agent($slug);
			$data['slug'] = "sonnyarief@gmail.com";
			$data['emailnya'] = "sonnyarief@gmail.com";
			$data['namanya'] = "Sonny Arief";
			$data['phone'] = "6281513967907";			
			$data['addon'] = "<h4>Surabaya</h4>
                  <p>Gedung Graha Pacific Lt. 3A<br>
				  Jl Basuki Rahmat 87-91 |
				  Embong Kaliasin, Kota Surabaya<br>
				  Jawa Timur - 60271
                  <br><br><h4>Jakarta</h4>
                  <p>APL Tower | Lt. 11 - Suite 01<br>Jl. Letjen S. Parman kav. 28<br>
				  
				  Kota Jakarta Barat<br>
				  Daerah Khusus Ibukota Jakarta 11470 ";
			
		}

		$this->load->view('templates/header', $data);
		$this->load->view('contacts/index', $data);
		$this->load->view('templates/footer');
	}
}
