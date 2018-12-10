<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Productpage extends CI_Controller {
	public function index() {

		if( $this->uri->segment(2) == "aj" or 
			$this->uri->segment(2) == "ak" or
			$this->uri->segment(2) == "apk" or 
			$this->uri->segment(2) == "akl" or 
			$this->uri->segment(2) == "as" or 
			$this->uri->segment(2) == "arj" or 
			$this->uri->segment(2) == "am" or  
			$this->uri->segment(2) == "ap"){

			$section = $this->uri->segment(2);
			$data['user'] = 'view';
			$data['section'] = $section;
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
				  Daerah Khusus Ibukota Jakarta 11470
                     ";
			$data['agent'] = $this->Agent_model->get_agent($this->uri->segment(2));

		}else{
			$section = $this->uri->segment(3);
			$data['user'] = $this->uri->segment(2);
			$data['section'] = $section;
			$data['agent'] = $this->Agent_model->get_agent($this->uri->segment(2));
		}
		
		//print_r($section);
		$slug=FALSE;
		
		$data['posts'] = $this->Product_model->get_posts($slug,$section);
		//print_r($data['posts']);

		$this->load->view('templates/header');
		$this->load->view('product/index',$data);
		$this->load->view('templates/footer');
		
	}

	public function view($slug = FALSE) {

		if($this->uri->segment(3) != NULL){
			$slug = $this->uri->segment(4);
			$section = $this->uri->segment(3);
			$data['agent'] = $this->Agent_model->get_agent($this->uri->segment(2));
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
				  Daerah Khusus Ibukota Jakarta 11470
                     ";
			
		}else{
			$slug = $this->uri->segment(3);
			$section = $this->uri->segment(2);

		}

		$data['post'] = $this->Product_model->get_posts($slug,$section);
		//print_r($data['posts']);

		if(empty($data['post'])) {
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('product/view',$data);
		$this->load->view('templates/footer');

	}
}